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