
$.getJSON('http://ipinfo.io', function(data){
    $('#location').text(data['city']+" ")
});
var currentTab = 0;
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
    if (n === 1&&!validateForm()) return false;
    x[currentTab].style.display = "none";

    currentTab = currentTab + n;
    if (currentTab >= x.length) {
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
