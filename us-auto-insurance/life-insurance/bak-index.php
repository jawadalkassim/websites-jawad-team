<?php

session_start();
foreach($_GET as $key => $value){
	$_SESSION[$key] = $value;
}

$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$baseUrl = strtok($currentUrl, '?');
$currentStep = parse_url($currentUrl, PHP_URL_FRAGMENT);
$current_file_path = __FILE__;
$folder_name = basename(dirname($current_file_path));
$insurance_type = 'life';

include_once(__DIR__.'/../components/header.php');
include_once(__DIR__.'/../resources/life-insurance/form-options.php');

?>

	<main id="MainContainer" class="bg-white pb-6 grow flex items-start">
			
		<div class="jquery-page pb-6 ease-in-out duration-300 mx-auto">
		<div class="jquery-page-container">
			
			<!--start step 1-->
			<div id="Step1" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="1">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">No Medical Exam Life Insurance Rates!</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 leading-6 font-normal text-center transition ease-in-out duration-300">Take 2 minutes to start your free quote below and protect your family today.</p>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Start My Free Quote
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Life insurance policies start from just $<span class="underline underline-offset-0">&emsp;</span>.<span class="underline underline-offset-0">&emsp;&emsp;</span> a week</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 1-->

			<!--start step 2-->
			<div id="Step2" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="2">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Do you currently have Life Insurance?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($has_life_insurance as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['household_income'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="life_insurance" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="life_insurance" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="life_insurance" name="life_insurance" value="<?php if ($_SESSION['life_insurance']) echo $_SESSION['life_insurance']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Whether you currently have a life insurance plan or not, this information will aid us the very best options for you.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 2-->

			<!--start step 3-->
			<div id="Step3" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="3">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your gender?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($gender_options as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['gender'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="gender" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="gender" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="gender" name="gender" value="<?php if ($_SESSION['gender']) echo $_SESSION['gender']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Different plans may offer specific benefits or rates based on gender, allowing us to present you with options that best align with your needs and circumstances.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 3-->

			<!--start step 4-->
			<div id="Step4" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="4">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Have you used Tobacco Products within the last 12 months?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($tobacco_use_options as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['tobacco_use'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="tobacco_use" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="tobacco_use" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="tobacco_use" name="tobacco_use" value="<?php if ($_SESSION['tobacco_use']) echo $_SESSION['tobacco_use']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">If you quit over a year ago, you can answer 'No' here</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 4-->

			<!--start step 5-->
			<div id="Step5" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="5">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Are you currently married?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($marital_status as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['marital_status'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="marital_status" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="marital_status" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="marital_status" name="marital_status" value="<?php if ($_SESSION['marital_status']) echo $_SESSION['marital_status']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Whether single or married, we're here to find the best coverage for you.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 5-->

			<!--start step 6-->
			<div id="Step6" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="6">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Do you have children?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($children as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['children'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="children" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="children" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="children" name="children" value="<?php if ($_SESSION['children']) echo $_SESSION['children']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Getting a quote is 100% free with no-obligation.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 6-->
			
			<!--start step 7-->
			<div id="Step7" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="7">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Is your household income greater than or equal to $40,000 per year?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300">Your income will help us understand which products are best suited for your budget.</p>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($household_income_over_40k as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['household_income'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="household_income" name="household_income" value="<?php if ($_SESSION['household_income']) echo $_SESSION['household_income']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">This will help us calculate your monthly price. You can always update this amount later.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 7-->

			<!--start step 8-->
			<div id="Step8" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="8">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your date of birth?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-4 md:py-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-lg">

						<div class="relative border border-1 border-gray-400 rounded-md flex flew-row items-center justify-center pl-4 pr-10 py-0.5 text-gray-400 text-xl">
							<div class="grow"></div>
							<?php 
								if ($_SESSION['dob_month']){
									echo '<button id="btn_dob_month" type="button" class="dob-date-text grow-0 p-2 font-bold text-2xl text-gray-700">'.$_SESSION['dob_month'].'</button>';
								} else {
									echo '<button id="btn_dob_month" type="button" class="dob-date-text grow-0 p-2 font-bold text-2xl text-custom-blue">MM</button>';
								}
							?>
							<div class="grow-0">/</div>
							<?php 
								if ($_SESSION['dob_day']){
									echo '<button id="btn_dob_day" type="button" class="dob-date-text grow-0 p-2 font-bold text-2xl text-gray-700">'.$_SESSION['dob_day'].'</button>';
								} else {
									echo '<button id="btn_dob_day" type="button" class="dob-date-text grow-0 p-2 font-bold text-2xl text-custom-blue">DD</button>';
								}
							?>
							<div class="grow-0">/</div>
							<?php 
								if ($_SESSION['dob_year']){
									echo '<button id="btn_dob_year" type="button" class="dob-date-text grow-0 p-2 font-bold text-2xl text-gray-700">'.$_SESSION['dob_year'].'</button>';
								} else {
									echo '<button id="btn_dob_year" type="button" class="dob-date-text grow-0 p-2 font-bold text-2xl text-custom-blue">YYYY</button>';
								}
							?>
							<div class="grow"></div>
							<button id="btn_dob_reset" type="button" class="absolute p-2 right-2 top-1/2 -translate-y-1/2 hover:text-custom-blue">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
								</svg>
							</button>
						</div>

						<?php
							if($_SESSION['dob_year'] && $_SESSION['dob_year'] && $_SESSION['dob_year']){
						?>
						<div class="grid grid-cols-3 gap-3 pt-5 dob-block dob-block-month hidden">
						<?php
							} else {
						?>
						<div class="grid grid-cols-3 gap-3 pt-5 dob-block dob-block-month">
						<?php
							}
						?>
							<?php
								foreach ($dob_options as $key => $value) {
									echo '<button type="button" class="dob-button-month border border-1 border-gray-400 rounded-md py-2 text-lg bg-white hover:bg-custom-blue hover:border-custom-blue hover:text-white transition ease-in-out duration-300" value="'.$value['value'].'" data-target="dob_month" data-value="'.$value['value'].'">'.$value['abbreviated_text'].'</button>';
								}
							?>
						</div>

						<div class="grid grid-cols-6 gap-3 pt-5 dob-block dob-block-day hidden">
							<?php
								for($day = 1; $day <= 31; $day++) {
									if($day < 10){
										$day = '0'.$day;
									}
									echo '<button type="button" class="dob-button-day border border-1 border-gray-400 rounded-md py-2 text-md sm:text-lg bg-white hover:bg-custom-blue hover:border-custom-blue hover:text-white transition ease-in-out duration-300" value="'.$day.'" data-target="dob_day" data-value="'.$day.'">'.$day.'</button>';
								}
							?>
						</div>

						<div class="pt-5 dob-block dob-block-year hidden">
							<div class="grid grid-cols-5 gap-3">
							<?php
								$currentYear = date("Y");
								$year_count = 0;
								for ($year = $currentYear - 18; $year >= $currentYear - 107; $year--) {
									$year_count++;
									if($year_count == 46){
										echo '</div>';
										echo '<button type="button" id="years_more_options" class="py-1 mt-3 text-center text-lg font-semibold px-3 flex items-center w-fit mx-auto text-gray-700 hover:text-custom-blue transition ease-in-out duration-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>More Options</button>';
										echo '<div id="extra_years" class="grid grid-cols-5 gap-3 pt-3 hidden">';
										echo '<button type="button" class="dob-button-year border border-1 border-gray-400 rounded-md py-2 text-md bg-white hover:bg-custom-blue hover:border-custom-blue hover:text-white transition ease-in-out duration-300" value="'.$year.'" data-target="dob_year" data-value="'.$year.'">'.$year.'</button>';
									} else {
										echo '<button type="button" class="dob-button-year border border-1 border-gray-400 rounded-md py-2 text-md bg-white hover:bg-custom-blue hover:border-custom-blue hover:text-white transition ease-in-out duration-300" value="'.$year.'" data-target="dob_year" data-value="'.$year.'">'.$year.'</button>';

									}
								}
							?>
							</div>
						</div>

						<input type="hidden" id="dob_month" name="dob_month" value="<?php if ($_SESSION['dob_month']) echo $_SESSION['dob_month']; ?>" required>
						<input type="hidden" id="dob_day" name="dob_day" value="<?php if ($_SESSION['dob_day']) echo $_SESSION['dob_day']; ?>" required>
						<input type="hidden" id="dob_year" name="dob_year" value="<?php if ($_SESSION['dob_year']) echo $_SESSION['dob_year']; ?>" required>

					</div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">

						<?php
							if($_SESSION['dob_year'] && $_SESSION['dob_year'] && $_SESSION['dob_year']){
						?>

						<button type="button" class="dob-next-button flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>

						<?php
							} else {
						?>

						<button type="button" class="dob-next-button flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue opacity-30" data-action="next-step" disabled>
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>

						<?php
							}
						?>

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Rates go up as we get older... let's save you some money!</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 8-->

			<!--start step 9-->
			<div id="Step9" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="9">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Why are you looking for life insurance?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300">Select all that apply.</p>

					<div class="pl-3 sm:pl-48 py-6">
						<div class="life_insurance_reasons space-y-4 sm:space-y-6">

						<?php

							$life_insurance_reason = explode(',', $_SESSION['life_insurance_reasons']);

							foreach ($life_insurance_reasons as $key => $value) {

								if (in_array($value['value'], $life_insurance_reason)) {
									//echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
									echo '<div class="relative flex items-start">
										<div class="custom-checkbox flex h-6 items-center">
											<input id="life_insurance_reasons-'.$key.'" name="life_insurance_reason_reasons" value="'.$value['value'].'" type="checkbox" class="h-6 w-6 sm:h-8 sm:w-8 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" checked>
										</div>
										<div class="ml-3 text-md sm:text-lg leading-6">
											<label for="life_insurance_reasons-'.$key.'" class="font-normal text-gray-700">'.$value['text'].'</label>
										</div>
									</div>';
								} else {
									//echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
									echo '<div class="relative flex items-start">
										<div class="custom-checkbox flex h-6 items-center">
											<input id="life_insurance_reasons-'.$key.'" name="life_insurance_reason_reasons" value="'.$value['value'].'" type="checkbox" class="h-6 w-6 sm:h-8 sm:w-8 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
										</div>
										<div class="ml-3 text-md sm:text-lg leading-6">
											<label for="life_insurance_reasons-'.$key.'" class="font-normal text-gray-700">'.$value['text'].'</label>
										</div>
									</div>';
								}

							}

						?>

						</div>

						<input type="hidden" id="life_insurance_reason" name="life_insurance_reasons" value="<?php if ($_SESSION['life_insurance_reasons']) echo $_SESSION['life_insurance_reasons']; ?>" required>

					</div>

					<div class="custom-error-container mt-4 transition ease-in-out duration-300 text-sm text-center"></div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">This will help us find options that are best suited for you.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 9-->

			<!--start step 10-->
			<div id="Step10" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="10">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your height?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-4 md:py-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm">

						<div class="relative w-full py-2">

							<select name="height" class="mt-0.5 block w-full px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" required>
								
								<?php
									foreach ($height as $key => $value) {
										if($key == $_SESSION['height']){
											echo '<option value="'.$key.'" selected>'.$value.'</option>';
										} else {
											echo '<option value="'.$key.'">'.$value.'</option>';
										}
									}
									for ($feet = 4; $feet <= 7; $feet++) {
										for ($inches = 0; $inches <= 11; $inches++) {
											$height = "$feet'$inches\"";
											if($height == $_SESSION['height']){
												//echo $height . PHP_EOL;
												echo '<option value="'.$height.'" selected>'.$height.'</option>';
											} else if($height == '5\'9"'){
												echo '<option value="'.$height.'" selected>'.$height.'</option>';
											} else {
												echo '<option value="'.$height.'">'.$height.'</option>';
											}
										}
									}
								?>
							</select>

						</div>

						<div class="custom-error-container mt-4 transition ease-in-out duration-300 text-sm"></div>

					</div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Height is often considered as a factor in insurance calculations, helping tailor plans to individual needs and ensuring accurate coverage.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 10-->

			<!--start step 11-->
			<div id="Step11" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="11">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your weight (lbs)?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>

					<div class="pt-6 sm:pt-8 flex items-center justify-center sm:gap-6 py-3 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-lg">

						<div class="h-full">
							<div class="mt-1">
								<input type="tel" name="weight" id="weight" class="peer income-input block w-full px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg md:text-2xl placeholder-shown:not-empty" placeholder="Pounds" minlength="2" maxlength="3" value="<?php if (isset($_SESSION['weight']) && $_SESSION['weight'] !== '') echo $_SESSION['weight']; ?>" required>
								
							</div>
						</div>

					</div>

					<div class="custom-error-container transition ease-in-out duration-300 text-sm text-center"></div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Weight, along with other factors, aids in determining personalized coverage options.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 11-->

			<!--start step 12-->
			<div id="Step12" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="12">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">In the past 5 years have you been treated or prescribed medication for any of the following conditions?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300">Select all that apply.</p>

					<div class="max-w-2xl mx-auto py-6 pl-4 sm:pl-0">
						<div class="prescribed_medication_options grid grid-cols-1 sm:grid-cols-2 gap-6">

						<?php

							$prescribed_medications = explode(',', $_SESSION['prescribed_medications']);

							foreach ($prescribed_meds_conditions as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if (in_array($value['value'], $prescribed_medications)) {
									//echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
									echo '<div class="relative flex items-start">
										<div class="custom-checkbox flex h-6 items-center">
											<input id="prescribed_meds_conditions-'.$key.'" name="prescribed_medication_options" value="'.$value['value'].'" type="checkbox" class="h-6 w-6 sm:h-8 sm:w-8 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" checked>
										</div>
										<div class="ml-3 text-md sm:text-lg leading-6">
											<label for="prescribed_meds_conditions-'.$key.'" class="font-normal text-gray-700">'.$value['text'].'</label>
										</div>
									</div>';
								} else {
									//echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
									echo '<div class="relative flex items-start">
										<div class="custom-checkbox flex h-6 items-center">
											<input id="prescribed_meds_conditions-'.$key.'" name="prescribed_medication_options" value="'.$value['value'].'" type="checkbox" class="h-6 w-6 sm:h-8 sm:w-8 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
										</div>
										<div class="ml-3 text-md sm:text-lg leading-6">
											<label for="prescribed_meds_conditions-'.$key.'" class="font-normal text-gray-700">'.$value['text'].'</label>
										</div>
									</div>';
								}

							}

						?>

						</div>

						<input type="hidden" id="prescribed_medications" name="prescribed_medications" value="<?php if ($_SESSION['prescribed_medications']) echo $_SESSION['prescribed_medications']; ?>" required>

					</div>

					<div class="custom-error-container mt-4 transition ease-in-out duration-300 text-sm text-center"></div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">We ask this to ensure comprehensive coverage for various conditions and guarantee that your insurance plan aligns perfectly with your health needs.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 12-->

			<!--start step 13-->
			<div id="Step13" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="13">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Are you currently employed?</h2>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($employment_status as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['employment_status'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-xl md:text-2xl font-semibold border-b border-b-4 border-b-custom-dark-blue" data-target="employment_status" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-xl md:text-2xl font-semibold border-b border-b-4 border-b-custom-dark-blue" data-target="employment_status" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="employment_status" name="employment_status" value="<?php if ($_SESSION['employment_status']) echo $_SESSION['employment_status']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">This will help us understand your financial situation and help find the best plan for your money.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 13-->

			<!--start step 14-->
			<div id="Step14" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="14">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Have you been treated for or prescribed medicine for:</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>

					<div class="max-w-2xl mx-auto py-6 pl-4 sm:pl-0">
						<div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2">
							<div class="relative flex items-start">
								<div class="ml-3 text-md sm:text-lg leading-6">
									<p class="font-normal text-gray-700">&bull; Alzheimer's Disease</p>
									<p class="mt-2 font-normal text-gray-700">&bull; ALS (Amyotrophic Lateral Sclerosis)</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Cystic Fibrosis</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Cystic Lung Disease</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Dementia</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Hepatitis B/C/D</p>
									<p class="mt-2 font-normal text-gray-700">&bull; HIV / AIDS</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Hydrocephalus</p>
								</div>
							</div>
							<div class="relative flex items-start">
								<div class="ml-3 text-md sm:text-lg leading-6">
									<p class="font-normal text-gray-700">&bull; MS (Multiple Sclerosis)</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Parkinson's Disease</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Paraplegia</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Quadriplegia</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Schizophrenia</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Suicide Attempt</p>
									<p class="mt-2 font-normal text-gray-700">&bull; Silicosis</p>
									<p class="mt-2 font-normal text-gray-700">&bull; STD/STIs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

						<?php

							foreach ($prescribed_meds as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

								if($_SESSION['prescribed_meds'] == $value['value']){
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="prescribed_meds" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								} else {
									echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="prescribed_meds" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
								}
							
							}

						?>

						<input type="hidden" id="prescribed_meds" name="prescribed_meds" value="<?php if ($_SESSION['prescribed_meds']) echo $_SESSION['prescribed_meds']; ?>">

					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Again, this will help ensure comprehensive coverage for various conditions and guarantee that your insurance plan aligns perfectly with your health needs.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 14-->

			<!--start step 15-->
			<div id="Step15" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="15">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your zip code?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>

					<div class="pt-6 md:pt-8 flex items-center justify-center sm:gap-6 py-3 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-lg">

						<div class="h-full">
							<div class="mt-1">
								<input type="tel" name="zip" id="zip" class="peer income-input block w-full px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg md:text-2xl placeholder-shown:not-empty" placeholder="Enter Zip" minlength="5" maxlength="5" onkeyup="reformatText(this)" value="<?php if (isset($_SESSION['zip']) && $_SESSION['zip'] !== '') echo $_SESSION['zip']; ?>" required>
								
							</div>
						</div>

					</div>

					<div class="custom-error-container transition ease-in-out duration-300 text-sm text-center"></div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Lets narrow down your coverage area and find the perfect plan for you!</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 15-->

			<!--start step 16-->
			<div id="Step16" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="16">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your name?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-4 md:py-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm">

						<div class="relative w-full py-2">
							
							<label for="first_name" class="block pl-0.5 text-sm font-medium text-gray-900 hidden"> First Name </label>
							
							<input type="text" name="first_name" id="first_name" class="text-field-letters block w-full mt-1 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="First Name" value="<?php if ($_SESSION['first_name']) echo $_SESSION['first_name']; ?>" required>
							
							<div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
							
						</div>
						
						<div class="relative w-full py-2">
							
							<label for="last_name" class="block pl-0.5 text-sm font-medium text-gray-900 hidden"> Last Name </label>
							
							<input type="text" name="last_name" id="last_name" class="text-field-letters block w-full mt-1 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Last Name" value="<?php if ($_SESSION['last_name']) echo $_SESSION['last_name']; ?>" required>
							
							<div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
							
						</div>

					</div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Please enter the name you want the plan to be assocaited with.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 16-->

			<!--start step 17-->
			<div id="Step17" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="17">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your email?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="pt-4 md:pt-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm">

						<div class="relative w-full py-2">
							
							<label for="email" class="block pl-0.5 text-sm font-medium text-gray-900 hidden"> Email </label>
							
							<input type="email" name="email" id="email" class="peer block w-full mt-1 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Email" value="<?php if ($_SESSION['email']) echo $_SESSION['email']; ?>" required>
														
						</div>

					</div>

					<div class="custom-error-container transition ease-in-out duration-300 text-sm text-center"></div>

					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Don't worry, we respect your privacy and won't send you unwanted e-mail.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
				
				</div>

			</div>
			<!--end step 17-->

			<!--start step 18-->
			<div id="Step18" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="18">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"><span class="first-name-text">
						<?php echo $_SESSION['first_name'] ? $_SESSION['first_name'] : 'Congratulations' ?></span>, your results are ready. What is your phone number?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="pt-4 md:pt-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm">

						<div class="relative w-full py-2">
							
							<label for="phone" class="block pl-0.5 text-sm font-medium text-gray-900 hidden"> Phone Number </label>
							
							<input type="tel" name="phone" id="phone" class="peer block w-full mt-1 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Phone" value="<?php if ($_SESSION['phone']) echo $_SESSION['phone']; ?>" required>

							

							<div class="custom-error text-rose-500 text-md text-center pt-2 transition ease-in-out duration-300 hidden">This field is required.</div>
														
						</div>

					</div>

					<div class="custom-error-container mt-0 transition ease-in-out duration-300 text-sm text-center hidden"></div>

					<div id="terms" class="mt-2 text-sm sm:text-md font-light leading-5 ease-in-out duration-300 mx-auto max-w-sm text-gray-500 relative">
						<input name="termsConsent" type="checkbox" class="mt-1 mr-3 h-5 w-5 rounded border-gray-300 text-blue-500 focus:ring-blue-500 absolute top-0.5 left-0" required>
						<div class="custom-error text-rose-500 absolute top-8 left-0.5 transition ease-in-out duration-300 hidden">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
								<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
							</svg>
						</div>
						<p class="pl-8">By checking this box I agree to the <a class="iframe" href="/footer/terms-and-conditions.php"><span class="underline underline-offset-2 text-custom-blue">Terms of Use</span></a> and <a class="iframe" href="/footer/privacy-policy.php"><span class="underline underline-offset-2 text-custom-blue">Privacy Policies</span></a>.
						<div class="custom-error pl-8 text-rose-500 text-md text-left pt-1 transition ease-in-out duration-300 hidden">You must agree to continue.</div>
					</div>
					
					<div id="tcpa" class="mt-3 text-sm sm:text-md font-light leading-5 ease-in-out duration-300 mx-auto max-w-sm text-gray-500 relative">
						<input name="tcpaConsent" type="checkbox" class="mt-1 mr-3 h-5 w-5 rounded border-gray-300 text-blue-500 focus:ring-blue-500 absolute top-0.5 left-0" required>
						<div class="custom-error text-rose-500 absolute top-8 left-0.5 transition ease-in-out duration-300 hidden">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
								<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
							</svg>
						</div>
						<p class="pl-8">By checking this box and clicking "View My Results" below, I consent to receive text messages and calls via an automatic telephone dialing system and an artificial or prerecorded voice to the phone number I entered above from usaliferates.com and <a class="iframe" href="/footer/everquote-partners.php"><span class="underline underline-offset-2 text-custom-blue">EverQuote Partners</span></a>, as well as from insurance related providers and partners, for related products or service offers even if I am on a national, state, or entity-specific Do-Not-Call list. I understand that consent is not required to receive a quotation or make a purchase. Message and data rates may apply. For more information, please review our <a class="iframe" href="/footer/tcpa.php"><span class="underline underline-offset-2 text-custom-blue">TCPA Disclosure</span></a>.</p>
						<div class="custom-error pl-8 text-rose-500 text-md text-left pt-1 transition ease-in-out duration-300 hidden">You must agree to continue.</div>
					</div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="submit" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
							View My Results
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-2 sm:pt-4">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
							</div>
							<div class="ml-3 agent-chat">
								<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
									<p class="text-sm sm:text-md text-gray-600">Join the hundreds of american families we have helped this month.</p>
								</div>
								<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
							</div>
						</div>
					</div>
					<div class="mt-8 flex items-center justify-center">
						<img class="h-16 w-auto" src="/assets/images/bbb-badge.png">
					</div>
				
				</div>

			</div>
			<!--end step 18-->

		</div>	
		</div>
				
	</main>
	
</div>	

<?php
include_once(__DIR__.'/../components/footer.php');
?>