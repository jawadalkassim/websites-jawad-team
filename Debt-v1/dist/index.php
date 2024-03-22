<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Debt</title>
    <link rel="shortcut icon" href="/Debt-v1/dist/img/favicon.png" type="image/x-icon"/>
    <link href="/Debt-v1/dist/output.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAjEO6yBCt-92pdvIXaE17GczvHFTPySM&libraries=places&callback=initAutocomplete" async></script>

    <script>
        var urlParams = new URLSearchParams(window.location.search);
        var rid = urlParams.get('rid');


    </script>
</head>

<body class=" font-bodyFont" style="background: linear-gradient(90deg, rgba(6,119,204,0.08698091052827384) 0%, rgba(6,119,204,0) 100%);">
<nav class="bg-white shadow-lg">
    <div class="block">
        <div class="flex justify-center">
            <div class="py-2 brand flex justify-center">
                <img src="/Debt-v1/dist/img/logo.png">
            </div>
        </div>
    </div>
</nav>

<h1 class="text-primary text-center text-4xl font-bold lg:pt-8 m-5 title" id="title">
    See If You Are Eligible To Reduce Your Credit Card Payments And Get Relief</h1>
<p class="text-center text-gray-600 text-xl pt-2 sub-title">See how much you can save</p>
<div id="formResp">
    <form class="bg-white lg:w-8/12 mt-3 shadow-xl rounded-lg m-8" id="regForm" action="/Debt-v1/dist/submit.php">
        <div class="stepper-wrapper py-5 lg:px-40">
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
            <div class="stepper-item">
                <div class="step-counter"></div>
            </div>
        </div>
        <div class="tab">
            <div class="flex justify-center">
                <div class="pt-5">
                    <h2 class="text-gray-500 text-xl pt-1 text-center mb-4 q-title">How much credit card debt do you have?</h2>
                </div>
            </div>
            <div class="flex justify-center pt-8 ">
                <h5 class="text-gray-500 text-lg font-bold">Estimated Debt</h5>
            </div>
            <div class="flex justify-center">
                <div class="flex justify-center text-2xl dol" style="color:  #0045c2;">$</div>
                <div id="output" class=" text-3xl text-primary text-center font-bodyFont"></div>
            </div>
            <div class="flex justify-center">
                <div class="w-8/12 input-range">
                    <div class="range flex justify-center px-4">
                        <input type="range" value="20000" min="0" max="100000" name="estimated_debt" id="slider" step="1000"/>
                    </div>
                </div>
            </div>
            <p class="text-gray-500 text-sm text-center">Drag the slider handler left or right.</p>
            <div class="flex justify-center py-12 items-center ">
                <button class="font-bodyFont bg-red-600 lg:px-20 lg:py-5 text-2xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
            </div>
            <div class="grid lg:grid-cols-2 pt-8">
                <div><div class="text-center text-gray-500 font-bold font-bodyFont">
                    <span><i class="fa fa-check text-primary" aria-hidden="true"></i></span> Pay Up To 30% Less Than You Owe
                </div>
                </div>
                <div><div class="features text-center text-gray-500 font-bold font-bodyFont">
                    <span><i class="fa fa-check text-primary" aria-hidden="true"></i></span> Debt Free In As Little As 24-48 Months
                </div>
                </div>
            </div>
            <div class="text-center pt-8 text-gray-500 font-bold font-bodyFont mb-10">
                <span><i class="fa fa-check text-primary" aria-hidden="true"></i></span> Free Consultation And Zero Up-Front-Fees
            </div>

        </div>
        <div class="tab">
            <div class="flex justify-center pt-2">
                <div>
                    <div><h1 class="pt-5 text-secondary text-4xl font-semibold ">Where Are You Located?</h1></div>
                    <div> <p class="text-gray-500 text-xl pt-10 text-center mb-4 q-title">Enter your Zip Code</p></div>
                </div>
            </div>
            <div>
                <div class="flex justify-center">
                    <div class="lg:w-1/2 input-range">
                        <input type="text" id="zip" name="zip" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="12345" required />
                    </div>
                </div>
                <div id="zip-error" style="text-align: center;padding-top: 5px"></div>
                <div class="flex justify-center py-10 items-center ">
                    <button class="font-bodyFont bg-red-600 lg:px-20 lg:py-5 text-2xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="flex justify-center pt-2">
                <div>
                    <div><h1 class="pt-5 mb-2 text-secondary text-4xl font-semibold title q-title ">Contact Information</h1></div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="lg:w-1/2 input-range">
                    <div class="w-full pt-3">
                        <label for="first"></label><input type="text" id="first" name="firstName" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your full name" required />
                    </div>
                    <div class="w-full pt-3">
                        <label for="last"></label><input type="text" id="last" name="lastName" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your last name" required />
                    </div>
                    <div class="w-full pt-3">
                        <label for="email"></label><input type="email" id="email" name="email" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your email" required />
                    </div>
                </div >
            </div >
            <div id="email-error" style="text-align: center;padding-top: 5px"></div>
            <div class="flex justify-center py-10 items-center ">
                <button class="font-bodyFont bg-red-600 lg:px-20 lg:py-5 text-2xl font-bold rounded-full" onclick="nextPrev(1)">Continue <span class="pt-4"> ➙ </span></button>
            </div>
        </div>
        <div class="tab">
            <div class="flex justify-center pt-2">
                <div>
                    <div><h1 class="pt-10 mb-2 text-secondary text-4xl font-semibold title q-title">Contact Information</h1></div>
                </div>
            </div>
            <div class="flex justify-center pt-5">
                <div class="lg:w-1/2 input-range">
                    <div class="w-full pt-3">
                        <label for="address"></label><input type="text" id="address" name="address" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your address" required />
                    </div>
                    <div class="w-full pt-3">

                        <label for="phone"></label><input type="tel" id="phone" name="homePhone" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your phone number" required />
                        <div id="phone-error" style="text-align: center;padding-top: 5px"></div>

                    </div>
                    <div class="pt-5">
                        <label for="checkbox1"></label>
                        <div class="flex justify-center items-start">
                            <div class=" pt-1">
                                <input type="checkbox" id="checkbox1" class="w-3" required />
                            </div>
                            <span class="pl-2">By checking this box, I agree to the <span class="font-bold text-primary"><a href="/Debt-v1/dist/Terms.php">Terms of Use</a></span>  and <span class="font-bold text-primary "><a href="/Debt-v1/dist/privacy_policy.php"> Privacy Policy.</a></span></span>
                        </div>
                    </div>
                    <div class="w-full pt-3">
                        <label for="checkbox2"></label>
                        <div class="flex justify-center items-start">
                            <div class="pt-1">
                                <input type="checkbox" id="checkbox2" class="w-3" required />
                            </div>
                            <span class="pl-2"><input type="hidden" id="leadid_tcpa_disclosure"/>By checking this box I consent to receive text messages and calls via
