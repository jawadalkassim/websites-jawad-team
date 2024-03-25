
var currentTab = 0;

showTab(currentTab);
function showTab(n) {
    var tab = document.getElementsByClassName("tab");
    tab[n].style.display = "block";
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
    var k = document.getElementById('amount')
    var x = document.getElementsByClassName("tab");
    if(currentTab===0) {
        if (k.value==="0") {
            document.getElementById('amount-error').innerText = "Enter a value"
            document.getElementById('amount-error').style.color = "red"
            showTab(0)
            return false
        }
    }
    if (n === 1&&!validateForm()) return false;
    x[currentTab].style.display = "none";

    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        document.getElementById("regForm").submit();
        return false;
    }
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
        if(currentTab===3){
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
    var y = t[currentTab].getElementsByTagName("input");
    for (i = 0; i < x.length; i++) {
        if(i>=1 && i<x.length){
            x[currentTab-1].className = x[currentTab-1].className.replace("stepper-item", "stepper-item active");
            x[currentTab].className = x[currentTab].className.replace("active completed", "stepper-item");
        }
    }
    y[0].value =""
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
