$(document).ready(function () {
  //var hashValue = window.location.hash.substring(1);
  //var stepNumber = hashValue.replace(/\D/g, '');

  var queryString = window.location.search;
  var urlParams = new URLSearchParams(queryString);
  var stepNumber = urlParams.get("step");

  //disable enter button from submitting form
  $("#lead").on("keypress", function (e) {
    // Check if the pressed key is Enter (key code 13)
    if (e.which === 13) {
      e.preventDefault(); // Prevent the form from submitting
    }
  });

  $("#first_name").on("input", function () {
    var inputValue = $(this).val();
    $(".first-name-text").text("Last Step, " + inputValue);
  });

  $("#mobile_minimize_call_block").on("click", function () {
    $("#mobile_minimize_call_block svg").toggleClass("-rotate-180");
    $("#mobile_call_block").toggleClass("translate-y-16");
  });

  //initiate page transitions
  if (stepNumber) {
    $(".jquery-page").page().transition(stepNumber, "none");
    if (stepNumber > 1) {
      $("#hdnPageNumber").val(stepNumber);
      $(".back-button-container").removeClass("hidden");
      setTimeout(function () {
        if (stepNumber > 3) {
          $("#ProgressPercent2").fadeIn(500);
        }
      }, 250);
    }
  } else {
    stepNumber = 1;
    $(".jquery-page").page();
  }
  localStorage.setItem("loanz-step", stepNumber);

  //mask inputs
  $("#phone").mask("(000) 000-0000");

  //back button
  $("#back-button").on("click", function () {
    var activePageCount = $(
      ".jquery-page .jquery-page-container .page.jquery-page-active"
    ).length;
    //console.log(activePageCount);

    $("#back-button").attr("disabled", "disabled");

    var currentPage = $("#hdnPageNumber").val();
    var destinationPage = parseInt(currentPage - 1);

    //check for steps
    var prerequisitesData = $("#prerequisitesData").text();
    var jsonStartIndex = prerequisitesData.indexOf("{");
    var jsonEndIndex = prerequisitesData.lastIndexOf("}");
    var jsonSubstring = prerequisitesData.substring(
      jsonStartIndex,
      jsonEndIndex + 1
    );
    var skipStep = 0;
    var loopSteps = 1; //important
    var i = 0;

    while (i < loopSteps) {
      console.log("i = " + i + " : Next Step = " + destinationPage);

      var key = destinationPage; //
      var inclusionCount = 0;
      var exclusionCount = 0;
      var prerequisitesObj = JSON.parse(jsonSubstring);

      if (prerequisitesObj.hasOwnProperty(key)) {
        //console.log('loop : ' + key);
        var prerequisitesKeys = Object.keys(prerequisitesObj);

        if (prerequisitesObj[key].hasOwnProperty("exclusions")) {
          var exclusionsLength = Object.keys(
            prerequisitesObj[key]["exclusions"]
          ).length;
          console.log("Exclusion Length : " + exclusionsLength);
        } else {
          //console.log('no exclusions');
        }
        if (prerequisitesObj[key].hasOwnProperty("inclusions")) {
          var inclusionsLength = Object.keys(
            prerequisitesObj[key]["inclusions"]
          ).length;
          console.log("Inclusion Length : " + inclusionsLength);
        } else {
          //console.log('no inclusions required');
        }

        var prerequisitesLength = prerequisitesKeys.length;

        $.each(prerequisitesObj[key]["exclusions"], function (key, value) {
          //console.log("Key: " + key);
          //console.log("Value: " + JSON.stringify(value));
          var inputValue = $("#" + key).val();
          if (value.includes(inputValue)) {
            exclusionCount++;
            //console.log(inputValue + ' : Skip');
          }
        });

        //console.log('exclusionCount = ' + exclusionCount + ' : exclusionsLength = ' + exclusionsLength);
        //console.log('step 1 : ' + destinationPage);
        //if(skipStep > 0){

        if (exclusionCount > 0) {
          destinationPage--;
          skipStep--;
          //console.log('EXCLUDED / SKIP');
        } else {
          $.each(prerequisitesObj[key]["inclusions"], function (key, value) {
            //console.log("Key: " + key);
            //console.log("Value: " + JSON.stringify(value));
            var inputValue = $("#" + key).val();
            //console.log('value = ' + inputValue);
            if (value.includes(inputValue)) {
              inclusionCount++;
              //console.log(inputValue + ' : Stay');
            }
          });

          //console.log('inclusionCount = ' + inclusionCount + ' : inclusionsLength = ' + inclusionsLength);

          if (inclusionCount < 1) {
            //console.log('NO INCLUSIONS / SKIP');
            destinationPage--;
            skipStep--;
          } else {
            i++;
          }
        }
      } else {
        i++;
      }
    }
    //

    if (destinationPage <= 1) {
      $(".back-button-container").addClass("hidden");
      $("#ProgressPercent2").fadeOut(50);
    } else if (destinationPage <= 3) {
      $("#ProgressPercent2").fadeOut(50);
    }
    $("#hdnPageNumber").val(destinationPage);
    stepCount = $(".jquery-page .jquery-page-container .page").length;
    stepProgress = Math.round((destinationPage / stepCount) * 100);

    updateProgress(stepProgress);
    $(".jquery-page")
      .page()
      .transition(destinationPage.toString(), "slide-in-from-left");
    //$('.jquery-page').page().transition(destinationPage.toString(), 'none');
    //addParamsToURL('#Step' + destinationPage);
    //console.log('back: ' + destinationPage);
    addParamsToURL(destinationPage);

    setTimeout(function () {
      $("#back-button").removeAttr("disabled");
    }, 750);
  });

  //next page
  var dataTarget,
    dataValue,
    nextStep,
    stepCount = $(".jquery-page .jquery-page-container .page").length;

  for (let i = 1; i < stepCount; i++) {
    $("#Step" + i + ' button[data-action="next-step"]').on(
      "click",
      function () {
        dataTarget = $(this).attr("data-target");
        dataValue = $(this).attr("data-value");
        nextStep = i + 1;
        validate = formValidate();
        //console.log(dataTarget + ' - ' + dataValue);
        //
        $("#" + dataTarget).val(dataValue);
        //$('#' + dataTarget).trigger('change');

        if (dataTarget == "currentAutoInsurance") {
          $(".current-insurance-company").text(dataValue);
        }

        var currentStep = parseInt($("#hdnPageNumber").val());
        var nextStep = currentStep + 1;

        if (validate) {
          //check for steps
          var prerequisitesData = $("#prerequisitesData").text();
          var jsonStartIndex = prerequisitesData.indexOf("{");
          var jsonEndIndex = prerequisitesData.lastIndexOf("}");
          var jsonSubstring = prerequisitesData.substring(
            jsonStartIndex,
            jsonEndIndex + 1
          );
          var skipStep = 0;
          var loopSteps = 1; //important
          var i = 0;

          while (i < loopSteps) {
            //console.log('i = ' + i + ' : Next Step = ' + nextStep);

            var key = nextStep;
            var inclusionCount = 0;
            var exclusionCount = 0;
            var prerequisitesObj = JSON.parse(jsonSubstring);

            if (prerequisitesObj.hasOwnProperty(key)) {
              //console.log('loop : ' + key);
              var prerequisitesKeys = Object.keys(prerequisitesObj);

              if (prerequisitesObj[key].hasOwnProperty("exclusions")) {
                var exclusionsLength = Object.keys(
                  prerequisitesObj[key]["exclusions"]
                ).length;
                //console.log('Exclusion Length : ' + exclusionsLength);
              } else {
                //console.log('no exclusions');
              }
              if (prerequisitesObj[key].hasOwnProperty("inclusions")) {
                var inclusionsLength = Object.keys(
                  prerequisitesObj[key]["inclusions"]
                ).length;
                //console.log('Inclusion Length : ' + inclusionsLength);
              } else {
                //console.log('no inclusions required');
              }

              var prerequisitesLength = prerequisitesKeys.length;

              $.each(
                prerequisitesObj[key]["exclusions"],
                function (key, value) {
                  //console.log("Key: " + key);
                  //console.log("Value: " + JSON.stringify(value));
                  var inputValue = $("#" + key).val();
                  if (value.includes(inputValue)) {
                    exclusionCount++;
                    //console.log(inputValue + ' : Skip');
                  }
                }
              );

              //console.log('exclusionCount = ' + exclusionCount + ' : exclusionsLength = ' + exclusionsLength);
              //console.log('step 1 : ' + nextStep);
              //if(skipStep > 0){

              if (exclusionCount > 0) {
                nextStep++;
                skipStep++;
                //console.log('EXCLUDED / SKIP');
              } else {
                $.each(
                  prerequisitesObj[key]["inclusions"],
                  function (key, value) {
                    //console.log("Key: " + key);
                    //console.log("Value: " + JSON.stringify(value));
                    var inputValue = $("#" + key).val();
                    //console.log('value = ' + inputValue);
                    if (value.includes(inputValue)) {
                      inclusionCount++;
                      //console.log(inputValue + ' : Stay');
                    }
                  }
                );

                //console.log('inclusionCount = ' + inclusionCount + ' : inclusionsLength = ' + inclusionsLength);

                if (inclusionCount < 1) {
                  //console.log('NO INCLUSIONS / SKIP');
                  nextStep++;
                  skipStep++;
                } else {
                  i++;
                  //console.log('i increased to = ' + i);
                }
              }
              //i++;
              //console.log('i increased to = ' + i);
              //console.log('step 2 : ' + nextStep);
            } else {
              i++;
              //console.log('i increased to = ' + i);
            }
          }
          //

          goToStep(nextStep);
          $("#hdnPageNumber").val(nextStep);
        }
      }
    );
  }

  //set initial step/progress
  //stepNumber = 1;
  var stepCount = $(".jquery-page .jquery-page-container .page").length;
  stepProgress = Math.round((parseInt(stepNumber - 1) / stepCount) * 100);
  updateProgress(stepProgress);

  //dob picker
  $("#years_more_options").on("click", function () {
    $("#extra_years").removeClass("hidden");
    $(this).addClass("hidden");
  });

  //month
  $("#btn_dob_month").on("click", function () {
    //console.log('month');
    $(".dob-date-text").removeClass("text-custom-blue text-gray-700");
    $(".dob-date-text").addClass("text-gray-700");
    $(this).removeClass("text-gray-700");
    $(this).addClass("text-custom-blue");
    $(".dob-block").addClass("hidden");
    $(".dob-block-month").removeClass("hidden");
  });
  $(".dob-button-month").on("click", function () {
    dataTarget = $(this).attr("data-target");
    dataValue = $(this).attr("data-value");
    $("#btn_dob_month").text(dataValue);
    $("#dob_month").val(dataValue);
    console.log(dataTarget + ": " + dataValue);
    $(".dob-block").addClass("hidden");
    setTimeout(function () {
      $(".dob-block-day").removeClass("hidden");
    }, 5);
    $(".dob-date-text").removeClass("text-custom-blue text-gray-700");
    $(".dob-date-text").addClass("text-gray-700");
    $("#btn_dob_day").removeClass("text-gray-700");
    $("#btn_dob_day").addClass("text-custom-blue");
    //
    var current_month_selected = $("#dob_month").val();
    var thirty_day_array = ["04", "06", "09", "11"];
    if (thirty_day_array.includes(current_month_selected)) {
      console.log("30 days: " + current_month_selected);
      $('.dob-button-day[data-value="31"]').addClass("hidden");
    } else if (current_month_selected == "02") {
      $('.dob-button-day[data-value="31"]').addClass("hidden");
      $('.dob-button-day[data-value="30"]').addClass("hidden");
      console.log("29 days: " + current_month_selected);
    } else {
      $(".dob-button-day").removeClass("hidden");
      console.log("31 days: " + current_month_selected);
    }
    //
    checkForDobValues();
  });

  //day
  $("#btn_dob_day").on("click", function () {
    //console.log('day');
    $(".dob-date-text").removeClass("text-custom-blue text-gray-700");
    $(".dob-date-text").addClass("text-gray-700");
    $(this).removeClass("text-gray-700");
    $(this).addClass("text-custom-blue");
    $(".dob-block").addClass("hidden");
    $(".dob-block-day").removeClass("hidden");
  });
  $(".dob-button-day").on("click", function () {
    dataTarget = $(this).attr("data-target");
    dataValue = $(this).attr("data-value");
    $("#btn_dob_day").text(dataValue);
    $("#dob_day").val(dataValue);
    console.log(dataTarget + ": " + dataValue);
    $(".dob-block").addClass("hidden");
    setTimeout(function () {
      $(".dob-block-year").removeClass("hidden");
    }, 5);
    $(".dob-date-text").removeClass("text-custom-blue text-gray-700");
    $(".dob-date-text").addClass("text-gray-700");
    $("#btn_dob_year").removeClass("text-gray-700");
    $("#btn_dob_year").addClass("text-custom-blue");
    //
    checkForDobValues();
  });

  //year
  $("#btn_dob_year").on("click", function () {
    //console.log('year');
    $(".dob-date-text").removeClass("text-custom-blue text-gray-700");
    $(".dob-date-text").addClass("text-gray-700");
    $(this).removeClass("text-gray-700");
    $(this).addClass("text-custom-blue");
    $(".dob-block").addClass("hidden");
    $(".dob-block-year").removeClass("hidden");
  });
  $(".dob-button-year").on("click", function () {
    dataTarget = $(this).attr("data-target");
    dataValue = $(this).attr("data-value");
    $("#btn_dob_year").text(dataValue);
    $("#dob_year").val(dataValue);
    console.log(dataTarget + ": " + dataValue);
    $(".dob-block").addClass("hidden");
    $(".dob-date-text").removeClass("text-custom-blue text-gray-700");
    $(".dob-date-text").addClass("text-gray-700");
    //
    checkForDobValues();
  });

  //reset
  $("#btn_dob_reset").on("click", function () {
    $("#btn_dob_month").text("MM");
    $("#btn_dob_day").text("DD");
    $("#btn_dob_year").text("YYYY");
    $(".dob-block").addClass("hidden");
    setTimeout(function () {
      $(".dob-block-month").removeClass("hidden");
    }, 5);
    $(".dob-date-text").removeClass("text-custom-blue text-gray-700");
    $(".dob-date-text").addClass("text-gray-700");
    $("#btn_dob_month").removeClass("text-gray-700");
    $("#btn_dob_month").addClass("text-custom-blue");
    $("#dob_month").val("");
    $("#dob_day").val("");
    $("#dob_year").val("");
    //
    checkForDobValues();
  });

  function checkForDobValues() {
    var dob_month = $("#dob_month").val();
    var dob_day = $("#dob_day").val();
    var dob_year = $("#dob_year").val();
    if (dob_month && dob_day && dob_year) {
      console.log("show");
      $(".dob-next-button").removeAttr("disabled");
      $(".dob-next-button").removeClass("opacity-30");
    } else {
      console.log("hide");
      $(".dob-next-button").attr("disabled", "disabled");
      $(".dob-next-button").addClass("opacity-30");
    }
  }

  //fancybox
  $("a.iframe").fancybox({
    width: "90%",
    height: "90%",
    autoScale: true,
    transitionIn: "fade",
    transitionOut: "fade",
    type: "iframe",
  });
});

