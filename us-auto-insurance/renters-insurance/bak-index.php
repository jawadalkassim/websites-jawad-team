<?php
session_start();
foreach($_GET as $key =>
$value){ $_SESSION[$key] = $value; } $currentUrl =
"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $baseUrl =
strtok($currentUrl, '?'); $currentStep = parse_url($currentUrl,
PHP_URL_FRAGMENT); $current_file_path = __FILE__; $folder_name =
basename(dirname($current_file_path)); $insurance_type = 'renters';
include_once(__DIR__.'/../components/header.php');
include_once(__DIR__.'/../resources/renters-insurance/form-options.php'); ?>

<main id="MainContainer" class="bg-white pb-6 grow flex items-start">
  <div class="jquery-page pb-6 ease-in-out duration-300 mx-auto">
    <div class="jquery-page-container">

      <!--start step 1-->
      <div
        id="Step1"
        class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"
        data-jquery-page-name="1"
      >
        <div class="pt-8 sm:pt-16 pb-8">
          <h2
            class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
          >
            No Medical Exam Life Insurance Rates!
          </h2>
          <p
            class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300"
          >
            Take 2 minutes to start your free quote below and protect your
            family today.
          </p>

          <div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
            <button
              type="button"
              class="flex items-center justify-center bg-custom-blue py-4 px-4 rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue"
              data-action="next-step"
            >
              Start My Free Quote
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6 ml-2 md:w-8 md:h-8"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                  clip-rule="evenodd"
                />
              </svg>
            </button>
          </div>

          <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
            <div class="flex items-start w-full">
              <div class="flex-shrink-0">
                <img
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-4 border-gray-200"
                  src="/assets/images/agent.jpg"
                  alt="Sender Avatar"
                />
              </div>
              <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                  <p class="text-sm sm:text-md text-gray-600">
                    Life insurance policies start from just $<span
                      class="underline underline-offset-0"
                      >&emsp;</span
                    >.<span class="underline underline-offset-0"
                      >&emsp;&emsp;</span
                    >
                    a week
                  </p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
                  Sarah, <span class="current-time"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end step 1-->

      <!--start step 2-->
      <div
        id="Step2"
        class="page  jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"
        data-jquery-page-name="2"
      >
        <div class="pt-8 sm:pt-16 pb-8">
          <h2
            class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
          >
            Let’s get started! Select Type of Property
          </h2>

          <div
            class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4"
          >
            <?php

							foreach ($property_type as $key =>$value) {//$unsecured_debt_options / $unsecured_debt_amounts

              if($_SESSION['property_type'] == $value['value']){
               echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="property_type" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } 
               else {
                 echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="property_type" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } } 
               ?>

            <input
              type="hidden"
              id="property_type"
              name="property_type"
              value="<?php if ($_SESSION['property_type']) echo $_SESSION['property_type']; ?>"
            />
          </div>

          <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
            <div class="flex items-start w-full">
              <div class="flex-shrink-0">
                <img
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-full  border-4 border-gray-200"
                  src="/assets/images/agent.jpg"
                  alt="Sender Avatar"
                />
              </div>
              <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                  <p class="text-sm sm:text-md text-gray-600">
                    This will help us understand your financial situation and
                    help find the best plan for your money.
                  </p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
                  Sarah, <span class="current-time"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end step 2-->

      <!--start step 3-->
      <div
        id="Step3"
        class="page  jquery-page-disabled  funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"
        data-jquery-page-name="3"
         >
        <div class="pt-8 sm:pt-16 pb-8">
          <h2
            class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
          >
          Are You Currently Insured?
          </h2>

          <div
            class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-2 gap-4"
          >
            <?php

							foreach ($currently_insured as $key =>$value) {//$unsecured_debt_options / $unsecured_debt_amounts

              if($_SESSION['currently_insured'] == $value['value']){
               echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="currently_insured" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } 
               else {
                 echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="currently_insured" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } } 
               ?>

            <input
              type="hidden"
              id="currently_insured"
              name="currently_insured"
              value="<?php if ($_SESSION['currently_insured']) echo $_SESSION['currently_insured']; ?>"
            />
          </div>

          <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
            <div class="flex items-start w-full">
              <div class="flex-shrink-0">
                <img
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-full  border-4 border-gray-200"
                  src="/assets/images/agent.jpg"
                  alt="Sender Avatar"
                />
              </div>
              <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                  <p class="text-sm sm:text-md text-gray-600">
                    This will help us understand your financial situation and
                    help find the best plan for your money.
                  </p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
                  Sarah, <span class="current-time"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end step 3-->


      <!--start step 4-->
      <div
        id="Step4"
        class="page  jquery-page-disabled  funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"
        data-jquery-page-name="4"
         >
        <div class="pt-8 sm:pt-16 pb-8">
          <h2
            class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
          >
          What Company are You Insured With?
          </h2>

          <div
            class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4"
          >
            <?php

							foreach ($current_carrier as $key =>$value) {//$unsecured_debt_options / $unsecured_debt_amounts

              if($_SESSION['current_carrier'] == $value['value']){
               echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="current_carrier" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } 
               else {
                 echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="current_carrier" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } } 
               ?>

            <input
              type="hidden"
              id="current_carrier"
              name="current_carrier"
              value="<?php if ($_SESSION['current_carrier']) echo $_SESSION['current_carrier']; ?>"
            />
          </div>

          <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
            <div class="flex items-start w-full">
              <div class="flex-shrink-0">
                <img
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-full  border-4 border-gray-200"
                  src="/assets/images/agent.jpg"
                  alt="Sender Avatar"
                />
              </div>
              <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                  <p class="text-sm sm:text-md text-gray-600">
                    This will help us understand your financial situation and
                    help find the best plan for your money.
                  </p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
                  Sarah, <span class="current-time"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <!--end step 4-->

      <!--start step 5-->
      <div
        id="Step5"
        class="page  jquery-page-disabled  funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"
        data-jquery-page-name="5"
         >
         <div class="pt-8 sm:pt-16 pb-8">
  <h2
    class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
  >
  How Much Personal Property Do You Want to Insure?
  </h2>

  <div
    class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4"
  >
 
    <?php

    foreach ($personal_property as $key =>$value) {//$unsecured_debt_options / $unsecured_debt_amounts
    
    if($_SESSION['personal_property'] == $value['value']){
     echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="personal_property" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } 
     else {
      echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="personal_property" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } } 
     ?>

    <input
    type="hidden"
    id="personal_property"
    name="personal_property"
    value="<?php if ($_SESSION['personal_property']) echo $_SESSION['personal_property']; ?>"
    />

  </div>

  <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
    <div class="flex items-start w-full">
      <div class="flex-shrink-0">
        <img
          class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border-4 border-gray-200"
          src="/assets/images/agent.jpg"
          alt="Sender Avatar"
        />
      </div>
      <div class="ml-3 agent-chat">
        <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
          <p class="text-sm sm:text-md text-gray-600">
            This will help us understand your financial situation and help find
            the best plan for your money.
          </p>
        </div>
        <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
          Sarah, <span class="current-time"></span>
        </p>
      </div>
    </div>
  </div>
