var currentTab = 0;
var progress = 0;
showTab(currentTab);

function showTab(n, direction) {
  var tab = document.getElementsByClassName("tab");
  var animation = document.getElementsByClassName("animation");
  tab[n].style.display = "block";
  if (direction > 0) {
    animation[n].classList.add("animate-slide-next");
    setTimeout(() => {
      animation[n].classList.remove("animate-slide-next");
    }, 250);
  } else if (direction < 0) {
    animation[n].classList.add("animate-slide-prev");
    setTimeout(() => {
      animation[n].classList.remove("animate-slide-prev");
    }, 250);
  }
  progress = (n / tab.length) * 100;
  for (var i = 0; i < tab.length; i++) {
    tab[i].querySelector(".myBar").style.width = `${progress}%`;
  }
  fixStepIndicator(n);
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  if (n === 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";

  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    let forme = document.getElementById("regForm");
    let spiner = document.getElementById("spiner");
    let thanks = document.getElementById("thankYouMessage");
    forme.classList.add("hidden");
    spiner.classList.remove("hidden");
    spiner.classList.add("flex");
    thanks.classList.remove("hidden");

    if (window.innerWidth <= 769) {
      spinerToMobile();
    } else {
      spinerToDesk();
    }

    return false;
  }

  showTab(currentTab, n);
}

function spinerToMobile() {
  window.scroll({
    top: 492,
    left: 0,
    behavior: "smooth",
  });
}
function spinerToDesk() {
  window.scroll({
    top: 400,
    left: 0,
    behavior: "smooth",
  });
}

function moveToNextInput(event) {
  var target = event.target;
  var maxLength = parseInt(target.getAttribute("maxlength"), 10);
  var myLength = target.value.length;
  if (myLength >= maxLength) {
    var nextInputId;
    switch (target.id) {
      case "dob-month":
        nextInputId = "dob-day";
        break;
      case "dob-day":
        nextInputId = "dob-year";
        break;
      case "dob-year":
        nextInputId = "";
        break;
    }

    if (nextInputId) {
      document.getElementById(nextInputId).focus();
    }
  }
}

function correctDate(event) {
  var target = event.target;
  var value = target.value;
  if (value.length === 1) {
    target.value = "0" + value;
  }
}

document.getElementById("dob-month").addEventListener("input", moveToNextInput);
document.getElementById("dob-day").addEventListener("input", moveToNextInput);
document.getElementById("dob-year").addEventListener("input", moveToNextInput);

document.getElementById("dob-month").addEventListener("blur", correctDate);
document.getElementById("dob-day").addEventListener("blur", correctDate);

//validate date
function validateDate() {
  var monthStr = document.getElementById("dob-month").value.trim();
  var dayStr = document.getElementById("dob-day").value.trim();
  var yearStr = document.getElementById("dob-year").value.trim();
  var errorElement = document.getElementById("date-error");

  var month = parseInt(monthStr, 10);
  var day = parseInt(dayStr, 10);
  var year = parseInt(yearStr, 10);

  const errorMessage = {
    allFieldsRequired: "All fields are required.",
    invalidMonth: "Please input a valid Month",
    invalidDay: "Please input a valid Day",
    invalidYear: "Please input a valid Year",
  };

  if (monthStr === "" && dayStr === "" && yearStr === "") {
    errorElement.innerText = errorMessage.allFieldsRequired;
    errorElement.style.color = "red";
    return false;
  }

  if (isNaN(month) || month < 1 || month > 12) {
    errorElement.innerText = errorMessage.invalidMonth;
    errorElement.style.color = "red";
    return false;
  }

  if (isNaN(day) || day < 1 || day > 31) {
    errorElement.innerText = errorMessage.invalidDay;
    errorElement.style.color = "red";
    return false;
  }

  if (isNaN(year) || yearStr.length !== 4) {
    errorElement.innerText = errorMessage.invalidYear;
    errorElement.style.color = "red";
    return false;
  }

  errorElement.innerText = "";
  return true;
}