//back button
function stepBack(stepValue) {
  var activePageCount = $(
    ".jquery-page .jquery-page-container .page.jquery-page-active"
  ).length;
  //console.log(activePageCount);

  $("#back-button").attr("disabled", "disabled");

  var currentPage = $("#hdnPageNumber").val();
  var destinationPage = parseInt(currentPage - 1);

  //check for steps
  var prerequisitesData = $("#prerequisitesData").text();
  var jsonStartIndex = prerequisitesData.indexOf("{");
  var jsonEndIndex = prerequisitesData.lastIndexOf("}");
  var jsonSubstring = prerequisitesData.substring(
    jsonStartIndex,
    jsonEndIndex + 1
  );
  var skipStep = 0;
  var loopSteps = 1; //important
  var i = 0;

  while (i < loopSteps) {
    //console.log('i = ' + i + ' : Next Step = ' + destinationPage);

    var key = destinationPage; //
    var inclusionCount = 0;
    var exclusionCount = 0;
    var prerequisitesObj = JSON.parse(jsonSubstring);

    if (prerequisitesObj.hasOwnProperty(key)) {
      //console.log('loop : ' + key);
      var prerequisitesKeys = Object.keys(prerequisitesObj);

      if (prerequisitesObj[key].hasOwnProperty("exclusions")) {
        var exclusionsLength = Object.keys(
          prerequisitesObj[key]["exclusions"]
        ).length;
        console.log("Exclusion Length : " + exclusionsLength);
      } else {
        //console.log('no exclusions');
      }
      if (prerequisitesObj[key].hasOwnProperty("inclusions")) {
        var inclusionsLength = Object.keys(
          prerequisitesObj[key]["inclusions"]
        ).length;
        console.log("Inclusion Length : " + inclusionsLength);
      } else {
        //console.log('no inclusions required');
      }

      var prerequisitesLength = prerequisitesKeys.length;

      $.each(prerequisitesObj[key]["exclusions"], function (key, value) {
        //console.log("Key: " + key);
        //console.log("Value: " + JSON.stringify(value));
        var inputValue = $("#" + key).val();
        if (value.includes(inputValue)) {
          exclusionCount++;
          //console.log(inputValue + ' : Skip');
        }
      });

      //console.log('exclusionCount = ' + exclusionCount + ' : exclusionsLength = ' + exclusionsLength);
      //console.log('step 1 : ' + destinationPage);
      //if(skipStep > 0){

      if (exclusionCount > 0) {
        destinationPage--;
        skipStep--;
        //console.log('EXCLUDED / SKIP');
      } else {
        $.each(prerequisitesObj[key]["inclusions"], function (key, value) {
          //console.log("Key: " + key);
          //console.log("Value: " + JSON.stringify(value));
          var inputValue = $("#" + key).val();
          //console.log('value = ' + inputValue);
          if (value.includes(inputValue)) {
            inclusionCount++;
            //console.log(inputValue + ' : Stay');
          }
        });

        //console.log('inclusionCount = ' + inclusionCount + ' : inclusionsLength = ' + inclusionsLength);

        if (inclusionCount < 1) {
          //console.log('NO INCLUSIONS / SKIP');
          destinationPage--;
          skipStep--;
        } else {
          i++;
          //console.log('i increased to = ' + i);
        }
      }
      //i++;
      //console.log('i increased to = ' + i);
      //console.log('step 2 : ' + destinationPage);
    } else {
      i++;
      //console.log('i increased to = ' + i);
    }
  }
  //

  if (destinationPage <= 1) {
    $(".back-button-container").addClass("hidden");
    $("#ProgressPercent2").fadeOut(50);
  } else if (destinationPage <= 3) {
    $("#ProgressPercent2").fadeOut(50);
  }
  $("#hdnPageNumber").val(destinationPage);
  stepCount = $(".jquery-page .jquery-page-container .page").length;
  stepProgress = Math.round((destinationPage / stepCount) * 100);
  updateProgress(stepProgress);
  $(".jquery-page")
    .page()
    .transition(destinationPage.toString(), "slide-in-from-left");
  //$('.jquery-page').page().transition(destinationPage.toString(), 'none');
  //addParamsToURL('#Step' + destinationPage);
  //console.log('back: ' + destinationPage);
  addParamsToURL(destinationPage);

  setTimeout(function () {
    $("#back-button").removeAttr("disabled");
  }, 750);
}

