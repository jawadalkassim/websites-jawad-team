
var currentTab = 0;
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
    let fName = document.getElementById('name')
    let lName = document.getElementById('lname')
    let a = document.getElementById('address')
    let e = document.getElementById('email')
    let phoneNumber = document.getElementById('phone')
    if (n === 1&&!validateForm()) return false;
    x[currentTab].style.display = "none";

    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        firstName = fName.value
        lastName = lName.value
        phone = phoneNumber.value
        address = a.value
        email = e.value
        document.getElementById("regForm").submit();
        document.body.innerHTML=""
        return false;
    }
    showTab(currentTab);
}
function back(){
    if(currentTab===1){
        nextPrev(-1)
    }
    else if(currentTab===2){
        nextPrev(-2)
    }
    else if(currentTab===3){
        nextPrev(-3)
    }
    else if(currentTab===4){
        nextPrev(-4)
    }
  
   

    else {
        nextPrev(-1)
    }
}

function validateForm() {
    var x, y, i, valid = true;
    var phoneno = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    for (i = 0; i < y.length; i++) {
        if (y[i].value === "") {

            y[i].className += " invalid";

            valid = false;
        }
        if(currentTab===8){
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
        if(currentTab===7){
            if(y[i].value.length===5)
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
        if(currentTab===10){
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
    nextPrev(index)
}
function fixStepIndicator(n) {

    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
        x[i].style.display="none"
    }

    x[n].className += " active";
}
