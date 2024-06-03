//setError
const setError = (element, errorDisplay, message) => {
  errorDisplay.innerText = message;
  element.classList.remove("border-theard", "placeholder-theard");
  element.classList.add(
    "border-rose-300",
    "shadow-inputShadowError",
    "placeholder-rose-500"
  );
};

//setSucces
const setSuccess = (element, errorDisplay) => {
  errorDisplay.innerText = "";
  element.classList.remove("border-rose-300", "shadow-inputShadowError");
  element.classList.add("border-theard");
};

//step one
const stepOne = document.querySelector("#step1");
const summitButtonOne = stepOne.querySelector("[data-next]");
const zipInp = document.querySelector("#zip");
const zipError = stepOne.querySelector('[error="error"]');

summitButtonOne.addEventListener("click", function () {
  if (validateStepOne()) {
    showCurrentStep("plus");
  }

  zipInp.addEventListener("input", validateStepOne);
});

const validateStepOne = () => {
  let isValid = true;
  const zipValue = zipInp.value.trim();

  const zipRegex = /^\d{5}(-\d{4})?$/;

  if (!zipRegex.test(zipValue)) {
    setError(zipInp, zipError, "Zip is required.");
    isValid = false;
  } else {
    setSuccess(zipInp, zipError);
  }

  return isValid;
};

//step two
const stepTwo = document.querySelector("#step2");
const summitButtonTwo = stepTwo.querySelector("[data-next]");
const firstNameInp = document.querySelector("#firstName");
const lastNameInp = document.querySelector("#lastName");
const firstNameError = stepTwo.querySelector(".firstNameErorr");
const lastNameError = stepTwo.querySelector(".lastNameErorr");

summitButtonTwo.addEventListener("click", function () {
  if (validateStepTwo()) {
    showCurrentStep("plus");
  }

  firstNameInp.addEventListener("input", validateStepTwo);
  lastNameInp.addEventListener("input", validateStepTwo);
});

const validateStepTwo = () => {
  let isValid = true;
  const firstNameValue = firstNameInp.value.trim();
  const lastNameValue = lastNameInp.value.trim();

  const lettersRegex = /^[A-Za-z]+$/;

  if (firstNameValue === "" || !lettersRegex.test(firstNameValue)) {
    setError(firstNameInp, firstNameError, "First Name is required.");
    isValid = false;
  } else {
    setSuccess(firstNameInp, firstNameError);
  }

  if (lastNameValue === "" || !lettersRegex.test(lastNameValue)) {
    setError(lastNameInp, lastNameError, "Last Name is required.");
    isValid = false;
  } else {
    setSuccess(lastNameInp, lastNameError);
  }

  return isValid;
};

//step three
const stepThree = document.querySelector("#step3");
const summitButtonThree = stepThree.querySelector("[data-next]");
const emailnp = document.querySelector("#email");
const phoneInp = document.querySelector("#phone");
const emailErorr = stepThree.querySelector(".emailErorr");
const phoneErorr = stepThree.querySelector(".phoneErorr");

phoneInp.addEventListener("input", formatPhoneNumber);

// function formatPhoneNumber() {
//   let input = phoneInp.value.replace(/\D/g, "");
//   let formattedNumber = "";

//   formattedNumber = input.length > 0 ? "(" + input.slice(0, 3) : "";
//   formattedNumber += input.length > 3 ? ") " + input.slice(3, 6) : "";
//   formattedNumber += input.length > 6 ? "-" + input.slice(6, 10) : "";
//   formattedNumber += input.length > 9 ? "-" + input.slice(10, 12) : "";

//   phoneInp.value = formattedNumber;
// }

function formatPhoneNumber() {
  let input = phoneInp.value.replace(/\D/g, ""); // Remove all non-digit characters
  let formattedNumber = "";

  if (input.length > 0) {
    formattedNumber = "(" + input.slice(0, 3);
  }
  if (input.length > 3) {
    formattedNumber += ") " + input.slice(3, 6);
  }
  if (input.length > 6) {
    formattedNumber += "-" + input.slice(6, 10);
  }

  phoneInp.value = formattedNumber;
}

const isValidEmail = (email) => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
};

// const isValidPhoneNumber = (phoneNumber) => {
//   const phoneRegex = /^\d{12}$/;
//   return phoneRegex.test(phoneNumber);
// };