// Function to handle changes when the 'step' query parameter changes
function handleStepChange(stepValue) {
  if (stepValue) {
    var destinationPage = parseInt(stepValue);
  } else {
    var destinationPage = parseInt("1");
  }
  var stepCount = $(".jquery-page .jquery-page-container .page").length;
  var stepProgress = Math.round(
    (parseInt(destinationPage - 1) / stepCount) * 100
  );
  //console.log('handleStepChange - destination: ' + destinationPage);

  localStorage.setItem("loanz-step", destinationPage);

  // Update the 'hdnPageNumber' and progress bar
  $("#hdnPageNumber").val(destinationPage);
  //
  //console.log('handleStepChange: ' + destinationPage);
  //
  updateProgress(stepProgress);

  // Example: AddParamsToURL if you want to update the URL with the new step value
  addParamsToURL(destinationPage);
  //console.log('handleStepChange - addParams ' + destinationPage);
  //$('.jquery-page').page().transition(destinationPage.toString(), 'slide-in-from-left');
}

// Function to parse the 'step' query parameter from the URL
function getStepQueryParam() {
  var queryString = window.location.search;
  var urlParams = new URLSearchParams(queryString);
  return urlParams.get("step");
}

// Initial handling of 'step' query parameter
handleStepChange(getStepQueryParam());

