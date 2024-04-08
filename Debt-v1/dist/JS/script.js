
var currentTab = 0;

var slider = document.getElementById("slider");
var output = document.getElementById("output");
showTab(currentTab);

output.innerHTML = slider.value;

// var ipadr;

// fetch('https://ipinfo.io/json')
//     .then(response => response.json())
//     .then(data => {

//         document.getElementById("ip_address").value = data.ip;
//     })
//     .catch(error => console.error('Error fetching IP address:', error));

slider.oninput = function() {
    output.innerHTML = this.value;
    if(output.innerHTML==="100000"){
        slider.style.background=" rgb(185 28 28  )"
    }
    else{
        slider.style.background="white"
    }
}

$('input').keypress(function (e) {
    if (e.which == 13) {
        nextPrev(1);
        return false; //<---- Add this line
    }
});

$('#regForm').on('submit', function (e) {
    e.preventDefault();
    console.log("Submitted");


    // Append the selected value to the form data
    var formData = $(this).serialize();

    $.ajax({
        url: '/Debt-v1/dist/process.php?method=Lead',
        type: "post",
        data: formData,
        dataType: "json",
        success: function (data) {
            if (data.status_text && data.redirect_url) {
                window.location = data.redirect_url;
            } else {
                alert(data.response_text);
            }
        },
        error: function (data) {
            alert(
                'Oops, we have encountered an error processing your application. We are working on resolving this issue. Sorry for any inconvenience.');
        }
    });
});
function showTab(n) {
    var tab = document.getElementsByClassName("tab");
    tab[n].style.display = "block";
    window.scrollTo(0, 0);
    if (n === 0) {
        document.getElementById("prevBtn").style.display = "none";
        document.getElementById('title').style.display="block"
    } else {
        document.getElementById("prevBtn").style.display = "inline";
        document.getElementById('title').style.display="none"
    }

    fixStepIndicator(n)
}

function nextPrev(n) {
    console.log(n);
    var x = document.getElementsByClassName("tab");
    if (n === 1&&!validateForm()) return false;
    x[currentTab].style.display = "none";

    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        document.getElementById("regForm").submit();
        return false;
    }
    console.log(currentTab);
    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    var numbers = /^[0-9]+$/;
    var phoneno = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {

        if (y[i].value === "") {

            y[i].className += " invalid";

            valid = false;
        }
        if(currentTab===1){
            if(y[i].value.match(numbers)&&y[i].value.length===5)
            {
                return true;
            }
            else
            {
                document.getElementById('zip-error').innerText="Enter a valid zip code"
                document.getElementById('zip-error').style.color="red"
                y[i].focus();
                valid= false;
            }
        }
        if(currentTab===2){
            if(y[i].value.match(email))
            {
                return true;
            }
            else
            {
                document.getElementById('email-error').innerText="Enter a valid email"
                document.getElementById('email-error').style.color="red"
                y[i].focus();
                valid= false;
            }
        }
        if(currentTab===5){
            if(y[i].value.match(phoneno))
            {
                return true;
            }
            else
            {
                document.getElementById('phone-error').innerText="Enter a valid phone number"
                document.getElementById('phone-error').style.color="red"
                y[i].focus();
                valid= false;
            }
        }
    }

    if (valid) {
        document.getElementsByClassName("stepper-item")[currentTab].className += " finish";
    }
    return valid;
}
function backPrev(n){
    var i, x = document.getElementsByClassName("stepper-item");
    var t = document.getElementsByClassName("tab");
    // var y = t[currentTab].getElementsByTagName("input");
    for (i = 0; i < x.length; i++) {
        if(i>=1 && i<x.length){
            x[currentTab-1].className = x[currentTab-1].className.replace("stepper-item", "stepper-item active");
            x[currentTab].className = x[currentTab].className.replace("active completed", "stepper-item");
        }
    }
    // y[0].value =""
    nextPrev(n)
}
function fixStepIndicator(n) {

    var i, x = document.getElementsByClassName("stepper-item");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace("stepper-item", "stepper-item active");
        x[i].style.display="flex"
    }
    x[n].className += "active completed";
}

function updateHiddenInput(value) {
    document.getElementById("employed_field").value = value;
    console.log(value);
    nextPrev(1);
}

function initAutocomplete() {
    // Get the input element for the autocomplete search box.
    var input = document.getElementById('address');
    let city = document.getElementById('city');
    let state = document.getElementById('state');
    // Create the autocomplete object, restricting the search to geographical location types.
    var autocomplete = new google.maps.places.Autocomplete(input, {
        types: ['geocode']
    });
    autocomplete.setComponentRestrictions({
        'country': ['us']
    });

    // When the user selects an address from the dropdown, update the input value with the full address.
    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }

        // Update the input box with the full address
        const streetAddress = extractStreetAddress(place.address_components);
        input.value = streetAddress;

        console.log(place)
        // input.value = place.formatted_address;
        // Use the formatted address here
        const addressComponents = place.address_components;


        for (const component of addressComponents) {
            switch (component.types[0]) {
                case "administrative_area_level_1": // State
                    state.value = component.short_name;
                    break;
                case "locality": // City
                    city.value = component.short_name;
                    break;

                default:
                    // Add other non-excluded components to the address
            }
        }


    });

    function extractStreetAddress(addressComponents) {
        let streetNumber = '';
        let streetName = '';
        let address2 = '';

        for (const component of addressComponents) {
            switch (component.types[0]) {
                case "street_number":
                    streetNumber = component.short_name;
                    break;
                case "route":
                    streetName = component.short_name;
                    break;
                case "subpremise": // Address line 2
                    address2 = component.short_name;
                    break;
            }
        }

        // Combine street number, street name, and address line 2
        let streetAddress = streetNumber + ' ' + streetName;
        if (address2) {
            streetAddress += ', ' + address2;
        }

        return streetAddress.trim(); // Trim to remove leading/trailing spaces
    }
}