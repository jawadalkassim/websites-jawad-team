<?php

error_reporting(E_ALL);
ini_set("display_errors",0);
// Enable logging of errors to a specified log file
ini_set("log_errors", 1);
ini_set("error_log", "C:/Users/VS/Desktop/today/us-auto-insurance/php-error.log");


session_start();
foreach($_GET as $key => $value){
  $_SESSION[$key] = $value;
}
?>
<?php

session_start();
foreach($_GET as $key => $value){
	$_SESSION[$key] = $value;
}

if($_GET['tid']){
	$_SESSION['everflowTransactionId'] = $_GET['tid'];
}

$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$baseUrl = strtok($currentUrl, '?');
$currentStep = parse_url($currentUrl, PHP_URL_FRAGMENT);

$brand = 'loanz';
$match = $_SESSION['match'];

global $integration;
global $vertical;
global $folder_name;

?>
<!doctype html>
<html lang="en-US" class="h-full min-h-full">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Speedy Insurance Quotes</title>
<meta name="description" content="Speedy Insurance Quotes">
<meta name="keywords" content="speedy insurance quotes, auto insurance, car insurance, insurance quote">

<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/assets/images/favicon/site.webmanifest">
<link rel="mask-icon" href="/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<link href="/assets/css/jquery.fancybox.css" rel="stylesheet">
<link href="/assets/css/jquery.page.min.css" rel="stylesheet">
<link href="/assets/css/tiny-date-picker.css" rel="stylesheet">
<link href="/assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" media="all" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHJZDNMaLGHnD1Y1adJ3oFqfbeSkSkFfM&libraries=places"></script>

</head>

<body class="h-full min-h-full bg-custom-blue">
	
<form id="lead" name="lead">
	
<input type="hidden" id="hdnPageNumber" name="hdnPageNumber" value="1" />	
<input type="hidden" id="loanVertical" value="debt" />	

<input type="hidden" id="hdnPhoneNumber" name="hdnPhoneNumber" />
<input type="hidden" id="ip_address" name="ip_address" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
<input type="hidden" id="user_agent" name="user_agent" value="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>" />
<input type="hidden" id="source_type" name="source_type" value="<?php echo $_REQUEST['source_type'] ?>" />

<input type="hidden" name="lp_s1" value="<?php echo $_REQUEST['s1']; ?>" />
<input type="hidden" name="lp_s2" value="<?php echo $_REQUEST['s2']; ?>" />
<input type="hidden" name="lp_s3" value="<?php echo $_REQUEST['s3']; ?>" class="hidden-tid" />
<input type="hidden" name="lp_s4" value="<?php echo $_REQUEST['s4']; ?>" />
<input type="hidden" name="lp_s5" value="<?php echo $_REQUEST['s5']; ?>" />

<input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
<input id="xxTrustedFormCertUrl" name="xxTrustedFormCertUrl" type="hidden" value=""/>

<input type="hidden" id="leadId" value="<?php echo $_GET['lead_id']; ?>">
<input type="hidden" id="hdn_vclid" class="hidden-vclid">

<div class="bg-white min-h-screen flex flex-col">
	
	<header class="grow-0">

		<nav class="bg-white border-b border-b-gray-200">
			<div class="mx-auto max-w-4xl px-4 pt-2 pb-3 sm:pt-3 sm:pb-4">
				<a href="/" target="_self">
					<img class="h-9 sm:h-11 w-auto mx-auto ease-in-out duration-300 -translate-x-1.5 sm:-translate-x-2.5" src="/assets/images/speedy-logo.png" alt="">
				</a>
			</div>
		</nav>

		<?php
		if($folder_name == 'apply' || $folder_name == 'auto-insurance' || $folder_name == 'life-insurance' || $folder_name == 'health-insurance' || $folder_name == 'medicare-insurance'){
		?>

		<section class="pt-2 sm:pt-4 pb-2 sm:pb-4 transition ease-in-out duration-300 bg-gray-200">

			<div class="pb-0 sm:pb-0"><!--pb-2 sm:pb-1-->
				<div class="mx-auto max-w-4xl">
					<h2 class="text-center text-sm sm:text-xl font-normal sm:font-semibold text-gray-600">Compare <?php echo ucfirst($insurance_type); ?> Insurance Rates in <span class="dynamic_state"></span></h2>
					<div class="mx-auto mt-2 flex items-center hidden">
						<img class="max-h-16 w-full object-contain lg:col-span-1 hidden sm:flex" src="/assets/images/brands/logo-strip.svg" alt="" width="800" height="100">
						<img class="max-h-16 w-full object-contain lg:col-span-1 sm:hidden" src="/assets/images/brands/logo-strip-small.svg" alt="" width="800" height="160">
					</div>
				</div>
			</div>
		
			<div id="FunnelProgress" class="flex flex-row w-full items-center mx-auto max-w-4xl pt-2 sm:pt-4">
			
				<div class="back-button-container flex justify-center sm:top-6 sm:left-6 hidden pl-2 sm:pl-4 transition ease-in-out duration-300">
					<button type="button" id="back-button" class="rounded-full bg-gray-100 text-sm sm:text-md text-gray-600 border border-1 border-gray-200 hover:bg-custom-light-green hover:text-white transition-all ease-in-out duration-300 flex items-center px-4 pl-2.5 h-10 sm:text-md sm:px-6 sm:pl-3.5 sm:h-12" type="button">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
							<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
						</svg>
						<span class="ml-1 sm:ml-2">Back</span>					
					</button>
				</div>
				
				<div class="px-2 sm:px-4 w-full transition ease-in-out duration-300">
					<!--<div class="text-gray-700 font-semibold text-sm pb-1.5">Progress: <span class="">(<span id="ProgressPercent2"></span>)</span></div>-->
					<div class="w-full bg-gray-300 rounded-full h-5 sm:h-7 relative">
						<div id="ProgressBar" class="bg-custom-light-green h-5 sm:h-7 rounded-l-full flex justify-end items-center transition ease-in-out duration-300" style="width: 0%">
							<span id="ProgressPercent2" class="pr-1 sm:pr-1.5 font-bold text-custom-dark-green text-xs sm:text-lg transition ease-in-out duration-300" style="display:none"></span>
						</div>
						<div id="ProgressPointer" class="rounded-full inline -mt-2 sm:-mt-4 absolute -translate-x-3 h-3 w-3 sm:h-5 sm:w-5 bg-custom-light-green hidden" style="left:0%">
							<div class="progress-arrow hidden"></div>
						</div>
					</div>
				</div>

			</div>
		
		</section>

		<?php
		}
		?>
		
	</header>