var currentURL = window.location.href;

window.onpopstate = function () {
  var stepValue = localStorage.getItem("loanz-step");
  console.log("popstate: " + stepValue);
  var previousURL = event.state ? event.state.url : null;
  //console.log(previousURL + ' - ' + currentURL);
  if (previousURL !== currentURL) {
    stepBack(stepValue - 1);
  } else {
    currentURL = window.location.href;
    //console.log('popstate change: ' + getStepQueryParam());
    handleStepChange(getStepQueryParam());
  }
};

var stepFlag = false;

function goToStep(stepNumber) {
  //console.log('loading');

  if ($(window).width() < 768) {
    $("html, body").animate(
      {
        scrollTop: $("#FunnelProgress").offset().top,
      },
      250
    );
  }

  var currentStep = "" + stepNumber,
    previousStep = "" + (stepNumber - 1),
    stepCount = $(".jquery-page .jquery-page-container .page").length,
    lastStepNumber = "" + stepCount,
    stepProgress = Math.round((parseInt(stepNumber - 1) / stepCount) * 100),
    //validate = formValidate();
    validate = true; //temp

  if (validate) {
    localStorage.setItem("loanz-step", stepNumber);

    if (stepNumber > 1) {
      $(".back-button-container").removeClass("hidden");
      setTimeout(function () {
        if (stepNumber > 3) {
          $("#ProgressPercent2").fadeIn(500);
        }
      }, 250);
    } else {
      $(".back-button-container").addClass("hidden");
      if (stepNumber <= 3) {
        $("#ProgressPercent2").fadeOut(50);
      }
    }

    //addParamsToURL('#Step' + currentStep);
    addParamsToURL(currentStep);

    $(".jquery-page").page().transition(currentStep, "slide-in-from-right");

    //google custom event
    var dataLayerStepName = "step" + currentStep;
    //gtag('event', dataLayerStepName);

    //
    //console.log('goToStep: ' + stepProgress);
    //
    updateProgress(stepProgress);
    partialSubmit();

    if (stepProgress >= 50 && !stepFlag) {
      $("#stepProgress").addClass("half");
      stepFlag = true;
    } else if (stepProgress >= 100) {
      $("#stepProgress").removeClass("half");
    }
  }
}

