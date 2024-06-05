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