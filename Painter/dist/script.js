
var currentTab = 0;
var firstName=""
var lastName=""
var address =""
var email =""
var phone =""
showTab(currentTab);

function showTab(n,direction) {
    var tab = document.getElementsByClassName("tab");
    tab[n].style.display = "block";
    if (direction > 0) {
        tab[n].classList.add("animate-slide-next");
        setTimeout(() => {
            tab[n].classList.remove("animate-slide-next");
        }, 300);
    } else if(direction < 0){
        tab[n].classList.add("animate-slide-prev");
        setTimeout(() => {
            tab[n].classList.remove("animate-slide-prev");
        }, 300);
    }
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
    showTab(currentTab,n);
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
  
   

    else {
        nextPrev(-1)
    }
}
var isPhoneValid = false;
function validateForm() {
    var x, y, i, valid = true;
    var phoneno = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    for (i = 0; i < y.length; i++) {
        if (!y[i].hasAttribute("data-store") && y[i].value === "") {
            y[i].className += " invalid";

            valid = false;
        }
        if(currentTab===7){
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
        if(currentTab===6){
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
        if(currentTab===9){
            if(y[i].value.match(phoneno))
            {
                isPhoneValid = true;
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

//
let steps = document.querySelectorAll(`[data-tab]`);

steps.forEach((step) => {
    let inp = step.querySelector("input");
    let btns = step.querySelectorAll(`[data-btn]`);
    btns.forEach((btn) => {
        btn.addEventListener("click", () => {
            let btnValue = btn.innerHTML.trim();
            inp.value = btnValue;
        });
    });
});

///////

$("#regForm").on("submit", function (e) {
    e.preventDefault();
    console.log("Submitted");

    // Validate phone
    if (!isPhoneValid) return false;

    // Append the selected value to the form data
    var formData = $(this).serialize();

    console.log(formData);
    $.ajax({
        url: "/Painter/dist/process.php?method=Lead",
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
                "Oops, we have encountered an error processing your application. We are working on resolving this issue. Sorry for any inconvenience."
            );
        },
    });
});
