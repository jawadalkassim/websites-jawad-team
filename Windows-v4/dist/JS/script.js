
$.getJSON('http://ipinfo.io', function(data){
    $('#location').text(data['city']+" ")
});
var currentTab = 0;
var zipCode="";
var workType ="";
var windowsNum ="";
var duration ="";
var address ="";
var city ="";
var state ="";
var firstName ="";
var lastName ="";
var email ="";
var phone ="";
var contactTo ="";
var contactTime ="";
var comment ="";
showTab(currentTab);

function showTab(n) {
    var tab = document.getElementsByClassName("tab");
    tab[n].style.display = "block";
    if (n === 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if(currentTab===6){
        document.body.style.overflowY = "auto"
        document.getElementById('opacity').style.height="140%";
    }

    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    let zip = document.getElementById('zip')
    let selectWork = document.getElementById('work-type')
    let selectNum = document.getElementById('windows-num')
    let selectDuration = document.getElementById('duration')
    let selectAddress = document.getElementById('address')
    let selectCity = document.getElementById('city')
    let selectState = document.getElementById('state')
    let fName = document.getElementById('first-name')
    let lName = document.getElementById('last-name')
    let e = document.getElementById('email')
    let p = document.getElementById('phone-input')
    let contact = document.getElementById('contact-to')
    let time = document.getElementById('contact-time')
    let message = document.getElementById('message')
    if (n === 1&&!validateForm()) return false;
    x[currentTab].style.display = "none";

    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        zipCode =zip.value
        address = selectAddress.value
        city = selectCity.value
        state = selectState.value
        workType = selectWork.value
        windowsNum = selectNum.value
        duration = selectDuration.value
        firstName = fName.value
        lastName = lName.value
        email = e.value
        phone = p.value
        contactTo = contact.value
        contactTime = time.value
        comment = message.value
        document.getElementById("regForm").submit();
        return false;
    }
    updateProgressBar(currentTab,x.length)
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
        if(currentTab===0){
            let zipError = document.getElementById('zip-error')
            if(y[i].value.match(numbers)&&y[i].value.length===5)
            {
                return true;
            }
            else
            {
                zipError.innerText="Enter a valid zip code"
                zipError.style.color="red"
                y[i].focus();
                valid= false;
            }
        }
        if(currentTab===4){
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
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
}

function fixStepIndicator(n) {

    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
        x[i].style.display="none"
    }

    x[n].className += " active";
}
function updateProgressBar(currentStep, totalSteps) {
    var progress = (currentStep / totalSteps) * 100;
    if(currentStep===1){
        progress = progress +15
    }
    document.getElementById('myBar').style.width = `${progress}%`
    document.getElementById('myBar').innerText = `${(progress.toFixed()).toString()}%`
}
