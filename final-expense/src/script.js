const inpAgeOver = document.getElementById("ageOver");
const ageOverYes = document.getElementById("ageyes");
const ageOverNo = document.getElementById("ageno");
const inpCitizen = document.getElementById("citizen");
const citizenYes = document.getElementById("citizenyes");
const citizenNo = document.getElementById("citizenno");
const allNext = document.querySelectorAll("[data-next]");
const setTwo = document.querySelector("#step2");
const qualifyStep = document.querySelector("#qualify");
const loading1 = document.querySelector("#loading1");
const loading2 = document.querySelector("#loading2");
const loading3 = document.querySelector("#loading3");
const timerCounter = document.querySelector("#timer");
const form = document.querySelector("#form");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const fomData = new FormData(form);

  const data = Object.fromEntries(fomData);

  const jsonData = JSON.stringify(data);
});

// Insert Data to Input
function handleButtonClick(btn, inpTarget) {
  btn.addEventListener("click", function () {
    const chosenValue = this.getAttribute("data-value");
    inpTarget.value = chosenValue;
  });
}

//step one get data
handleButtonClick(ageOverYes, inpAgeOver);
handleButtonClick(ageOverNo, inpAgeOver);

//step two get data
handleButtonClick(citizenYes, inpCitizen);
handleButtonClick(citizenNo, inpCitizen);

const formSteps = [...form.querySelectorAll("[data-step]")];
const allNextBtns = document.querySelectorAll("[data-next-skip]");

let currentStep = formSteps.findIndex((step) => {
  return step.classList.contains("shows");
});

//handel nextBtns
function nextAction(btns) {
  Array.from(btns).map((btn) => {
    btn.addEventListener("click", () => {
      showCurrentStep();
    });
  });
}
nextAction(allNextBtns);

function showCurrentStep() {
  currentStep += 1;
  formSteps.forEach((step, index) => {
    if (index === currentStep) {
      step.classList.add("fade-in");
      setTimeout(() => {
        step.classList.remove("hidden");
        step.classList.add("shows");
      }, 500);
      setTimeout(() => {
        step.classList.remove("fade-in");
      }, 1000);
    } else {
      step.classList.add("fade-out");

      setTimeout(() => {
        step.classList.remove("shows");
        step.classList.add("hidden");
      }, 500);
      setTimeout(() => {
        step.classList.remove("fade-out");
      }, 600);
    }
  });
}

//handel triger Loding
function triggerLoading(buttons) {
  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      loadingSequence();
    });
  });
}
triggerLoading(allNext);

function loadingSequence() {
  const elements = [loading1, loading2, loading3];

  let totalTime = 0;

  setTwo.classList.remove("shows");
  setTwo.classList.add("hidden");

  elements.forEach((element) => {
    setTimeout(() => {
      element.classList.add("fade-in");
      element.classList.remove("hidden");
    }, totalTime);

    totalTime += 500;

    setTimeout(() => {
      element.classList.add("fade-out");
    }, totalTime);

    totalTime += 500;

    setTimeout(() => {
      element.classList.add("hidden");
      element.classList.remove("fade-in", "fade-out");
    }, totalTime);
  });

  setTimeout(() => {
    destination();
  }, 3000);
}

//determine destination
function destination() {
  const destinationValue = inpCitizen.value;
  if (destinationValue === "yes") {
    qualifyStep.classList.remove("hidden");
    qualifyStep.classList.add("fade-in");
    startTimer();
  } else {
    window.location.href = "privacy-policy.html";
  }
}

//timer
function startTimer() {
  let timer = 60 * 5;
  let seconds, minutes;
  const interval = setInterval(() => {
    minutes = Math.floor(timer / 60);
    seconds = timer % 60;

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    if (timer <= 0) {
      clearInterval(interval);
      timerCounter.textContent = "00:00";
    } else {
      timer--;
    }

    timerCounter.textContent = `${minutes}:${seconds}`;
  }, 1000);
}
