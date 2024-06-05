var placeSearch,
    autocomplete,
    checkFlag = true,
    $addressInput,
    $cityInput,
    $stateInput,
    $streetNumberInput,
    $streetNameInput,
    $postalInput,
    componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        postal_code: 'short_name'
    };

google.maps.event.addDomListener(window, 'load', initAutocomplete);

var checkExist = setInterval(function () {
    if ($('input[name="street"]').length) {
        //clearInterval(checkExist);
        if (checkFlag) {
            initAutocomplete();
            checkFlag = false;
        }
    } else {
        checkFlag = true;
    }
}, 100); // check every 100ms

function initAutocomplete() {
    $streetNumberInput = $("input[name='street_number']");
    $streetNameInput = $("input[name='street_name']");
    $addressInput = $('input[name="address"]');
    $cityInput = $('input[name="city"]');
    $stateInput = $('select[name="state"]');
    $postalInput = $('input[name="zip"]');

    // Create the autocomplete object, restricting the search predictions to
    // geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
        document.getElementById('gm-autocomplete'), {
            types: ['address']
        });

    autocomplete.setComponentRestrictions({
        'country': ['us']
    });

    // Avoid paying for data that you don't need by restricting the set of
    // place fields that are returned to just the address components.
    autocomplete.setFields(['address_component']);

    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace(),
        streetVal,
        routeVal;

    // for (var component in componentForm) {
    //     document.getElementById(component).value = '';
    //     document.getElementById(component).disabled = false;
    // }

    // Get each component of the address from the place details,
    // and then fill-in the corresponding field on the form.

	//console.log(place.address_components);
	
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            switch (addressType) {
                case 'street_number':
                    streetVal = val;
                    autoCompleteEvent($streetNumberInput, val);
                    break;
                case 'route':
                    routeVal = val;
                    autoCompleteEvent($streetNameInput, val);
                    break;
                case 'locality':
                    autoCompleteEvent($cityInput, val);
                    break;
                case 'administrative_area_level_1':
                    $stateInput.val(val).change();
                    // console.log(val);
                    // autoCompleteEvent($stateInput, val);
                    break;
                case 'postal_code':
                    autoCompleteEvent($postalInput, val);
                    break;
            }
        }
    }
    
    if(streetVal && routeVal){
        autoCompleteEvent($addressInput, streetVal + " " + routeVal);
    } else if(routeVal){
        autoCompleteEvent($addressInput, routeVal);
    } else {
        autoCompleteEvent($addressInput, streetVal);
    }

    //autoCompleteEvent($addressInput, streetVal + " " + routeVal);

	var fullAddress = $addressInput.val() + ", " + $cityInput.val() + ", " + $stateInput.val() + ", " +
        $postalInput.val();
	$("#autocomplete").val(fullAddress);
}

function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}

function autoCompleteEvent($el, value) {
    $el.val(value);
    $el.trigger('input');
}

// $("form").submit(function (e) {
//     e.preventDefault();
//     if ($addressInput.val().length == 0) {
//         alert("Invalid Address. Please select address from dropdown")
//         return false
//     } else {
//         $(this).submit();
//     }
// });