const isValidPhoneNumber = (phoneNumber) => {
  const phoneRegex = /^\d{10}$/;
  return phoneRegex.test(phoneNumber);
};

summitButtonThree.addEventListener("click", function () {
  if (validiteStepThree()) {
    showCurrentStep("plus");
  }

  emailnp.addEventListener("input", validiteStepThree);
  phoneInp.addEventListener("input", validiteStepThree);
});

const validiteStepThree = () => {
  let isValid = true;

  const emailAddressInpValue = emailnp.value.trim();
  const phoneNumberInpValue = phoneInp.value.trim().replace(/\D/g, "");

  if (emailAddressInpValue === "") {
    setError(emailnp, emailErorr, " Email Address is requird.");
    isValid = false;
  } else if (!isValidEmail(emailAddressInpValue)) {
    setError(emailnp, emailErorr, "Please enter a valid email.");
    isValid = false;
  } else {
    setSuccess(emailnp, emailErorr);
  }

  if (phoneNumberInpValue === "") {
    setError(phoneInp, phoneErorr, "Phone number is requird.");
    isValid = false;
  } else if (!isValidPhoneNumber(phoneNumberInpValue)) {
    setError(phoneInp, phoneErorr, "Please enter a valid phone number.");
    isValid = false;
  } else {
    setSuccess(phoneInp, phoneErorr);
  }

  return isValid;
};

//step foure

const stepFoure = document.querySelector("#step4");
const summitButtonFoure = stepFoure.querySelector("[data-next]");
const addressInp = document.querySelector("#address");
const addressErorr = stepFoure.querySelector('[error="error"]');

summitButtonFoure.addEventListener("click", function () {
  if (validiteStepFoureInp()) {
  }

  addressInp.addEventListener("input", validiteStepFoureInp);
});

const validiteStepFoureInp = () => {
  let isValid = true;
  const streetAddressInpValue = addressInp.value.trim();

  if (streetAddressInpValue === "" || streetAddressInpValue.length < 4) {
    setError(addressInp, addressErorr, "Street is required.");
    isValid = false;
  } else {
    setSuccess(addressInp, addressErorr);
  }

  return isValid;
};

// handel progres bar

// moveFromOneStepTwoAnother
const form = document.querySelector("#form");
const formSteps = [...form.querySelectorAll("[data-step]")];
const btnsBack = document.querySelectorAll("[data-back]");

let currentStep = formSteps.findIndex((step) => {
  return step.classList.contains("flex");
});

//handel backBtns
function backStep() {
  btnsBack.forEach((btnBack) => {
    btnBack.addEventListener("click", () => {
      if (currentStep > 0) {
        showCurrentStep("minus");
      }
    });
  });
}
backStep();

function showCurrentStep(methode) {
  methode === "plus" ? (currentStep += 1) : (currentStep -= 1);
  let dirction = "";
  dirction = methode === "plus" ? "next" : "back";
  formSteps.forEach((step, index) => {
    if (index === currentStep) {
      step.classList.remove("hidden");
      step.classList.add("flex");

      // Focus on the first input field of the current step
      const firstInput = step.querySelector("input");
      if (firstInput) {
        firstInput.focus();
      }

      if (dirction === "back") {
        step.classList.add("animate-slide-prev");
      } else {
        step.classList.add("animate-slide-next");
      }

      setTimeout(() => {
        step.classList.remove("animate-slide-prev", "animate-slide-next");
      }, 500);
    } else {
      step.classList.remove("flex");
      step.classList.add("hidden");
    }
  });

  // Update the progress bar
  updateProgressBar(currentStep);
}

//handelProgressBar
function updateProgressBar(currentStep) {
  const circles = document.querySelectorAll(".progress-inner > div");
  circles.forEach((circle, index) => {
    if (index <= currentStep) {
      circle.style.backgroundColor = "#55ad5a";
      circle.style.color = "white";
    } else {
      circle.style.backgroundColor = "white";
      circle.style.color = "#55ad5a";
    }
  });
}

// submit data

form.addEventListener("submit", function (e) {
  e.preventDefault();

  if (validiteStepFoureInp()) {
    const fomData = new FormData(form);

    const data = Object.fromEntries(fomData);

    console.log(data);
    const jsonData = JSON.stringify(data);
    console.log(jsonData);
    window.location.href = "./thank-you.html";
    //   setTimeout(() => {}, 100);
  }
});
