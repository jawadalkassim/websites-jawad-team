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
					
					<h4 class="text-2xl font-bold mt-2 text-center">Terms and Conditions</h4>
					
					<h4 class="text-lg font-bold mt-4">INTRODUCTION</h4>

					<p class="mt-2.5">Welcome to USALifeRates.com! These Terms of Service are a written contract (the "Terms”) between you and/or your company (collectively, "you”) and Consumer Genius USA Inc. as the owner and operator of USALifeRates.com ("Company,” "we” or "us”) and apply to your use of our website (the "Website”).</p>
					
					<h4 class="text-lg font-bold mt-4">ARBITRATION</h4>

					<p class="mt-2.5">These Terms contain an "Arbitration Agreement” where you waive your right to a jury trial and to bring a class action.</p>
					
					<h4 class="text-lg font-bold mt-4">What is arbitration?</h4>

					<p class="mt-2.5">Legal disputes are usually resolved in a court of law in front of a judge and, sometimes, a jury. Court cases are a matter of public record. Arbitration is a less formal and more private way of resolving disputes.  Instead of going to court, the parties give their arguments and evidence to an arbitrator, and the arbitrator decides who "wins” the case by applying the law in the same way that a judge would. In fact, many arbitrators are retired judges or lawyers. Instead of a courtroom, arbitrations are generally held in a private office, such as a conference room, or by videoconference.</p>
					
					<h4 class="text-lg font-bold mt-4">What is our Arbitration Agreement?</h4>

					<p class="mt-2.5">Under this Agreement, <strong>ANY DISPUTE OR CLAIM BETWEEN YOU AND US RELATING TO YOUR USE OF THE WEBSITE, THESE TERMS, THE PRIVACY POLICY, OR ANY OF THE OTHER TERMS AND POLICIES LISTED IN THESE TERMS MUST BE RESOLVED EXCLUSIVELY THROUGH BINDING ARBITRATION.</strong> This means that we all agree that we will only resolve our legal disputes through arbitration and not in a court of law.  Without this Arbitration Agreement, you would have the right to sue in court with a jury trial.</p>
					
					<h4 class="text-lg font-bold mt-4">How will the arbitration work?</h4>

					<p class="mt-2.5">The arbitration must be filed and conducted through JAMS (<a href="https://www.jamsadr.com/" target="_blank" class="text-custom-blue font-semibold">www.jamsadr.org</a>), which is a provider of arbitration services in the United States and internationally. JAMS' Streamlined Rules will apply to the arbitration. All claims, remedies, and defenses that either you or we have under applicable law (whether federal, state, or local) will remain available to us in the arbitration. Each of us will participate in choosing a neutral arbitrator using the process in the Streamlined Rules. Unless you waive this requirement, the final arbitration hearing (which is like a trial) will take place in person at the JAMS facility closest to your home. The arbitrator's award will consist of a written statement explaining the arbitrator's decision on each claim. The award will also include a concise written statement of the findings of fact and conclusions of law on which the award is based. The arbitrator must follow applicable law, and any award may be challenged if the arbitrator fails to do so.</p>
					
					<h4 class="text-lg font-bold mt-4">What law will the arbitrator follow?</h4>

					<p class="mt-2.5">The laws of California govern this Agreement. The arbitrator will apply California law to the claims in the arbitration.</p>
					
					<h4 class="text-lg font-bold mt-4">Who pays for the arbitration?</h4>

					<p class="mt-2.5">In most cases, the only fee you will have to pay to JAMS is $250; we will pay all other arbitration costs. However, if the arbitrator decides that you filed your claim in bad faith and without any legal basis, the arbitrator can require you to pay more (or even all) of the JAMS fees for the arbitration.</p>

					<p class="mt-2.5">The JAMS fees do not include attorneys’ fees. Regardless of who wins the claim, you will be responsible for paying your attorneys’ fees and we will be responsible for paying ours. The only exception is if the claim is brought under a law that specifically allows a party to recover its attorneys’ fees.  If this applies, the arbitrator may award attorneys’ fees as they see fit under such law. </p>
					
					<h4 class="text-lg font-bold mt-4">Are there any instances where a court will get involved?</h4>

					<p class="mt-2.5">Yes. There are things an arbitrator cannot do, like order a party to act or stop doing something—this is known as "equitable relief.” Either one of us can go to court and seek equitable relief, including by filing a motion to compel the other party to honor the arbitration agreement.  However, you and we agree that the only courts where we will seek equitable relief—or file any legal proceeding outside of arbitration—are the state and federal courts in Irvine, California. This exception for equitable relief does not waive our Arbitration Agreement.</p>
					
					<h4 class="text-lg font-bold mt-4">Can I file a class action?</h4>

					<p class="mt-2.5"><strong>No. You and we agree that we will only file claims against each other individually and not as a plaintiff or class member in a representative proceeding. THIS MEANS CLASS ACTIONS ARE NOT ALLOWED.</strong></p>
					
					<h4 class="text-xl font-bold mt-4">OUR SERVICES (HOW THE WEBSITE WORKS)</h4>
					
					<h4 class="text-lg font-bold mt-1">What We Do</h4>

					<p class="mt-2.5">The Website provides you with information and access to third parties ("Insurers”) who provide insurance, life insurance services, and other financial services (collectively, the "Services”). After you submit a request for information (a "Request”) on the Website, or call the phone number on the Website, you may be contacted by phone, email, or text by one or more Insurers.</p>
					
					<h4 class="text-lg font-bold mt-4">What We Don't Do</h4>

					<p class="mt-2.5">We are <strong><u>not</u></strong> a Insurer and we <strong>do <u>not</u> provide insurance Services.</strong> Insurers are separate from our Company and have their own contracts, rules, eligibility requirements, refund polies, and so forth that cover the Services.</p>

					<p class="mt-2.5">We are <strong><u>not</u></strong> a directory or phone book. The Website does not include a complete list of all available Insurers. As explained below in the <strong>"How We Make Money”</strong> section, we only link you and other Website users with Insurers who have agreed to pay us commissions. We make <u>no</u> promise or guarantee that the Insurers we work with offer the best rates or terms.</p>

					<p class="mt-2.5">We do <strong><u>not</u></strong> guarantee that we will fulfill your Request or connect you with a Insurer. Certain factors, including those outside of our control, may make you ineligible for receipt of Services any Insurer.</p>

					<p class="mt-2.5">We are <strong><u>not</u></strong> a credit reporting agency and do not make credit-based decisions. The availability of certain Services may be based on your creditworthiness, but we don't play any part in accessing your credit report or deciding whether you qualify for the Services. The Insurers will resolve these issues with you.</p>

					<p class="mt-2.5">We do <strong><u>not</u></strong> give medical, legal, or financial advice. The content on the Website is provided for informational purposes only. If you have a serious legal or financial issue, you should contact a licensed professional.</p>
					
					<h4 class="text-lg font-bold mt-4">How We Make Money</h4>

					<p class="mt-2.5">We do <strong><u>not</u></strong> collect money from you. We make the Website available to you and other users for free. We earn money through commissions we receive from Insurers. Thus, if you click on a link on the Website or transact business with a Insurer, we may receive a commission.</p>
					
					<h4 class="text-lg font-bold mt-4">Separate Insurer Contract and Loan Documents</h4>

					<p class="mt-2.5">We are not a party to any transaction between you and an Insurer. Your dealings with an Insurer may be covered by a separate contract—and/or insurance documents, where applicable—between you and the Insurer.  We don't accept payment from users, we don't lend money, and we don't provide customer service for Insurers. If you are working with a Insurer you found through the Website, you should raise all insurance, timing, payment, and status inquiries directly with the Insurer.</p>
										
					<h4 class="text-lg font-bold mt-4">Insurer Communications</h4>

					<p class="mt-2.5">Insurers may contact you about your Request by phone, text message or email at the numbers and addresses you provide to us. This is true even if you registered your phone number with a federal or state Do Not Call list.  We understand it is annoying to continue to receive communications about Services after you have already found the right Insurer. If you want to stop receiving communications about Services from Company or a Insurer, you can:</p>

					<ul class="pl-8 mt-2 space-y-2 list-disc">
						<li>Click on the "unsubscribe” link in any email communication;</li>
						<li>Reply "STOP” to any text message communication; and/or</li>
						<li>Tell the customer service agent on any phone call that you would like to be placed on the Do Not Call list for our Company or the applicable Insurer.</li>
					</ul>
										
					<h4 class="text-xl font-bold mt-4">THIRD PARTIES</h4>
										
					<h4 class="text-lg font-bold mt-1">What are third parties?</h4>

					<p class="mt-2.5">Third parties are any person or business other than you or us—in other words, someone who is not a party to this Agreement. Here are a few examples of third parties:</p>

					<ul class="pl-8 mt-2 space-y-2 list-disc">
						<li><strong>Our vendors.</strong> These third parties help us to run the Website. To do so, they may place cookies on your device or have access to your personal information. We address the exchange of information with our third-party vendors in our Privacy Policy.</li>
						<li><strong>Other users of the Website.</strong> While other users may have agreed to the terms of the Website, they are not party to this Agreement between you and us. Accordingly, when other users post Content to the Website, it is third-party Content—meaning neither you nor we are responsible for it.</li>
						<li><strong>Other websites or apps.</strong> The Website may contain links to other websites and apps that are operated by third parties.  We may have relationships with some of these third parties, while with others, we do not.</li>
						<li><strong>Insurers.</strong> When you communicate, visit the website of, or transact with a Insurer, you are doing business with a third party.</li>
					</ul>
										
					<h4 class="text-lg font-bold mt-4">Third-Party Content</h4>

					<p class="mt-2.5">Third-party Content includes any posts, uploads, messages, opinions, advice, statements, or other information posted to the Website by a third party. Third parties are solely responsible for their own Content. We do not review all third-party Content and do not guarantee that it is accurate, complete, or useful. <strong>We are <u>not</u> responsible for your reliance on third-party Content.</strong></p>
										
					<h4 class="text-lg font-bold mt-4">Third-Party Websites</h4>

					<p class="mt-2.5">The Website may contain links to third-party websites or apps.  Some of these third parties may have a business relationship with us while others do not. We do not have control over the content or performance of a third-party website. Except where we’ve expressly indicated an affiliate relationship or other endorsement, we don’t represent or endorse third-party websites, apps, information, goods, or services.</p>
										
					<h4 class="text-xl font-bold mt-4">YOUR USER ACCOUNT AND CONTENT </h4>
										
					<h4 class="text-lg font-bold mt-1">Your Account</h4>

					<p class="mt-2.5">We may ask you to create a user account (your "Account”) to access certain parts of the Website. You promise that you will only provide complete and accurate information to us in connection with your Account. This means you <strong><u>cannot</u></strong> set up your Account in a manner that impersonates another person or business. If you violate this policy, we may terminate your Account and delete all your Content.</p>
										
					<h4 class="text-lg font-bold mt-4">Account Security</h4>

					<p class="mt-2.5">It is up to you to ensure your username and password are secure. You agree not to share your Account login details with anyone else. If you believe your Account has been accessed without your permission, you should immediately notify us.</p>
										
					<h4 class="text-lg font-bold mt-4">Your Content</h4>

					<p class="mt-2.5">We refer to all content uploaded, posted, or communicated to or through the Website as "Content.” Your Content includes all Content posted through your Account, regardless of whether you personally posted it.</p>
										
					<h4 class="text-lg font-bold mt-4">Reviews</h4>

					<p class="mt-2.5">If your Content contains any reviews or comments—including reviews of the Website, Products, and Company, you represent that such reviews and comments are true and accurately represent your experience. You understand and agree that, pursuant to the license granted in your Content, Company will have the right to republish all or part of your reviews and comments on the Website, Company's social media accounts, advertising, and other media as Company deems fit.</p>
										
					<h4 class="text-lg font-bold mt-4">CONSENT TO RECEIVE COMMUNICATIONS</h4>

					<p class="mt-2.5">You consent to receive electronic communications from us, such as phone calls, text messages, emails, and mobile push notification. Where required by law, we will provide you an additional, express opportunity to opt-in to receive such messages. You can always opt out of receiving electronic communications as follows:</p>

					<ul class="pl-8 mt-2 space-y-2 list-disc">
						<li>For email, click on the  "unsubscribe" link in the email and follow any subsequent directions.</li>
						<li>For text messages, respond STOP.</li>
						<li>For phone calls, ask to be placed on the caller's internal Do Not Call list.</li>
					</ul>

					<p class="mt-2.5">For text messages, standard messaging rates will apply. You agree that all texts, calls, and prerecorded messages may be generated by automatic dialing systems.</p>
										
					<h4 class="text-xl font-bold mt-4">INTELLECTUAL PROPERTY </h4>
										
					<h4 class="text-lg font-bold mt-1">Your License to Use the Website</h4>

					<p class="mt-2.5">So long as you comply with the terms of this Agreement (including all additional policies linked below), Company grants you a limited, non-exclusive, non-sublicensable, revocable, non-transferable license to access and use the Website. This license does <strong><u>not</u></strong> allow you reproduce, modify, duplicate, copy, sell, resell, distribute, transmit, or otherwise exploit (for any commercial purpose or otherwise) any part of the Website—including the Content of other users—unless you first obtain our written permission.  We reserve all rights not expressly granted in this Agreement. If you breach any provision of this Agreement, your license will automatically terminate.</p>
										
					<h4 class="text-lg font-bold mt-4">Company's License to Your Content </h4>

					<p class="mt-2.5">You are always the owner of your Content; however, we require a license from you to legally display your Content on the Website. Without this license, we could not allow you to upload any Content. Accordingly, you grant to Company a nonexclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, reproduce, modify, adapt, publish, perform, translate, create derivative works from, distribute and display your Content throughout the world in any media now existing or in the future created. </p>
										
					<h4 class="text-lg font-bold mt-4">Use of Your Content to Promote the Website</h4>

					<p class="mt-2.5">As we explain above, we may use your reviews and comments to promote the Website and Products.  Aside from these reviews and comments, we will not use your Content in advertising without first obtaining your permission. </p>
										
					<h4 class="text-lg font-bold mt-4">Our Intellectual Property </h4>

					<p class="mt-2.5">Our name, logo, Product names, the Website domain, and all content and other materials available through the Website other than your Content (collectively, the "Company IP”) are trademarks, copyrights, and intellectual property that are owned by Company and our Third Party licensors and suppliers. Nothing in this Agreement grants you any right, title, license, or interest in the Company IP. You shall not at any time, nor shall you assist others to, challenge Company's right, title, or interest in, or the validity of, the Company IP.</p>
										
					<h4 class="text-lg font-bold mt-4">PROHIBITED CONDUCT</h4>

					<p class="mt-2.5">We impose certain restrictions on your use of the Website.  You are prohibited from doing any of the following:</p>

					<ul class="pl-8 mt-2 space-y-2 list-disc">
						<li>providing false, misleading, or inaccurate information to Company or any other person in connection with your Account, or the Website;</li>
						<li>impersonating, or otherwise misrepresenting affiliation, connection, or association with, any person or entity;</li>
						<li>accessing the Account of any other user;</li>
						<li>modifying or changing the placement and location of any advertisement posted through the Website;</li>
						<li>harvesting or collecting information about users, including email addresses and phone numbers;</li>
						<li>using any engine, software, tool, agent, or other device or mechanism (such as browsers, spiders, robots, avatars, AI, or intelligent agents) to harvest or collect information from the Website for any use, including any use on another website, app, or media;</li>
						<li>accessing content or data not intended for you, or logging into a server or account that you are not authorized to access;</li>
						<li>attempting to probe, scan, or test the vulnerability of the Website, or any associated system or network, or breaching security or authentication measures;</li>
						<li>interfering with the use of the Website by any other user, host, or network, including (without limitation) by submitting malware, exploiting vulnerabilities, or through a DDoS attack;</li>
						<li>forging, modifying, or falsifying any network packet or protocol header or metadata in any connection with, or transmission to, the Website (for example, SMTP email headers, HTTP headers, or Internet Protocol packet headers);</li>
						<li>while using the Website, using ad-blocking or other content-blocking software, browser extensions, or built-in browser options designed to hide, block, or prevent the proper display of online advertising;</li>
						<li>attempting to modify, reverse-engineer, decompile, disassemble, or otherwise reduce or attempt to reduce to a human-perceivable form any of the source code used in providing the Website, including without limitation any fraudulent effort to modify software or any other technological mechanism for measuring the number of impressions or clicks generated by specific Content and/or the Website; or</li>
						<li>creating additional Accounts to promote yourself, your business, or a Third Party (or another's) business, or causing others to do so.</li>
					</ul>
										
					<h4 class="text-xl font-bold mt-4">DISCLAIMERS AND LIMITATIONS</h4>
										
					<h4 class="text-lg font-bold mt-1">No Warranties.</h4>

					<p class="mt-2.5">A warranty is a promise made by a business to a consumer about the business's products or services. The law assumes a business has made certain warranties unless it disclaims them. When a business "disclaims” a warranty, it is the equivalent of saying "we are not making this promise to you.”</p>

					<p class="mt-2.5"><strong>UNLESS WE EXPRESSLY WARRANT SOMETHING IN THIS AGREEMENT, WE DISCLAIM ANY AND ALL WARRANTIES TO YOU, INCLUDING EACH OF THE FOLLOWING WARRANTIES: ALL WARRANTIES ARISING BY OPERATION OF LAW OR OTHERWISE, ALL IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT, NO ENCUMBRANCE, OR TITLE, OR WARRANTIES ARISING FROM A COURSE OF DEALING, USAGE OR TRADE PRACTICES.</strong></p>

					<p class="mt-2.5"><strong>WE DO NOT WARRANT THAT THE WEBSITE OR SERVICES WILL MEET YOUR EXPECTATIONS OR REQUIREMENTS. WE DO NOT WARRANT OR GUARANTEE THAT YOU WILL QUALIFY FOR LIFE INSURANCE OR OTHER INSURANCE ASSISTANCE WITH ANY INSURER. WE DO NOT WARRANT THAT YOUR ACCESS TO THE WEBSITE WILL BE UNINTERRUPTED OR THAT THE WEBSITE WILL FUNCTION ERROR-FREE.</strong></p>
										
					<h4 class="text-lg font-bold mt-4">Limitation of Liability.</h4>

					<p class="mt-2.5">This section limits the types of claims you can bring against us.  These limitations help us reduce the risks associated with providing the Website and our services—in fact, we could not provide them otherwise. </p>

					<p class="mt-2.5"><strong>TO THE FULLEST EXTENT PERMITTED BY LAW, WE WILL NOT BE LIABLE TO YOU FOR ANY CONSEQUENTIAL DAMAGES, LOST PROFITS, LOST CONTENT OR OTHER DATA, COSTS OF PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES, OR FAILURE TO MEET ANY DUTY, INCLUDING GOOD FAITH OR REASONABLE CARE. THESE LIMITATIONS APPLY REGARDLESS OF THE FORESEEABILITY OF SUCH DAMAGES.</strong></p>
										
					<h4 class="text-xl font-bold mt-4">MISCELLANEOUS PROVISIONS</h4>
										
					<h4 class="text-lg font-bold mt-1">Minimum Age</h4>

					<p class="mt-2.5">You represent and warrant that you are at least 18 years old (or the age of majority in your jurisdiction, if different than 18).</p>
										
					<h4 class="text-lg font-bold mt-1">Corporate Use</h4>

					<p class="mt-2.5">If you are using the Website on behalf of a company, you further represent and warrant that you are authorized to act on behalf of that company, including by agreeing to binding contracts.</p>
										
					<h4 class="text-lg font-bold mt-4">Electronic Notice</h4>

					<p class="mt-2.5">You consent to receive notices, disclosures, and other communications electronically at the email address linked with your Account. You agree that these electronic notices satisfy any legal requirements that such communications be in writing. </p>
										
					<h4 class="text-lg font-bold mt-4">Survival</h4>

					<p class="mt-2.5">The provisions of this Agreement which, by their nature, should survive termination shall survive such termination, including the sections entitle ARBITRATION, INTELLECTUAL PROPERTY, DISCLAIMERS AND LIMITATIONS, and MISCELLANEOUS PROVISIONS.</p>
										
					<h4 class="text-lg font-bold mt-4">Severability</h4>

					<p class="mt-2.5">If any provision of this Agreement is declared invalid, void, or unenforceable, then that provision is severable from this Agreement and shall not affect the validity and enforceability of the remaining provisions. </p>
										
					<h4 class="text-lg font-bold mt-4">No Waiver </h4>

					<p class="mt-2.5">A waiver by either you or Company of any term or condition of this Agreement, or any breach, in any one instance, will not waive that term or condition or any later breach.</p>
										
					<h4 class="text-lg font-bold mt-4">Independent Contractors </h4>

					<p class="mt-2.5">You understand and agree that you and Company are independent contractors, and no agency, partnership, joint venture, or employee-employer relationship is intended or created by this Agreement.</p>
										
					<h4 class="text-lg font-bold mt-4">CHANGES</h4>

					<p class="mt-2.5">Internet technology and the applicable laws, rules, and regulations change frequently. We may need to make changes to this Agreement and the Privacy Policy from time to time, including to keep up with changes in the law. If we make a material change, we will notify you in advance so you can decide whether you want to continue using the Website after the change takes effect. Your continued use of the Website after the change constitutes your consent to the updated Agreement or Privacy Policy.  It is up to you to keep the email address associated with your Account up to date so that you don't miss any such notifications.</p>
										
					<h4 class="text-lg font-bold mt-4">OTHER TERMS AND POLICIES</h4>

					<p class="mt-2.5">We take your privacy very seriously. Our Privacy Policy (the "Privacy Policy”) is a part of this Agreement and is incorporated by reference. The Privacy Policy contains details about how information is collected from you through the Website, how it is used and shared with our service providers, and what your rights are with respect to such information. The Privacy Policy is available at <a href="privacy-policy.php" target="_self" class="text-custom-blue font-semibold">https://usaliferates.com/privacy-policy/.</a></p>

					<p class="mt-4 font-bold">Last Updated: February 12, 2024</p>

					
				</div>
			</div>
		</div>
	</main>
	
</div>
	
</body>
</html>