function formValidate() {
  var $page = $(".jquery-page-active"),
    $inputs = $page.find(
      'input[type="text"],input[type="tel"],input[type="email"],input[type="password"],input[type="checkbox"],select'
    ),
    validationCount = 0;
  if ($inputs.length) {
    $inputs.each(function () {
      if (validator.element($(this))) {
        $el = $(this);
        key = $el.attr("name");
        value = $el.val();
        ++validationCount;
      } else {
        //console.log(this);
      }
    });
  }
  if (validationCount == $inputs.length) return true;
  else return false;
}

const translate_x_pattern = /^(-)?translate-x-\d+$/;
const translate_y_pattern = /^(-)?translate-y-\d+$/;

var validator = $("#lead").validate({
  debug: true,
  // other rules & options,
  highlight: function (element, errorClass, validClass) {
    $(element).parent().addClass(errorClass).removeClass(validClass);
    $(element).parent().find(".custom-error").removeClass("hidden");
    $(element)
      .removeClass("bg-white border-gray-400 focus:border-sky-400")
      .addClass("bg-pink-100 border-rose-300 focus:border-rose-400");
  },
  unhighlight: function (element, errorClass, validClass) {
    $(element).parent().removeClass(errorClass).addClass(validClass);
    $(element).parent().find(".custom-error").addClass("hidden");
    $(element)
      .removeClass("bg-pink-100 border-rose-300 focus:border-rose-400")
      .addClass("bg-white border-gray-400 focus:border-sky-400");
  },
  rules: {
    phone: {
      required: true,
      phoneUS: true,
    },
    email: {
      required: true,
      email: true,
      regex: /^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i,
      //emailCheck: true
    },
    life_insurance_reason_reasons: {
      atLeastOneCheckbox: true,
    },
    weight: {
      twoOrThreeDigits: true,
    },
    prescribed_medication_options: {
      atLeastOneCheckbox: true,
    },
    zip: {
      fiveDigits: true,
    },
  },
  messages: {
    weight: {
      required: "Please enter your weight.",
    },
    zip: {
      required: "Please enter your 5 digit zip code.",
    },
  },
  errorPlacement: function (error, element) {
    var container = element
      .closest(".funnel-step")
      .find(".custom-error-container");
    error.addClass("error-message");
    error.appendTo(container);
  },
  onsubmit: false,
});