automatic telephone dialing system and an artificial or prerecorded voice to
the phone number I entered above from JugglingDebt.com as well as from debt
relief solution companies, loan providers, debt consolidation service providers
and Partners, for debt relief or debt consolidation service offers even if I am
on a national, state, or entity-specific Do-Not-Call list. I understand that consent
is not required to receive a quotation or make a purchase.  Message and
data rates may apply. For more information, please review our <span class="font-bold text-primary"><a href="/Debt-v1/dist/TCPA.php">TCPA Disclosure. </a></span>
                            </span>
                        </div>
                    </div>
                    <div class="flex justify-center py-10 items-center ">
                        <button class="font-bodyFont bg-red-600 lg:px-20 lg:py-5 text-2xl font-bold rounded-full q-title q-button" onclick="nextPrev(1)">Submit</button>
                    </div>


                    <input id="city" name="city" type="hidden" value=""/>
                    <input id="state" name="state" type="hidden" value=""/>
                </div>
            </div>
        </div>
        <div style="overflow:auto" class="flex justify-center " >
            <div style="float:right;">
                <button type="button" class="text-xl font-bold text-gray-500 font-bodyFont" id="prevBtn" onclick="backPrev(-1)">← Back</button>
            </div>
        </div>

        <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
        <input id="ip_address" name="ip_address" type="hidden" value=""/>

    </form>