</div>
      </div>
      <!--end step 5-->


      <!--start step 6-->
      <div id="Step6" class="page jquery-page-disabled  funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="6">

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
      <!--end step 6-->


      <!--start step 7-->
      <div
        id="Step7"
        class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"
        data-jquery-page-name="7"
         >
        <div class="pt-8 sm:pt-16 pb-8">
          <h2
            class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
          >
          Gender
          </h2>

          <div
            class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-2 gap-4"
          >
            <?php

							foreach ($gender_options as $key =>$value) {//$unsecured_debt_options / $unsecured_debt_amounts

              if($_SESSION['gender_options'] == $value['value']){
               echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="gender_options" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } 
               else {
                 echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="gender_options" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } } 
               ?>

            <input
              type="hidden"
              id="gender_options"
              name="gender_options"
              value="<?php if ($_SESSION['gender_options']) echo $_SESSION['gender_options']; ?>"
            />
          </div>

          <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
            <div class="flex items-start w-full">
              <div class="flex-shrink-0">
                <img
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-full  border-4 border-gray-200"
                  src="/assets/images/agent.jpg"
                  alt="Sender Avatar"
                />
              </div>
              <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                  <p class="text-sm sm:text-md text-gray-600">
                    This will help us understand your financial situation and
                    help find the best plan for your money.
                  </p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
                  Sarah, <span class="current-time"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end step 7-->


      <!--start step 8-->
      <div
        id="Step8"
        class="page  jquery-page-disabled  funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"
        data-jquery-page-name="8"
         >
        <div class="pt-8 sm:pt-16 pb-8">
          <h2
            class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300"
          >
          Are You Married?
          </h2>

          <div
            class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-2 gap-4"
          >
            <?php

							foreach ($married as $key =>$value) {//$unsecured_debt_options / $unsecured_debt_amounts

              if($_SESSION['married'] == $value['value']){
               echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="married" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } 
               else {
                 echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-xl md:text-2xl border-b-4 border-b-custom-dark-blue" data-target="married" data-value="'.$value['value'].'" data-action="next-step"> '.$value['text'].'</button>'; } } 
               ?>

            <input
              type="hidden"
              id="married"
              name="married"
              value="<?php if ($_SESSION['married']) echo $_SESSION['married']; ?>"
            />
          </div>

          <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
            <div class="flex items-start w-full">
              <div class="flex-shrink-0">
                <img
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-full  border-4 border-gray-200"
                  src="/assets/images/agent.jpg"
                  alt="Sender Avatar"
                />
              </div>
              <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                  <p class="text-sm sm:text-md text-gray-600">
                    This will help us understand your financial situation and
                    help find the best plan for your money.
                  </p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">
                  Sarah, <span class="current-time"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end step 8-->


      <!--start step 9-->
      <div id="Step9" class="page  jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="9">

				<div class="pt-8 sm:pt-16 pb-8">

					<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your name?</h2>
					<p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
					
					<div class="py-4 md:py-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm">

						<div class="relative w-full py-2">
							
							<label for="first_name" class="block pl-0.5 text-sm font-medium text-gray-900 hidden"> First Name </label>
							
							<input type="text" name="first_name" id="first_name" class="text-field-letters block  mt-1 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="First Name" value="<?php if ($_SESSION['first_name']) echo $_SESSION['first_name']; ?>" required>
							
							<div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
							
						</div>
						
						<div class="relative w-full py-2">
							
							<label for="last_name" class="block pl-0.5 text-sm font-medium text-gray-900 hidden"> Last Name </label>
							
							<input type="text" name="last_name" id="last_name" class="text-field-letters block  mt-1 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Last Name" value="<?php if ($_SESSION['last_name']) echo $_SESSION['last_name']; ?>" required>
							
							<div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
							
						</div>

					</div>
					
					<div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
						<button type="button" class="flex items-center justify-center bg-custom-blue  py-4 px-4  rounded-md w-full text-white text-2xl md:text-3xl font-bold  border-b-4 border-b-custom-dark-blue" data-action="next-step">
							Continue
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
								<path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
							</svg>
						</button>
					</div>

					<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
						<div class="flex items-start w-full">
							<div class="flex-shrink-0">
								<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full  border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
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
      <!--end step 9-->


      <!--start step 10-->
      <div id="Step10" class="page  jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="10">
        <div class="pt-8 sm:pt-16 pb-8">

          <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your address?</h2>
          <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>

          <div class="py-4 md:py-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm">

          <div class="relative w-full text-sm leading-4 py-2">
                  
                  <label for="address" class="block pl-0.5 text-sm font-medium text-gray-900"> Street Address </label>
                  <input type="text" name="address" id="gm-autocomplete" class="peer block  mt-0.5 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Street Address" value="<?php if ($_SESSION['address']) echo $_SESSION['address']; ?>" required>
                  
                  <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required. PO Box addresses not allowed.</div>
                  
              </div>

              <div class="relative w-full text-sm leading-4 py-2">
                  
                  <label for="city" class="block pl-0.5 text-sm font-medium text-gray-900"> City </label>
                  <input type="text" name="city" id="city" class="peer block  mt-0.5 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="City" value="<?php if ($_SESSION['city']) echo $_SESSION['city']; ?>" required>

                  <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
                  
              </div>

              <div class="relative w-full text-sm leading-4 py-2">
                  
                  <label for="state" class="block pl-0.5 text-sm font-medium text-gray-900"> State </label>
                  <select name="state" id="state" class="peer block  mt-0.5 pl-4 pr-10 py-4 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg" required>
                      <option class="text-gray-500" value="" selected disabled hidden>Select State</option>
                      <?php
                          foreach ($state_list as $key => $value) {
                              if($key === $_SESSION['state']){
                                  echo '<option value="'.$key.'" selected>'.$value.'</option>';
                              } else {
                                  echo '<option value="'.$key.'">'.$value.'</option>';
                              }
                          }
                      ?>
                  </select>

                  <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
                  
              </div>
              
              <div class="relative w-full text-sm leading-4 py-2">
                  
                  <label for="zip" class="block pl-0.5 text-sm font-medium text-gray-900"> Zip Code </label>
                  <input type="text" name="zip" id="zip" class="peer block   mt-0.5 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-blue-500 focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Zip Code" minlength="5" maxlength="5" value="<?php if ($_SESSION['zip']) echo $_SESSION['zip']; ?>" required>

                  <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
                  
                  <input type="hidden" name="street_number">
                  <input type="hidden" name="street_name">
                  
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
                <p class="text-sm sm:text-md text-gray-600">Please enter the address you want the plan to be assocaited with.</p>
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

          <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">What is your email?</h2>
          <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
          
          <div class="pt-4 md:pt-8 px-8 text-sm leading-4 ease-in-out duration-300 mx-auto max-w-sm">

            <div class="relative w-full py-2">
              
              <label for="email" class="block pl-0.5 text-sm font-medium text-gray-900 hidden"> Email </label>
              
              <input type="email" name="email" id="email" class="peer block  mt-1 px-4 py-4 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Email" value="<?php if ($_SESSION['email']) echo $_SESSION['email']; ?>" required>
                            
            </div>

          </div>

          <div class="custom-error-container transition ease-in-out duration-300 text-sm text-center"></div>

          <div class="py-4 sm:py-8 mx-auto max-w-2xl text-center">
            <button type="button" class="flex items-center justify-center bg-custom-blue  py-4 px-4  rounded-md w-full text-white text-2xl md:text-3xl font-bold  border-b-4 border-b-custom-dark-blue" data-action="next-step">
              Continue
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>

          <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
            <div class="flex items-start w-full">
              <div class="flex-shrink-0">
                <img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full  border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
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
      <!--end step 11-->

      <!--start step 12-->
      <div id="Step12" class="page jquery-page-disabled funnel-step mx-auto max-w-4xl px-4 sm:px-6 lg:px-8" data-jquery-page-name="12">

<div class="pt-8 sm:pt-16 pb-8">

  <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">
    <span class="first-name-text">
      <?php echo $_SESSION['first_name'] ? $_SESSION['first_name'] : 'Congratulations' ?>
    </span>, your results are ready. What is your phone number?
  </h2>
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
    </p>
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
      <!--end step 12-->

    </div>
  </div>
</main>

<?php
include_once(__DIR__.'/../components/footer.php');
?>