$.validator.addMethod(
  "emailCheck",
  function (email, element) {
    var result;
    $.ajax({
      async: false,
      type: "GET",
      url: "https://ivr.consumergenius.com/v1/email/sanity/gj",
      data: {
        email: email,
      },
      success: function (data) {
        result = JSON.parse(JSON.stringify(data));
      },
    });
    return this.optional(element) || result.pass;
  },
  "Please enter a valid email."
);

$.validator.addMethod(
  "regex",
  function (value, element, regexp) {
    if (regexp && regexp.constructor != RegExp) {
      regexp = new RegExp(regexp);
    } else if (regexp.global) regexp.lastIndex = 0;
    return this.optional(element) || regexp.test(value);
  },
  "Please enter a valid email."
);

$.validator.addMethod(
  "atLeastOneCheckbox",
  function (value, element) {
    return $('input[name="' + element.name + '"]:checked').length > 0;
  },
  "Please select at least one."
);

$.validator.addMethod(
  "twoOrThreeDigits",
  function (value, element) {
    return /^[0-9]{2,3}$/.test(value);
  },
  "Please enter a 2 or 3-digit number."
);

$.validator.addMethod(
  "fiveDigits",
  function (value, element) {
    return /^[0-9]{5}$/.test(value);
  },
  "Please enter a 5-digit zip."
);

