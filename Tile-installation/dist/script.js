var currentTab = 0;
var firstName = "";
var lastName = "";
var address = "";
var email = "";
var phone = "";
const addressInp = document.getElementById("address");
const addressError = document.getElementById("address-error");
const zipInp = document.getElementById("zip");
const zipError = document.getElementById("zip-error");
const emailInp = document.getElementById("email");
const emailError = document.getElementById("email-error");
const firstNameInp = document.querySelector('input[name="firstName"]');
const lastNameInp = document.querySelector('input[name="lastName"]');
const firstNameError = document.getElementById("firstNmaeError");
const lastNameError = document.getElementById("secondNmaeError");
const phoneInp = document.getElementById("phone");
const phoneError = document.getElementById("phone-error");
showTab(currentTab);

function showTab(n, direction) {
  var tab = document.getElementsByClassName("tab");
  tab[n].style.display = "block";

  if (direction > 0) {
    tab[n].classList.add("animate-slide-next");
    setTimeout(() => {
      tab[n].classList.remove("animate-slide-next");
    }, 300);
  } else if (direction < 0) {
    tab[n].classList.add("animate-slide-prev");
    setTimeout(() => {
      tab[n].classList.remove("animate-slide-prev");
    }, 300);
  }

  if (n === 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "flex";
  }

  fixStepIndicator(n);
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  let fName = document.getElementById("name");
  let lName = document.getElementById("lname");
  let a = document.getElementById("address");
  let e = document.getElementById("email");
  let phoneNumber = document.getElementById("phone");
  if (n === 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";

  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    firstName = fName.value;
    lastName = lName.value;
    phone = phoneNumber.value;
    address = a.value;
    email = e.value;
    //document.getElementById("regForm").submit();
    //document.body.innerHTML = "";
    return false;
  }
  showTab(currentTab, n);
}
function back() {
  if (currentTab === 2) {
    nextPrev(-2);
  } else if (currentTab === 3) {
    nextPrev(-3);
  } else {
    nextPrev(-1);
  }
}
var isPhoneValid = false;
function successInp(inpEle, errorEle) {
  errorEle.innerText = "";
  inpEle.classList.remove("placeholder-red-800", "text-red-800", "invalid");
  inpEle.classList.add("placeholder-white", "text-white");
}
//Error Input
function errorInp(inpEle, errorEle, message) {
  errorEle.innerText = message;
  inpEle.classList.remove("placeholder-white", "text-white");
  inpEle.classList.add("placeholder-red-800", "text-red-800", "invalid");
}

//prevent more then 5 digits
zipInp.addEventListener("input", () => {
  if (zipInp.value.length > 5) {
    zipInp.value = zipInp.value.slice(0, 5);
  }
});
function validateForm() {
  var x,
    y,
    i,
    valid = true;
  var phoneno = /^\(?([0-9]{3})\)?[-.\s]?([0-9]{3})[-.\s]?([0-9]{4})$/;
  var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  for (i = 0; i < y.length; i++) {
    let attcheck = !y[i].hasAttribute("data-store");
    if (attcheck && y[i].value === "") {
      y[i].className += " invalid";

      valid = false;
    }
    if (currentTab === 5) {
      if (addressInp.value.length > 0) {
        return true;
      } else {
        errorInp(addressInp, addressError, "Address should not be empty");
        addressInp.focus();
        valid = false;
      }
      addressInp.addEventListener("input", () => {
        if (addressInp.value.length > 0) {
          successInp(addressInp, addressError);
        } else {
          errorInp(addressInp, addressError, "Address should not be empty");
        }
      });
    }
    if (currentTab === 7) {
      if (emailInp.value.match(email)) {
        return true;
      } else {
        document.getElementById("email-error").innerText =
          "Enter a valid email";
        document.getElementById("email-error").style.color = "red";
        y[i].focus();
        errorInp(emailInp, emailError, "Enter a valid email");
        emailInp.focus();
        valid = false;
      }
      emailInp.addEventListener("input", () => {
        if (emailInp.value.match(email)) {
          successInp(emailInp, emailError);
        } else {
          errorInp(emailInp, emailError, "Enter a valid email");
        }
      });
    }
    if (currentTab === 6) {
      if (zipInp.value.length === 5) {
        return true;
      } else {
        errorInp(zipInp, zipError, "Enter a valid zip code");
        zipInp.focus();
        valid = false;
      }
  
      zipInp.addEventListener("input", () => {
        if (zipInp.value.length === 5) {
          successInp(zipInp, zipError);
        } else {
          errorInp(zipInp, zipError, "Enter a valid zip code");
        }
      });
    }
    if (currentTab === 8) {
      let valid = true;

      if (firstNameInp.value.length > 0) {
        successInp(firstNameInp, firstNameError);
      } else {
        errorInp(firstNameInp, firstNameError, "First name required.");
        valid = false;
      }

      if (lastNameInp.value.length > 0) {
        successInp(lastNameInp, lastNameError);
      } else {
        errorInp(lastNameInp, lastNameError, "Last name required.");
        valid = false;
      }

      firstNameInp.addEventListener("input", () => {
        if (firstNameInp.value.length > 0) {
          successInp(firstNameInp, firstNameError);
        } else {
          errorInp(firstNameInp, firstNameError, "First name required.");
        }
      });

      lastNameInp.addEventListener("input", () => {
        if (lastNameInp.value.length > 0) {
          successInp(lastNameInp, lastNameError);
        } else {
          errorInp(lastNameInp, lastNameError, "Last name required.");
        }
      });

      return valid;
    }
    if (currentTab === 9) {
      if (phoneInp.value.match(phoneno)) {
        isPhoneValid = true;
        return true;
      } else {
        document.getElementById("phone-error").innerText =
          "Enter a valid phone number";
        document.getElementById("phone-error").style.color = "red";
        errorInp(phoneInp, phoneError, "Enter a valid phone number");
        phoneInp.focus();
        valid = false;
      }
      phoneInp.addEventListener("input", () => {
        if (phoneInp.value.match(phoneno)) {
          successInp(phoneInp, phoneError);
        } else {
          errorInp(phoneInp, phoneError, "Enter a valid phone number");
        }
      });
    }
  }

  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}
function radioClick(index) {
  nextPrev(index);
}
function fixStepIndicator(n) {
  var i,
    x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
    x[i].style.display = "none";
  }

  x[n].className += " active";
}
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

////

$("#regForm").on("submit", function (e) {
  e.preventDefault();
  console.log("Submitted");

  // Validate phone
  if (!isPhoneValid) return false;

  // Append the selected value to the form data
  var formData = $(this).serialize();

  console.log(formData);
  $.ajax({
    url: "/Tile-installation/dist/process.php?method=Leady",
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
