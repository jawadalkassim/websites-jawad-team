$.getJSON('http://ipinfo.io', function(data){
    $('#location').text(data['city'] +" Contractor-Matching"+ " ")
}).done(function() {})
    .fail(function() { $('#location').text("Contractor-Matching" + " ")  })
var currentTab = 0;
var zipCode =""
var oneToTwo =""
var threeToFive =""
var sixToNine =""
var TenOrAbove =""
var windowReplacement = ""
var windowRepair = ""
var windowInstallation = ""
var firstName=""
var lastName=""
var address =""
var email =""
var phone =""
showTab(currentTab);

function showTab(n) {
    var tab = document.getElementsByClassName("tab");
    tab[n].style.display = "block";
    if (n === 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }

    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    let zip = document.getElementById('zip')
    let fName = document.getElementById('name')
    let lName = document.getElementById('lname')
    let a = document.getElementById('address')
    let phoneNumber = document.getElementById('phone')
    if (n === 1&&!validateForm()) return false;
    x[currentTab].style.display = "none";

    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        zipCode = zip.value
        firstName = fName.value
        lastName = lName.value
        phone = phoneNumber.value
        address = a.value
        document.getElementById("regForm").submit();
        return false;
    }
    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    var numbers = /^[0-9]+$/;
    var phoneno = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    for (i = 0; i < y.length; i++) {

        if (y[i].value === "") {

            y[i].className += " invalid";

            valid = false;
        }
        if(currentTab===0){
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
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
}
function radioClick(index){
    let one_Two = document.getElementById('1-2')
    let three_five = document.getElementById('3-5')
    let six_nine = document.getElementById('6-9')
    let ten_above = document.getElementById('10+')
    let replacement = document.getElementById('replacement')
    let repair = document.getElementById('repair')
    let installation = document.getElementById('installation')
    if(index===0){
        windowReplacement = replacement.innerText
    }
    else if(index===1){
        windowRepair = repair.innerText
    }
    else if(index===2){
        windowInstallation = installation.innerText
    }
    else if(index===3){
        oneToTwo = one_Two.innerText
    }
    else if(index===4){
        threeToFive = three_five.innerText
    }
    else if(index===5){
        sixToNine = six_nine.innerText
    }
    else if(index===6){
        TenOrAbove = ten_above.innerText
    }
    nextPrev(1)
}
function fixStepIndicator(n) {

    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
        x[i].style.display="none"
    }

    x[n].className += " active";
}