$.validator.addClassRules("text-field", {
  required: true,
  minlength: 2,
});

$.validator.addClassRules("text-field-letters", {
  required: true,
  minlength: 2,
  pattern: /^[a-zA-Z]+$/,
});

//progress bar
function updateProgress(targetNumber) {
  //console.log(targetNumber);

  var targetNumber = targetNumber; // Set the target number

  if (targetNumber >= 0) {
    $("#ProgressPercent2").animate(
      { counter: targetNumber },
      {
        duration: 350, // Set the duration of the animation in milliseconds
        easing: "linear", // Set the easing function for smooth animation (optional)
        step: function (now) {
          if (Math.ceil(now) > 99) {
            $(this).text("99%");
            return false;
          }
          //console.log(Math.ceil(now));
          ProgressBar.style.width = Math.ceil(now) + "%";
          ProgressPointer.style.left = Math.ceil(now) + "%";
          $(this).text(Math.ceil(now) + "%");
        },
      }
    );
  }
}

function reformatText(input) {
  var x = input.value;
  x = x.replace(/,/g, ""); // Strip out all commas
  x = x.reverse();
  x = x.replace(/.../g, function (e) {
    return e + ",";
  }); // Insert new commas
  x = x.reverse();
  x = x.replace(/^,/, ""); // Remove leading comma
  input.value = x;
}

