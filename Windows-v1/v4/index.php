<!DOCTYPE html>
<html lang="en">

<head>

    <title>Windows</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- meta content for search -->
    <!-- <link rel="icon" type="image/png" href="/assets/images/Logo3.png"> -->
    <link rel="preload" as="style" href="/assets/css/bootstrap.min.css">
    <link rel="preload" as="style" href="/assets/css/style.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">




    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete" async defer></script> -->

    <script>
        var urlParams = new URLSearchParams(window.location.search);
        var subid = urlParams.get('sub1');
        var transaction_id = urlParams.get('sub2');
    </script>





    <script>
        var ipadr;

        fetch('https://ipinfo.io/json')
            .then(response => response.json())
            .then(data => {

                ipadr = data.ip;
            })
            .catch(error => console.error('Error fetching IP address:', error));
    </script>

    <script>
        window._loq = []

        let placeSearch;
        let autocomplete;
        const nonce = window.nonce = '1131593b4af57bc8bbb90be0b76d652d';
        const componentForm = {
            street_number: "short_name",
            route: "long_name",
            locality: "long_name",
            administrative_area_level_1: "short_name",
            country: "long_name",
            postal_code: "short_name",
        };


        //     function initAutocomplete() {
        //     // Create the autocomplete object, restricting the search predictions to addresses
        //     var autocomplete = new google.maps.places.Autocomplete(
        //         document.getElementById('address'),
        //         { types: ['address'] }
        //     );

        //     // When the user selects an address from the dropdown, populate the address fields in the form
        //     autocomplete.addListener('place_changed', function() {
        //         var place = autocomplete.getPlace();
        //         if (!place.geometry) {
        //             console.log("Place details not found for input: ", place.name);
        //             return;
        //         }

        //         // Populate other fields if needed
        //         // Example: document.getElementById('city').value = place.address_components[4].long_name;
        //         // Example: document.getElementById('state').value = place.address_components[6].short_name;
        //         // Example: document.getElementById('zip').value = place.address_components[8].short_name;
        //     });
        // }
        //         // function initAutocomplete() {
        //     if (!window.ADDRESS_VALIDATION_SKIP) {
        //         autocomplete = new google.maps.places.Autocomplete(
        //             document.getElementById("full_address"), {
        //                 types: ["address"],
        //                 componentRestrictions: {
        //                     country: 'us'
        //                 }
        //             }
        //         );

        //         autocomplete.setFields(["address_component"]);

        //         autocomplete.addListener("place_changed", fillInAddress);
        //     }
        // }

        function phoneFormat(input) {
            input = input.replace(/\D/g, '');
            input = input.substring(0, 10);
            var size = input.length;
            if (size == 0) {
                input = input;
            } else if (size < 4) {
                input = '(' + input;
            } else if (size < 7) {
                input = '(' + input.substring(0, 3) + ') ' + input.substring(3, 6);
            } else {
                input = '(' + input.substring(0, 3) + ') ' + input.substring(3, 6) + ' - ' + input.substring(6, 10);
            }
            return input;
        }

        // function fillInAddress() {
        //     $("#street-address-verify").hide();
        //     try {
        //         const place = autocomplete.getPlace();

        //         for (const component in componentForm) {
        //             document.getElementById(component).value = "";
        //         }

        //         for (const component of place.address_components) {
        //             const addressType = component.types[0];

        //             if (componentForm[addressType]) {
        //                 const val = component[componentForm[addressType]];
        //                 document.getElementById(addressType).value = val;
        //             }
        //         }
        //     } catch (e) {
        //     }
        //     $(".btn-next, .quick-next").removeAttr('disabled');
        // }
    </script>



</head>

