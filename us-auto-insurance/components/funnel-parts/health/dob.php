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

	<div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8 hidden">
		<div class="flex items-start w-full">
			<div class="flex-shrink-0">
				<img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
			</div>
			<div class="ml-3 agent-chat">
				<div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
					<p class="text-sm sm:text-md text-gray-600">Rates can go down as you get older.</p>
				</div>
				<p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
			</div>
		</div>
	</div>

</div>