// Get references to the input and all spans with the class "first-name"
const firstNameInput = document.getElementById("first_name");
const firstNameSpans = document.querySelectorAll(".first-name");

function addParamsToURL(currentStep) {
  var currentUrl = window.location.href;
  var url = new URL(currentUrl);
  url.searchParams.set("step", currentStep);
  var newUrl = url.toString();
  window.history.pushState(null, null, newUrl);
}

function animateApplicationProgressBar() {
  const progressBar = document.getElementById("applicationLoadingProgress");
  let width = 3; // Start at 3%
  const duration = 300; // Animation duration in seconds
  const interval = 10; // Interval for updating the progress bar in milliseconds
  const step = (100 - width) / ((duration * 1000) / interval); // Calculate step value

  const animation = setInterval(function () {
    width += step;
    progressBar.style.width = width + "%";

    if (width >= 98) {
      progressBar.classList.add("rounded-r-full");
    }

    if (width >= 100) {
      clearInterval(animation);
    }
  }, interval);
}

//form submit / partial
function partialSubmit() {
  var f = $(document.forms.lead);

  var values = f.serialize();

  //console.log(values);
  //return false;

  $.ajax({
    url: "/resources/renters-insurance/process.php?method=Partial",
    type: "post",
    data: values,
    dataType: "json",
    success: function (data) {
      if (data.success && data.location) {
        //console.log('saved');
      } else {
        //console.log(data.response_text);
      }
    },
    error: function (data) {
      //console.log(data.response_text);
    },
  });
}

//form submit / complete
$("#lead").submit(function (event) {
  event.preventDefault();

  if (formValidate()) {
    $("#loadingModal").fadeIn(500);

    var values = $(this).serialize();

    //console.log(values);
    //return false;

    $.ajax({
      url: "/resources/renters-insurance/process.php?method=Lead",
      type: "post",
      data: values,
      dataType: "json",
      success: function (data) {
        if (data.status_text && data.redirect_url) {
          window.location = data.redirect_url;
        } else {
          alert(data.response_text);
        }
        $("#loadingModal").fadeOut(500);
      },
      error: function (data) {
        alert(
          "Oops, we have encountered an error processing your application. We are working on resolving this issue. Sorry, for any inconvenience."
        );
        $("#loadingModal").fadeOut(500);
      },
    });
  }
});

//chat agent time

function updateTime() {
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();
  var ampm = hours >= 12 ? "PM" : "AM";
  hours = hours % 12;
  hours = hours ? hours : 12;
  var formattedTime =
    hours + ":" + (minutes < 10 ? "0" : "") + minutes + " " + ampm;
  var elements = document.getElementsByClassName("current-time");

  for (var i = 0; i < elements.length; i++) {
    elements[i].innerText = formattedTime;
  }
}
updateTime();
setInterval(updateTime, 1000);