</div>
<footer class="bg-primary pt-5 pb-20 mt-10">
    <div class="grid lg:grid-cols-6 text-white">
        <div class="flex justify-center">
            <a href="">Unsubscribe</a>
        </div>
        <div class="flex justify-center">
            <a href="">Do Not Sell My Information</a>
        </div>
        <div class="flex justify-center">
            <a href="/Debt-v1/dist/privacy_policy.php">Privacy Policy</a>
        </div>
        <div class="flex justify-center">
            <a href="/Debt-v1/dist/Terms.php">Terms of Use</a>
        </div>
        <div class="flex justify-center">
            <a href="/Debt-v1/dist/partners.php">Partners</a>
        </div>
        <div class="flex justify-center">
            <a href="/Debt-v1/dist/TCPA.php">TCPA Disclosure</a>
        </div>
    </div>
    <div class="pt-8 text-center text-white px-5 lg:px-24" style="font-size: 13px">
        IMPORTANT ADVERTISER DISCLAIMERS:  Programs do not guarantee that your debts will be lowered by a specific amount or percentage or that you will be debt-free within a specific period of time. Programs do not assume consumer debt, make monthly payments to creditors or provide tax, bankruptcy, accounting or legal advice or credit repair services. Programs are not available in all states, and fees may vary by state. Please contact a tax professional to discuss tax consequences of settlement. Please consult with a bankruptcy attorney for more information on bankruptcy. Depending on your state, programs may be available to recommend a local tax professional and/or bankruptcy attorney. You may be subject to collections or lawsuits by creditors or collectors. Your outstanding debt may increase from the accrual of fees and interest. Read and understand all program materials prior to enrollment, including potential adverse impact on credit rating.

        Certain types of debts are not eligible for enrollment. Some creditors are not eligible for enrollment because they do not negotiate with debt relief companies.

        The company and its affiliates are not lenders, creditors, or debt collectors. This is not a loan. Our representatives have helped thousands of consumers throughout their careers.
    </div>
</footer>




<script>
    function initAutocomplete() {
        // Get the input element for the autocomplete search box.
        var input = document.getElementById('address');
        let city = document.getElementById('city');
        let state = document.getElementById('state');
        // Create the autocomplete object, restricting the search to geographical location types.
        var autocomplete = new google.maps.places.Autocomplete(input, {types: ['geocode']});

        // When the user selects an address from the dropdown, update the input value with the full address.
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            // Update the input box with the full address
            input.value = place.formatted_address;
            // Use the formatted address here
            const addressComponents = place.address_components;


            for (const component of addressComponents) {
                switch (component.types[0]) {
                    case "administrative_area_level_1": // State
                        state.value = component.short_name;
                        break;
                    case "locality": // City
                        city.value = component.short_name;
                        break;

                    default:
                    // Add other non-excluded components to the address
                }
            }


        });
    }



</script>
<script src="/Debt-v1/dist/JS/script.js">
</script>
<script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/35ea2c34-6f28-eb71-7d7d-35b2628c673d.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=F1D6E1C4-3226-ADC7-A00E-77613EBAD162&lck=35ea2c34-6f28-eb71-7d7d-35b2628c673d&snippet_version=2' /></noscript>

<!-- TrustedForm -->
<script type="text/javascript">
    (function() {
        var tf = document.createElement('script');
        tf.type = 'text/javascript'; tf.async = true;
        tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
    })();
</script>
<noscript>
    <img src="https://api.trustedform.com/ns.gif" />
</noscript>
<!-- End TrustedForm -->

<script>
    var ipadr;

    fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => {

            document.getElementById("ip_address").value = data.ip;
        })
        .catch(error => console.error('Error fetching IP address:', error));
</script>
<script>
    $('#regForm').submit(function(event) {

        event.preventDefault();


        //$('#loadingModal').fadeIn(500);

        var values = $(this).serialize();

        $.ajax({
            url: `/Debt-v1/dist/process.php?method=Lead&lp_request_id=${rid}`,
            type: "post",
            data: values,
            dataType: "json",
            success: function(data) {
                if((data.status_text) && (data.redirect_url)){
                    window.location = data.redirect_url;
                } else {
                    alert(data.response_text);
                }
                //$('#loadingModal').fadeOut(500);
            },
            error:function(data){
                alert('Oops, we have encountered an error processing your application. We are working on resolving this issue. Sorry, for any inconvenience.');
                //$('#loadingModal').fadeOut(500);
            }
        });



    });</script>
</body>

</html>