<?php
$BrandName = 'Benefits for Consumers';
$BrandDomain = 'benefitsforconsumers.com';

$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parsed_url = parse_url($current_url);
$domain = $parsed_url['host'];
$domain_without_subdomain = preg_replace('/(?:.*\.)?([^\.]+\.[^\.]+)/i', '$1', $domain);

if($domain_without_subdomain == 'dailyconsumerbargains.com'){
	$BrandName = 'Daily Consumer Bargains';
	$BrandDomain = $domain_without_subdomain;
} else if($domain_without_subdomain == 'topcarehotline.com'){
	$BrandName = 'Top Care Hotline';
	$BrandDomain = $domain_without_subdomain;
} else if($domain_without_subdomain == 'insurancesaversclub.com'){
	$BrandName = 'Insurance Savers Club';
	$BrandDomain = $domain_without_subdomain;
}

?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Terms and Conditions</title>
<meta name="description" content=""/>
<meta name="keywords" content="">
	
<link href="/assets/css/style.css" rel="stylesheet" media="all" />
	
</head>
<body class="h-full">
	
<div class="bg-white">
	
	<main>
		<div class="bg-white pb-8">
			<div class="px-6 sm:px-6 lg:px-8">
				<div class="mx-auto max-w-5xl text-sm py-4 text-gray-700">
					
					<h4 class="text-2xl font-bold mt-2 text-center">TCPA Disclosure</h4>
					
					<p class="mt-2.5">By clicking "View My Results," you hereby agree to the following terms in accordance with the Telephone Consumer Protection Act (TCPA):</p>
					
					<p class="mt-2.5">You consent to be contacted and receive informational and marketing communications from us and/or our service providers, affiliates, third parties and/ or partners (collectively “Partners”) These communications may be delivered by live agents, artificial, automated, or pre-recorded voice, via email, and Short Message Service ("SMS") text to your residence, mobile, or other provided phone numbers or addresses you have provided, or that you will provide in the future (of which you hereby represent you are the owner, subscriber, or regular user) (collectively, "Contact Info"). Communications may be dialed manually or by an automated telephone dialing system. You acknowledge that standard message and data rates may apply for SMS messages</p>
					
					<p class="mt-2.5">Your consent extends to being contacted even if your contact info is on ours or our Partners' Do Not Call/Do Not Email List, a State or National Do Not Call Registry, or any other Do Not Contact List. You consent to calls made to the phone number associated with the webform through which this consent is given. You commit to promptly notify us if you cease using a specific phone number or email address. Consent for contact is not a prerequisite for purchasing services, and you retain the right to revoke this consent at any time by emailing us at <a href="mailto:compliance@usaliferates.com">compliance@usaliferates.com.</a></p>
					
					<p class="mt-2.5">You consent to and acknowledge the possibility of automated messages or artificial/pre-recorded voices being played when the telephone is answered whether by you or another party. Additionally, you acknowledge that we and/or our Partners may listen, record, and retain recordings of calls for quality assurance or other purposes, as permitted by applicable laws, without further notice.</p>
					
					<p class="mt-2.5">You agree and acknowledge that we may disclose, share, sell, re-sell, or market your personal data to one or more Partner(s), which may result in compensation to us or our Partners. You consent to the use of this data for purposes, including re-targeting, marketing, analytics, product, service improvement and to enhance user experience. Such disclosures may involve sharing and/or selling your data to third-party service providers, brokers, and their service providers or Partners. You expressly consent to being contacted for marketing purposes regarding insurance services that our Company offers directly or through a third party, that we may deem a potential fit for you, based on the information you have submitted to us or our Partners.</p>
					
					<p class="mt-2.5">You consent to the use of analytic and marketing tools, including Artificial Intelligence-based software and technology, utilizing your data. This includes the use of technology to track your consent, capture screenshots, and record your IP address or other digital footprint evidence to validate your consent.</p>
					
					<p class="mt-2.5">Our services may include SMS messages, with a limit of up to five messages per day to your wireless device. We may use your information to contact you about your info, purchases, website updates, conduct surveys, or informational and service-related communications, including important security updates. You can opt-out at any time by replying "STOP" to received SMS messages. Upon sending "STOP," we will confirm your unsubscribing via SMS, after which you will no longer receive messages. To rejoin, simply sign up again. For help, please reply to a text with HELP. Message and data rates may apply, contingent on your cell phone plan. Carriers are not responsible for delayed or undelivered messages. Alternatively, submit your request to stop SMS messages by emailing us at compliance@usaliferates.com, including your registered email address and phone number.</p>
					
					<p class="mt-2.5">You understand that you are not obligated to consent to receive calls or text messages as a condition for purchasing goods or services. You may continue your application by sending an email to <a href="mailto:info@usaliferates.com">info@usaliferates.com</a>. You also agree to USA Life Rates' Privacy Policy and Terms of Use, opting to receive important notices and other communications electronically. Furthermore, you consent to us and/or our Partners performing a credit check based on the information you provided.</p>

					
				</div>
			</div>
		</div>
	</main>
	
</div>
	
</body>
</html>