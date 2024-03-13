<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Debt</title>

    <link href="/Debt-v1/dist/output.css" rel="stylesheet">
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

<h1 class="text-primary text-center text-6xl font-bold lg:pt-8 m-5 title">
    Free Debt Relief Savings Estimate!
</h1>
<p class="text-center text-gray-600 text-xl pt-4">See how much you can save</p>
<div id="formResp">
    <form class="bg-white lg:w-8/12 mt-8 shadow-xl rounded-lg m-8" id="regForm" action="/Debt-v1/dist/submit.php">
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
                <h2 class="text-secondary text-4xl font-semibold text-center px-8 ">How Much Debt Do You Have?</h2>
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
                            <input type="range" value="20000" min="0" max="100000" id="slider" step="1000"/>
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
                <input type="text" id="zip" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="12345" required />
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
                    <label for="first"></label><input type="text" id="first" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your full name" required />
                </div>
                <div class="w-full pt-3">
                    <label for="last"></label><input type="text" id="last" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your last name" required />
                </div>
                <div class="w-full pt-3">
                    <label for="email"></label><input type="email" id="email" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your email" required />
                </div>
            </div>
        </div>
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
                    <label for="address"></label><input type="text" id="address" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your address" required />
                </div>
                <div class="w-full pt-3">
                    <label for="phone"></label><input type="tel" id="phone" class=" font-bodyFont bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-4 " placeholder="Enter your phone number" required />
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
                        <span class="pl-2">By checking this box I consent to receive text messages and calls via automatic telephone dialing system and an artificial or prerecorded voice to the phone number I entered above from JugglingDebt.com as well as from debt relief solution companies, loan providers, debt consolidation service providers and partners, for debt relief or debt consolidation service offers even if I am on a national, state, or entity-specific Do-Not-Call list. I understand that consent is not required to receive a quotation or make a purchase. Message and data rates may apply. For more information, please review our TCPA Disclosure. </span>
                    </div>
                    </div>
                <div class="flex justify-center py-10 items-center ">
                    <button class="font-bodyFont bg-red-600 lg:px-20 lg:py-5 text-2xl font-bold rounded-full q-title q-button" onclick="nextPrev(1)">Submit</button>
                </div>
                <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
            </div>
        </div>
    </div>
    <div style="overflow:auto" class="flex justify-center " >
        <div style="float:right;">
            <button type="button" class="text-xl font-bold text-gray-500 font-bodyFont" id="prevBtn" onclick="backPrev(-1)">← Back</button>
        </div>
    </div>
</form>
</div>
<footer class="bg-secondary pt-5 pb-20 mt-10">
            <div class="grid lg:grid-cols-4 text-white">
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
            </div>
    <div class="pt-8 text-center text-white lg:px-24" style="font-size: 13px">
        TCPA Disclosure
        By clicking "Complete My Application," you hereby agree to the following terms in accordance with the Telephone Consumer Protection Act (TCPA):
        You consent to be contacted and receive informational and marketing communications from us and/or our service providers, affiliates, third parties and/ or partners, (collectively “Partners”) These communications may be delivered by live agents, artificial, automated, or pre-recorded voice, via email, and Short Message Service ("SMS") text to your residence, mobile, or other provided phone numbers or addresses you have provided, or that you will provide in the future (of which you hereby represent you are the owner, subscriber, or regular user) (collectively, "Contact Info"). Communications may be dialed manually or by an automated telephone dialing system. You acknowledge that standard message and data rates may apply for SMS messages.
        Your consent extends to being contacted even if your contact info is on ours or our Partners' Do Not Call/Do Not Email List, a State or National Do Not Call Registry, or any other Do Not Contact List. You consent to calls made to the phone number associated with the webform through which this consent is given. You commit to promptly notify us if you cease using a specific phone number or email address. Consent for contact is not a prerequisite for purchasing services, and you retain the right to revoke this consent at any time by emailing us at span class="font-bold"><span><a href="mailto:compliance@jugglingdebt.com">compliance@jugglingdebt.com,.</a> </span>
        You consent to and acknowledge the possibility of automated messages or artificial/pre-recorded voices being played when the telephone is answered whether by you or another party. Additionally, you acknowledge that we and/or our Partners may listen, record, and retain recordings of calls for quality assurance or other purposes, as permitted by applicable laws, without further notice.
        You agree and acknowledge that we may disclose, share, sell, re-sell, or market your personal data to one or more Partner(s), which may result in compensation to us or our Partners. You consent to the use of this data for purposes, including re-targeting, marketing, analytics, product, service improvement and to enhance user experience. Such disclosures may involve sharing and/or selling your data to third-party service providers, brokers, and their service providers or Partners. You expressly consent to being contacted for marketing purposes regarding debt relief or debt consolidation services that our Company offers directly or through a third party, that we may deem a potential fit for you, based on the information you have submitted to us or our Partners.
        You consent to the use of analytic and marketing tools, including Artificial Intelligence-based software and technology, utilizing your data. This includes the use of technology to track your consent, capture screenshots, and record your IP address or other digital footprint evidence to validate your consent.
        Our services may include SMS messages, with a limit of up to five messages per day to your wireless device. We may use your information to contact you about your info, purchases, website updates, conduct surveys, or informational and service-related communications, including important security updates. You can opt-out at any time by replying "STOP" to received SMS messages. Upon sending "STOP," we will confirm your unsubscribing via SMS, after which you will no longer receive messages. To rejoin, simply sign up again. For help, please reply to a text with HELP. Message and data rates may apply, contingent on your cell phone plan. Carriers are not responsible for delayed or undelivered messages. Alternatively, submit your request to stop SMS messages by emailing us at <span class="font-bold"><a href="mailto:compliance@jugglingdebt.com">compliance@jugglingdebt.com,</a> </span> including your registered email address and phone number.
        You understand that you are not obligated to consent to receive calls or text messages as a condition for purchasing goods or services. You may continue your application by sending an email to <span class="font-bold"><a href="mailto:info@jugglingdebt.com">info@jugglingdebt.com </a> </span>. You also agree to Juggling Debts’ Privacy Policy and Terms of Use, opting to receive important notices and other communications electronically. Furthermore, you consent to us and/or our Partners performing a credit check based on the information you provided.

    </div>
</footer>
<script src="/Debt-v1/dist/JS/script.js">
</script>
<script>$('#regForm').submit(function(event) {

    event.preventDefault();

    if(formValidate()){

        //$('#loadingModal').fadeIn(500);

        var values = $(this).serialize();

        $.ajax({
            url: 'resources/process.php?method=Lead',
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

    }

});</script>
</body>

</html>