//add phone format
document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("phone");

  phoneInput.addEventListener("input", function (event) {
    const input = event.target;
    let value = input.value.replace(/\D/g, "");
    const length = value.length;

    if (length > 3 && length <= 6) {
      input.value = `${value.slice(0, 3)}-${value.slice(3)}`;
    } else if (length > 6) {
      input.value = `${value.slice(0, 3)}-${value.slice(3, 6)}-${value.slice(
        6,
        10
      )}`;
    } else {
      input.value = value;
    }
  });
});

zip.addEventListener("input", () => {
  zip.value = zip.value.replace(/\D/g, "").slice(0, 5);
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
    let attCheck = !y[i].hasAttribute("data-store");

    if (attCheck && y[i].value === "") {
      y[i].className += " invalid";

      valid = false;
    }
  }
  if (currentTab === 2) {
    if (validateDate()) {
      return true;
    } else {
      valid = false;
    }
  }
  if (currentTab === 3) {
    var firstName = document.getElementById("fName").value;
    var lastName = document.getElementById("lName").value;
    var emailI = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var zip = document.getElementById("zip").value;
    if (
      phone.match(phoneno) &&
      emailI.match(email) &&
      firstName !== "" &&
      lastName !== "" &&
      zip.length === 5
    ) {
      return true;
    } else if (firstName === "" && lastName === "") {
      document.getElementById("error").innerText = "please input a valid name";
      document.getElementById("error").style.color = "red";
      valid = false;
    } else if (zip.length !== 5) {
      document.getElementById("error").innerText =
        "please input a valid zip code";
      document.getElementById("error").style.color = "red";
      valid = false;
    } else if (!emailI.match(email)) {
      document.getElementById("error").innerText = "please input a valid email";
      document.getElementById("error").style.color = "red";
      valid = false;
    } else if (!phone.match(phoneno)) {
      document.getElementById("error").innerText =
        "please input a valid phone number";
      document.getElementById("error").style.color = "red";
      valid = false;
    } else {
      document.getElementById("error").innerText = "please fill fields";
      document.getElementById("error").style.color = "red";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}

function thankYouMessage() {
  document.getElementById("regForm").style.display = "none";
  document.getElementById("thankYouMessage").style.display = "block";
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
      let btnValue = btn.innerHTML.trim().slice(0, 3).replace(",", "");
      inp.value = btnValue;
    });
  });
});

document.getElementById("regForm").addEventListener("submit", function (event) {
  event.preventDefault();

  let first_name = document.querySelector('input[name="firstName"]').value;
  let last_name = document.querySelector('input[name="lastName"]').value;
  let email = document.querySelector('input[name="email"]').value;
  let phone_home = document.querySelector('input[name="phone"]').value;
  let zip = document.querySelector('input[name="zip"]').value;
  let day = document.getElementById("dob-day").value;
  let month = document.getElementById("dob-month").value;
  let year = document.getElementById("dob-year").value;
  let accident = document.querySelector('input[name="accident"]').value;
  let lawyer = document.querySelector('input[name="lawyer"]').value;

  if (
    first_name === "" ||
    last_name === "" ||
    email === "" ||
    phone_home === "" ||
    zip === ""
  )
    return;

  let GHLData = {
    firstName: first_name,
    lastName: last_name,
    email: email,
    phone: phone_home,
    postalCode: zip,
    tags: ["yt", "walker"],

    customField: {
      Aar7YhsdWr8QHDhFxgXu: lawyer,
      q58lSj64V7sXLdnTwO5z: document.querySelector(
        'input[name="xxTrustedFormCertUrl"]'
      ).value,
      sO3W2ZWvrDD783qu6y5N: `${year}-${month}-${day}`,
      Bys6WHtPrPBurzDIwAAY: redtrackClickId,
      jFxp7hBrEOAeAze971OI: document.querySelector(
        'input[name="universal_leadid"]'
      ).value,
      XVEWr9Urw53TlySskNCU: accident,
    },
  };

  console.log(GHLData);
  try {
    fetch("https://aitechnology.fun/leads/mva-yt", {
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(GHLData),
      method: "POST",
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        setTimeout(() => {
          window.location.href = "./thank-you.html";
        }, 500);
      })
      .catch((error) => {
        console.log(error);
      });
  } catch (error) {
    console.log(error);
    setTimeout(() => {
      window.location.href = "./thank-you.html";
    }, 500);
  }
});