<body class="v2-page en">

    <div id="work-in-progress">
        <div class="progress-materializecss">
            <div class="indeterminate"></div>
        </div>
    </div>
    <header>
        <div class="container-header">


            <img src="/assets/images/houses1.png" alt="Windows" title="Windows">
            <div></div>
            <div></div>
            <div id="call-button">

                <button>Call Now</button>

            </div>
    </header>
    <div class="banner-form">
        <div class="container">
            <div id="form-header" class="heading-survey">
                <h1>Contractor-Matching Service Pairs You with Expert Window Contractors in Your Area for Free</h1>
                <h3>Contribute to the Success of Your Window Replacement Project</h3>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-lg-2">

                    <div class="banner-form-wrap">
                        <div class="progress_box">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div id="loader" class="form_box">
                            <h2><em>Please waite while we find your home.</em></h2>
                            <h2><em>Don´t close this window</em></h2>
                            <p class="in-progress" data-timeout="1500">
                                Finding your home <span>..</span> <span class="status">done</span>
                            </p>
                            <p class="in-progress" data-timeout="1500">
                                Checking the status of the property<span>..</span> <span class="status">done</span>
                            </p>

                            <p class="in-progress">
                                Finding Windows providers on your area <span>..</span>
                            </p>
                            <div class="lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div id="form_box" class="form_box">
                            <!-- <div class="form_nav">Question <span id="slidenum">1</span></div> -->
                            <div id="loader">
                                <div class="lds-ellipsis">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <p><em>Please wait while we save your information.</em></p>
                            </div>
                            <form id="msform" class="form" action="thank-you.php?" novalidate method="post">
                                <input type="hidden" id="token" name="token" value="9741a0c84c1112244e3cce9df3fb31a17217692194c4cd5ffef12c033d5eb9f6">
                                <input id="leadid_token" name="universal_leadid" type="hidden" value="" />

                                <input type="hidden" id="tcpa_text" name="tcpa_text" value="By clicking Next, I agree to Terms, Privacy, and consent to solar/home servicers to send marketing prerecorded messages and autodialed calls/texts to my phone number above even if it's on any do not call list. Consent is not a condition of purchase. You can opt-out at any time (see Terms). Message/data rates may apply.">
                                <input type="hidden" id="tcpa_consent" name="tcpa_consent" value="Yes">
                                <input type="hidden" id="interested_in_solar_electric" name="interested_in_solar_electric" value="yes">
                                <input type="hidden" id="interested_in_solar_hot_water" name="interested_in_solar_hot_water" value="no">
                                <input type="hidden" id="interested_in_solar_pool_heating" name="interested_in_solar_pool_heating" value="no">
                                <input type="hidden" id="street_number" name="street_number" value="">
                                <input type="hidden" id="state" name="state" value="">
                                <input type="hidden" name="sub1" id="sub1Input">
                                <input type="hidden" id="route" name="street" value="">
                                <input type="hidden" id="administrative_area_level_1" name="state" value="">
                                <input type="hidden" id="country" name="country" value="">
                                <input type="hidden" id="postal_code" name="postal_code" value="">
                                <input type="hidden" id="request_id" name="request_id" value="">
                                <input type="hidden" id="click_id" name="click_id" value="">
                                <input type="hidden" id="recaptcha_token" name="recaptcha_token" value="">
                                <input type="hidden" id="recaptcha_err" name="recaptcha_err" value="">
                                <input type="hidden" id="clickid" name="clickid" value="{clickid}">
                                <input type="hidden" id="local_storage" name="local_storage" value="">
                                <input type="hidden" id="session_storage" name="session_storage" value="">

                                <fieldset id="form-step1" class="form-steps fieldset-0" data-step="1" style="display: block;" data-tag="zip">
                                    <legend hidden="true">zipcode</legend>
                                    <h1 class="form_box-question">Please Enter Your Zip Code</h1>

                                    <div class="form-group">
                                        <label style="visibility: hidden; position: absolute;" for="zip">Zip Code</label>
                                        <input id="zip" class="form-control zipcode" type="tel" name="zip_code" pattern="[0-9]{5}" title="Enter Your ZIP Code" maxlength="5" minlength="5" placeholder="Enter Your ZIP Code" value="" required>
                                        <div id="zip_code_error" class="form-error-message">Enter Valid Zip Code</div>
                                    </div>
                                    <div class="row">

                                        <div class="col col-xs-6">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q2-next" class="btn form-btn btn-next" id="btnzip" type="button"><span class="btn-text">Get Qoute</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step2" class="form-steps fieldset-1" data-step="2" style="display: none;" data-tag="homeowner">
                                    <legend hidden="true">homeowner</legend>
                                    <h1 class="form_box-question">What window upgrades are you looking for?</h1>
                                    <h3 class="form_box-question">Tell us more about your project requirements</h3>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="radio-btn radio-next">
                                                    <input id="pc01" class="form-control" type="radio" name="property_ownership" value="Own" required checked="" data-tf-value="false">
                                                    <label for="pc01"><span>Window Repair</span></label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="radio-btn">
                                                    <input id="pc02" class="form-control" type="radio" name="property_ownership" value="Rent" required data-tf-value="true">
                                                    <label for="pc02"><span>Window Installation</span></label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="radio-btn">
                                                    <input id="pc03" class="form-control" type="radio" name="property_ownership" value="some" required data-tf-value="true">
                                                    <label for="pc03"><span>Window Replacement</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col col-xs-6 colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col col-xs-6">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q2-next" class="btn form-btn btn-next" id="btnzip" type="button"><span class="btn-text">Next</span></button>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset id="form-step3" class="form-steps fieldset-2" data-step="3" style="display: none;" data-tag="email">
                                    <legend hidden="true">Email</legend>
                                    <h3 class="form_box-question">What email address should your results be sent to?</h3>
                                    <div class="form-group">
                                        <label for="email" class="label" style="visibility: hidden; position: absolute;">
                                            Email Address </label>
                                        <input id="email" class="form-control" type="email" name="email_address" placeholder="Email Address" value="" required data-tf-fingerprint="email_email_address_1603174554500.781" data-tf-value="email@domain.com">
                                        <div id="email_error" class="form-error-message">Please enter a real email address.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q6-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step4" class="form-steps fieldset-3" data-step="4" style="display: none;" data-tag="first">
                                    <legend hidden="true">First Name</legend>
                                    <h3 class="form_box-question">What's your first name?</h3>
                                    <div class="form-group">
                                        <input id="first" minlength="2" class="form-control" type="text" name="first_name" placeholder="First Name" value="" required data-tf-fingerprint="first_name_first_name_1603174554500.9617" data-tf-value="Rohit">
                                        <div id="first_error" class="form-error-message">Please enter your first name.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q7-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step5" class="form-steps fieldset-4" data-step="5" style="display: none;" data-tag="last">
                                    <legend hidden="true">Last Name</legend>
                                    <h3 class="form_box-question">What's your last name?</h3>
                                    <div class="form-group">
                                        <input id="last" minlength="2" class="form-control" type="text" name="last_name" placeholder="Last Name" value="" required data-tf-fingerprint="last_name_last_name_1603174554500.8398" data-tf-value="Bhatia">
                                        <div id="last_error" class="form-error-message">Please enter your last name.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q8-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset id="form-step6" class="form-steps fieldset-5" data-step="6" style="display: none;" data-tag="address">
                                    <legend hidden="true">Street Name</legend>
                                    <h3 class="form_box-question">Specify your street address</h3>
                                    <h3 class="form_box-question">We'll search among the gutter installers in your neighborhood</h3>
                                    <div class="form-group" id="street_address">
                                        <input id="address" class="form-control" type="text" name="full_address" placeholder="Address" value="" required>
                                        <div id="address_error" class="form-error-message">Please provide where you'd like the panels installed.</div>
                                    </div>
                                    <div class="form-group" id="street-address-verify" style="display: none;">
                                        <label>Did you mean to type? (Tap or click the answer that matches best)</label>
                                        <div id="street_address_predictions">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q10-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>



                                <fieldset id="form-step7" class="form-steps fieldset-6" data-step="7" style="display: none;" data-tag="phone">
                                    <legend hidden="true">Phone</legend>
                                    <h3 class="form_box-desc">What phone number can we reach you at?</h3>
                                    <div class="form-group">
                                        <input id="phone" class="form-control" type="tel" name="phone_home" placeholder="(000) 000-0000" value="" required minlength="10" maxlength="16" data-tf-fingerprint="phone_phone_home_1603174554501.6533" data-tf-value="(702) 555-1212">
                                        <div id="phone_error" class="form-error-message phone-valid-error">Please enter a valid US phone number.</div>
                                    </div>
                                    <span class="terms_txt">
                                    </span>
                                    <div class="row">


                                        <div class="col colback col-last"><button type="button" class="btn btn-link btn-back just-text">Back</button></div>

                                        <!-- <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>  -->

                                        <div class="col">
                                            <div class="form-btns ml-auto text-right btn-last-submit">
                                                <button id="q11-next" class="btn form-btn btn-next btn-final" type="button"><span class="btn-text">Submit</span>
                                                </button>
                                                <button id="q10-next-loading" class="btn form-btn btn-next-loading btn-final hide" type="button" disabled><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script async>
        let startDate = new Date();
        let elapsedTime = 0;
        let bounceType = 'exit';

        function MeasureDuration(type) {
            return {
                tyope: type,
                startDateSinceLast: new Date(),
                capture: function(sub_type) {
                    const endDate = new Date();
                    const spentTime = endDate.getTime() - this.startDateSinceLast.getTime();
                    this.startDateSinceLast = new Date();

                }
            }
        }

        function Application() {

            const skip_zip = false;;
            const version = 'v4';
            const measureStepDuration = MeasureDuration('step');
            const headline = $('#primary-headline');
            let default_headline = headline.html();

            function animateFormSubmission(callback) {
                $('#form-header').hide();
                $('.progress_box').hide();

                const messages = $('#loader p').toArray();
                messages.reduce(function(check, item) {
                    return check.then(function() {
                        const message = $(item);
                        message.show();
                        const timeout = message.data('timeout');
                        return new Promise(function(resolve, reject) {
                            setTimeout(function() {
                                message.removeClass('in-progress');
                                message.addClass('complete');
                                resolve(true);
                            }, timeout);
                        });
                    })
                }, Promise.resolve()).then(() => {
                    if (typeof callback == 'function')
                        callback();
                });

            }

            function toggleSubmitButtons(enable) {
                if (enable) {
                    $("#q11-next").show();
                    $("#q10-next-loading").hide();
                } else {
                    $("#q11-next").hide();
                    $("#q10-next-loading").show();
                }
            }

            // edit auto complete form
            $("#edit-customer-data").click(function(e) {
                $("#edit-customer-preview").hide();
                $("#edit-customer-form").show();
                $("#edit-customer-form input, #edit-customer-form select").removeAttr('disabled');
            })



            let emailAjaxClient;
            let fetchRequestId;
            let lastprogwidth;
            let serverCity, serverState, serverZip, serverLong, serverLat;
            let lastPage = false;
            let steps = 0;

            /**
             * Helper function disable hidden fields to validate only
             * items visible to the user.
             **/
            function toggleDisabledFields() {
                $("input:visible").removeAttr('disabled');
                $("input:hidden").attr('disabled', 'disabled');

            }



            /**
             * Move Progress Bar
             * Delayed .progress-circle animation to accomidate for animation swing
             **/
            function moveProgressBar(current_step, steps) {
                const progwidth = Math.round(current_step / steps * 100);
                $('.meter').animate({
                    width: '' + progwidth + '%'
                }, 825, 'swing');
                $('.progress-circle').css({
                    'right': '',
                    'left': '' + lastprogwidth + '%'
                }).animate({
                    'left': '' + (progwidth - 2) + '%'
                }, 925);
                lastprogwidth = progwidth;
                //parent_fieldset.fadeOut(400, function () {
                $("body").animate({
                    scrollTop: 0
                }, '500');
                window.top.scrollTo(0, 0);
                $(".progress-bar").width(progwidth + '%');
                //});

            }





            function validateZipValue(zip_code) {
                // var state = getState(zip_code)
                serverCity = null;
                serverState = state;
                serverZip = zip_code;
                serverLong = null;
                serverLat = null;
            }

            /**
             * Check if there's data in localStorage to fill the form inputs
             **/
            const formStorage = JSON.parse(localStorage.getItem('customerData')) || null;
            const formStep = localStorage.getItem('formStep') || null;

            // Check if there's a back button
            const btnBack = $('.btn-back');



            /**
             * Helper function determine if there's a next screen
             */
            function hasNext() {
                const count = 1;
                const current_fieldset = $(".form-steps:visible");
                const step = current_fieldset.data("step")
                const next_step = step + count;
                const next_fieldset = $("#form-step" + next_step);
                return next_fieldset.length;
            }

            /**
             * Helper function move steps forward or back
             * Use -1 to move it backwards
             **/
            function progressFieldsetSteps(count, backToField, fromLocal) {
                $('.btn-next').removeAttr('disabled');
                const formStorage = JSON.parse(localStorage.getItem('customerData')) || {};
                const form = $('#msform')
                    .serializeArray()
                    .reduce((accumulator, current) => {
                        accumulator[current.name] = current.value;
                        return accumulator;
                    }, {});

                const mergedForm = {
                    ...formStorage,
                    ...form
                };

                localStorage.setItem('customerData', JSON.stringify(mergedForm));

                /**
                 * Determine current and next step
                 **/
                const current_fieldset = $(".form-steps:visible");
                const step = current_fieldset.data("step")
                const next_step = backToField ? count : step + count;
                const next_fieldset = $("#form-step" + next_step);
                if (!fromLocal) {
                    localStorage.setItem('formStep', (count > 0) ? step : next_step);
                }

                const tag = current_fieldset.data('tag') || step;
                const next_tag = next_fieldset.data('tag') || step;
                $('.' + tag).hide();
                $('.' + next_tag).show();
                if (count > 0) {
                    /**
                     * Capture Time Spent
                     */
                    measureStepDuration.capture(tag);
                }

                if (next_fieldset.length) {
                    $('#slidenum').html('' + next_step + ' of ' + steps + '');
                    $('#footer-slidenum').html(next_step);

                    current_fieldset.hide();
                    next_fieldset.fadeIn(function() {
                        $(this).find('input').first().focus();
                        /**
                         * Consider removing this?
                         */
                        if ($('#phoneContainer').is(':visible')) {
                            $('#tcpa_cont').show();
                        }
                    });
                    if (fromLocal) {
                        moveProgressBar(next_step, 10);
                    } else {
                        moveProgressBar(next_step, steps);
                    }

                    toggleDisabledFields();
                    $("body").animate({
                        scrollTop: 0
                    }, '500');
                    if (typeof backToField === 'object') {
                        displayError(backToField, "navigate back to field");
                    }
                    return true;
                }
                return false;
            }

            /**
             * Short cut to JQuery's AJAX feature to simplify
             * code in form verifications
             **/
            function ajaxVerify(path, success, error) {
                $.get(path, function(data) {
                    if (data.code == 200) {
                        success(data);
                    } else {
                        error(data)
                    }
                }).catch(function() {
                    error({});
                });
            }



            /**
             * Verify Request received
             **/
            let queries = 0;
            let running_verification = false;



            /**
             * Assess risk with email address
             **/




            /**
             * Function for disabling submit button to avoid double
             * submits
             */
            let enableButton;

            function toggleNextButtons(enabled) {
                if (enabled) {
                    clearTimeout(enableButton);
                    enableButton = setTimeout(function() {
                        $(".btn-next, .quick-next").removeAttr('disabled');
                    }, 1500);
                } else {
                    $(".btn-next, .quick-next").attr('disabled', 'disabled');
                }
            }

            /**
             * Capture all form submits and send it to the next button click
             */
            $("#msform").submit(function(e) {
                const ok = $(this).attr("okay");
                if (!ok) {
                    e.preventDefault();
                    $(".btn-next:visible, .quick-next:visible").click();
                }
                // disable buttons
                else {
                    toggleNextButtons(false);
                }
            });

            /**
             * On document ready
             */

            //$(document).ready(function () {
            /**
             * Helper function to trigger error and indicate to the user they
             * need to fix a field.
             **/
            function displayError(field, error) {
                field.addClass("error");
                const field_id = field.attr("id");
                $("#" + field_id + "_error").show();

                toggleNextButtons(true);
                toggleSubmitButtons(true);
            }


            const first_name = $("#first");
            const last_name = $("#last");
            const working = $("#work-in-progress");
            const address = $('#address');
            const email = $('#email');
            const phone = $('#phone');
            const zip = $('#zip');
            const fieldsIndex = [{
                idx: 2,
                field: zip
            }, {
                idx: 6,
                field: email
            }, {
                idx: 7,
                field: first_name
            }, {
                idx: 8,
                field: last_name
            }, {
                idx: 9,
                field: address
            }, {
                idx: 10,
                field: phone
            }]
            let pushedname = false;
            steps = $(".form-steps").length;

            // Function that returns the field name using the step index
            function getFieldName(index) {
                const fieldStep = fieldsIndex.find(field => field.idx === index);
                return fieldStep ? fieldStep.field : " ";
            }


            $("#zip").on("keyup", function(e) {
                this.value = this.value.replace(/[^\d]/, '')
            });

            $("#phone").on("keyup", function(e) {
                this.value = phoneFormat(this.value);
            });

            let persistClickEngagement = () => {
                $.get("/papi/persist.php?op=click", function(data) {
                    /* do nothing */
                });
                persistClickEngagement = () => {
                    return false;
                }
            }
            let debounce;
            $(".btn-next, .quick-next").click(function(e) {
                if ($(this).hasClass('btn-final')) {
                    toggleSubmitButtons(false);
                }
                clearTimeout(debounce);
                debounce = setTimeout(() => {
                    handleNextClick(e);
                    persistClickEngagement();
                }, 250);
            });

            /**
             * Validate fields on the screen and transition between
             * steps if valid
             **/
            function handleNextClick(e) {
                // alert('netx btn 1');

                let error;
                toggleDisabledFields();
                const addressUserVerified = $(this).attr('address-user-verified');
                const form = $("#msform")[0];
                const valid = form.checkValidity();
                if (!valid) {
                    // console.log(valid);
                    // console.log(form.reportValidity());
                    return false;
                }

                // Check for empty values
                const first = (first_name.val()) ? first_name.val().trim() : '';
                const last = (last_name.val()) ? last_name.val().trim() : '';
                if (first_name.is(":visible") && first.length < 3) {
                    error = true;
                    displayError(first_name, "less than 3 characters");
                }
                if (last_name.is(":visible") && last.length < 3) {
                    error = true;
                    displayError(last_name, "less than 3 characters");
                }
                if (error) {
                    return false;
                }

                // Send name to LO
                if (first.length > 0 && last.length > 0 && !pushedname) {
                    window._loq.push(['custom', {
                        'first_name': first,
                        'last_name': last
                    }]);
                    pushedname = true;
                }


                let timesSubmitted = 0;

                function submitForm() {
                    timesSubmitted++;
                    if (timesSubmitted >= 1) {
                        const form = $("#msform");

                        try {
                            let localStorageJson = {};
                            Object.entries({
                                    ...localStorage
                                })
                                .filter(row => !['formStep', 'customerData'].includes(row[0]))
                                .forEach(row => {
                                    try {
                                        let value = JSON.parse(row[1]);
                                        localStorageJson[row[0]] = value;
                                    } catch (e) {
                                        localStorageJson[row[0]] = row[1];
                                    }
                                });
                            $('#local_storage').val(JSON.stringify(localStorageJson));
                        } catch (err) {
                            // do nothing
                        }

                        try {
                            let sessionStorageJson = {};
                            Object.entries({
                                    ...sessionStorage
                                })
                                .forEach(row => {
                                    try {
                                        let value = JSON.parse(row[1]);
                                        sessionStorageJson[row[0]] = value;
                                    } catch (e) {
                                        sessionStorageJson[row[0]] = row[1];
                                    }
                                    Î
                                });
                            $('#session_storage').val(JSON.stringify(sessionStorageJson));
                        } catch (err) {
                            // do nothing
                        }

                        let data = $("#msform").serialize();
                        data += '&version=v4';
                        console.log({
                            data
                        });


                        function success() {
                            window.onbeforeunload = null;
                            window.localStorage.removeItem('customerData');
                            window.localStorage.removeItem('formStep');
                            // set interval to to redirect
                            // we're waiting for progress status to finish cycling through
                            // before redirecting.
                            let redirect = setInterval(() => {
                                if (ready_for_redirect == true) {
                                    clearInterval(redirect);
                                    bounceType = 'submit';
                                    form.attr("okay", true);
                                    form.submit();

                                }
                            }, 250);
                        }


                        const measureAnimationDuration = MeasureDuration('animation');
                        const measureSubmissionDuration = MeasureDuration('submission');

                        [
                            () => {
                                animateFormSubmission(() => {

                                });
                            },
                            () => {


                                const first_name = $('#first').val()
                                const last_name = $('#last').val()
                                const phone_home = $('#phone').val()
                                const street = $('#street_number').val()
                                const address = $('#address').val()
                                const email = $('#email').val()
                                const zip = $("#zip").val()
                                const lead_id_token = $("#leadid_token").val()
                                const trustedForms = $("#xxTrustedFormCertUrl_0").val()

                                const data = `first_name=${first_name}&last_name=${last_name}&phone_home=${phone_home}&street=${address}&email=${email}&zip=${zip}&ip_address=${ipadr}&agent=${window.navigator.userAgent}$lead_id=${lead_id_token}&trustedForms=${trustedForms}`


                                postCall("https://www.google.com", data).then(x => x.json()).then(x => {
                                    console.log(x);
                                    console.log(x.status);

                                    if (
                                        x.message === "Recieved"
                                    ) {

                                        setTimeout(() => {
                                            window.location.href = "/Windows-v1/v4/thank-you.php?"

                                        }, 5000);

                                    } else {

                                        setTimeout(() => {
                                            window.location.href = "/Windows-v1/v4/thank-you.php?"

                                        }, 1000);

                                    }
                                }).catch(x => {
                                    setTimeout(() => {
                                        window.location.href = "/Windows-v1/v4/thank-you.php?"

                                    }, 1000);
                                })


                            }
                        ].forEach(task => {
                            task();
                        });

                    }
                    return false;
                }
                // Help function to help with async calls, which need a callback
                function go_next() {
                    // Transition to the next step
                    let hasNext = progressFieldsetSteps(1);

                    if (hasNext && zip.is(":visible") && skip_zip) {
                        $(".btn-next, .quick-next").click();
                    }

                    // We're at the final step, submit data
                    if (!hasNext) {
                        $("#loader").show();
                        $('#form_box').hide();
                        window.top.scrollTo(0, 0);

                        //window._loq.push(["tag", 'Submit', true]);

                        $("input, select").removeAttr('disabled', 'disabled');
                        submitForm();

                    }
                }

                // if zip is visible, server side validation

                // if email is visible, server side validation
                if (email.is(":visible")) {
                    console.log("1")
                    const value = email.val().toLowerCase();
                    const emailRegex = /^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/;

                    function validateEmail(email) {
                        return emailRegex.test(email);
                    }

                    if (validateEmail(value)) {
                        go_next()
                    } else {
                        return false
                    }
                }

                // if phone is visible, server side validation
                if (phone.is(":visible")) {
                    const lookupValue = phone.val().replace(/\D/g, '');
                    if (lookupValue.length !== 10 && lookupValue.length !== 11) {
                        displayError(phone, "unable to match regex");
                        return false;
                    } else {
                        go_next();
                    }

                }

                // proceed to next step as normal
                if (!email.is(":visible") && !phone.is(":visible")) {
                    go_next();
                }
            };

            /**
             * Transition to previous step
             **/
            $(".btn-back").click(function(e) {
                progressFieldsetSteps(-1);
            });

            /**
             * Remove error class onkeyup
             **/
            $("input").keyup(function() {
                $(this).removeClass('error');
                const field_name = $(this).attr("name");
                $("#" + field_name + "_error").hide();
                $(".btn-next, .quick-next").removeAttr('disabled').removeAttr('address-user-verified');
                if (field_name == 'full_address') {
                    //   resetAddressVerification();
                }
            });

            /**
             * Capture character return keypress
             */
            $(document).keypress(function(e) {
                if (e.which == 13 || e.which == 39) {
                    $(".btn-next:visible, .quick-next:visible").click();
                }
            });
            //});

            /**
             * TCPA
             */
            $("#tcpa_label a").click(function(e) {
                e.preventDefault();
                $("#terms-php").hide();
                $("#privacy-php").hide();
                $("#companylist-php").hide();
                $('#tcpa-modal').show();
                var href = $(this).attr('href').replace(".", "-");
                $("#" + href).show();
                var scrollTo = $(this).data('scroll-to');
                var position = 0;
                if (scrollTo) {
                    //$("#" + href).scrollTo('#' + scrollTo);
                    document.getElementById(scrollTo).scrollIntoView();
                } else {
                    document.getElementById(href + "-top").scrollIntoView();
                }
            });

            $(".tcpa-close").click(function(e) {
                $('#tcpa-modal').hide();
            });

            /**
             * Listen for HTML5 validation issues and add an error class
             * to the element if one is found.
             */
            const inputs = document.querySelectorAll("input, select, textarea");
            inputs.forEach(input => {
                input.addEventListener("invalid", (e) => {
                        const name = e.target.id;
                        input.classList.add("error");
                        const err = document.getElementById(name + "_error");
                        if (err) {
                            err.style.display = 'block';
                        }
                        $.get("/papi/persist.php?op=error&sub_type=" + input.id + "&error=failed+html5+rule", function(data) {
                            /* do nothing */
                        });
                        toggleSubmitButtons(true);
                    },
                    false
                );
            });

            window.onload = function() {
                const input = document.getElementById("zip").focus();
            }
        }

        const focus = function() {
            startDate = new Date();
        };
        const blur = function() {
            const endDate = new Date();
            const spentTime = endDate.getTime() - startDate.getTime();
            elapsedTime += spentTime;
        };
        const beforeunload = function() {
            const endDate = new Date();
            const spentTime = endDate.getTime() - startDate.getTime();
            elapsedTime += spentTime;
            // elapsedTime contains the time spent on page in milliseconds
            $.get("/papi/persist.php?op=" + bounceType + "&duration=" + elapsedTime, function(data) {
                /* do nothing */
            });
        };
        window.addEventListener('focus', focus);
        window.addEventListener('blur', blur);

        document.addEventListener('DOMContentLoaded', function() {
            var dependencies = ["\/assets\/js\/jquery.min.js"];
            var dependencyChain = dependencies.reduce(function(p, href) {
                return p.then(function() {
                    return new Promise(function(resolve, reject) {
                        var script = document.createElement('script');
                        script.onload = function() {
                            resolve(true);
                        };
                        script.src = href;
                        document.body.appendChild(script);
                    });
                })
            }, Promise.resolve());
            dependencyChain.then(function() {
                Application();

                // persit view
                setTimeout(function() {
                    const tags = [];
                    $('.form-steps, .form-steps:hidden').each(function() {
                        tags.push($(this).data('tag'));
                    });
                    $.get("/papi/persist.php?op=pageview&sub_type=form&tags=" + encodeURIComponent(tags.join(',')), function(data) {
                        /* do nothing */
                    });
                }, 1500);

                function scrollEgngaged(event) {
                    $.get("/papi/persist.php?op=scrolled", function(data) {
                        /* do nothing */
                    });
                    document.removeEventListener('scroll', scrollEgngaged, true);
                }
                // persist engagement
                document.addEventListener('scroll', scrollEgngaged, true);


            });
        });
    </script>


    <script type="text/javascript">
        (function() {
            var tf = document.createElement('script');
            tf.type = 'text/javascript';
            tf.async = true;
            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(tf, s);
        })();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!-- End TrustedForm -->

    <script id="LeadiDscript" type="text/javascript">
        (function() {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/8f2e94e5-665d-457f-a033-b8e0af401416.js?snippet_version=2';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
    </script>
    <noscript><img src='//create.leadid.com/noscript.gif?lac=F1D6E1C4-3226-ADC7-A00E-77613EBAD162&lck=8f2e94e5-665d-457f-a033-b8e0af401416&snippet_version=2' /></noscript>

    <script>
        const postCall = async (url, data) => {
            return await fetch(url, {
                method: "POST",
                body: new URLSearchParams(data),
            });
        }
    </script>





    <script>
        function openPopup(url) {
            window.open(url, '_blank', 'width=600,height=400');
        }
    </script>


</body>

</html>