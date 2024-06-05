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

include_once(__DIR__.'/../components/header.php');
include_once(__DIR__.'/../resources/form-options.php');



?>

	<main id="MainContainer" class="bg-white pb-6 grow flex-col items-start">
			
		<div id="" class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 pt-8 sm:pt-12">

			<div class="pt-6 sm:pt-8 pb-8 px-4 bg-gray-100 border border-1 border-gray-200 rounded-lg">

				<h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Thank You For Your Application.</h2>
				<p class="mt-3 text-gray-700 text-md sm:text-lg leading-6 font-semibold text-center underline underline-offset-2 transition ease-in-out duration-300">Your next step:</p>
				<div class="py-4">
					<img class="w-1/2 sm:w-1/3 mx-auto transition ease-in-out duration-300" src="/assets/images/credit-score-phone-1.png">
				</div>
				<p class="mt-3 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<div class="mt-5 flex items-center justify-center hidden">
					<a href="#" onclick="javascript:alert('TODO: Get Offer / Tracking Link');" class="bg-orange-500 px-8 py-3.5 text-2xl text-white rounded-lg">Get My Credit Score</a>
				</div>
				<p class="mt-8 text-gray-700 text-md sm:text-lg leading-6 font-semibold text-center transition ease-in-out duration-300">Ready to proceed? Call Now!</p>
				<p class="mt-1 text-center">
					<a href="tel:18888888888" class="text-3xl sm:text-4xl text-custom-blue hover:text-custom-dark-blue font-bold underline underline-offset-8 transition ease-in-out duration-300">(888) 888-8888</a>
				</p>
				<p class="mt-8 text-gray-500 text-xs sm:text-sm sm:leading-6 font-light text-center italic transition ease-in-out duration-300">* Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>

		</div>

		<div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 pt-8 sm:pt-12 pb-16 text-gray-700">

			<div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 flex items-start">

				<div>

					<div class="flex flex-row items-start">
						<div class="col-span-3">
							<div class="h-16 w-16 bg-blue-100/40 border border-1 border-custom-blue rounded-full flex items-center justify-center text-custom-blue">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
								</svg>
							</div>
						</div>
						<div class="col-span-5 pl-4 -mt-2">
							<p class="font-semibold text-md sm:text-lg">Wait For A Call</p>
							<p class="mt-1 sm:leading-5 text-sm sm:text-md text-sm sm:text-md">Be ready to take call - This representative will be calling with their best offer.</p>
						</div>
					</div>


					<div class="flex flex-row items-start mt-6 sm:mt-10">
						<div class="col-span-3">
							<div class="h-16 w-16 bg-blue-100/40 border border-1 border-custom-blue rounded-full flex items-center justify-center text-custom-blue">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
							</svg>

							</div>
						</div>
						<div class="col-span-5 pl-4 -mt-2">
							<p class="font-semibold text-md sm:text-lg">Solutions That Are Tailored To You</p>
							<p class="mt-1 sm:leading-5 text-sm sm:text-md">Please talk to this representative, the solutions may surprise you.</p>
						</div>
					</div>

				</div>

				<div>

					<div class="flex flex-row items-start mt-6 sm:mt-0">
						<div class="col-span-3">
							<div class="h-16 w-16 bg-blue-100/40 border border-1 border-custom-blue rounded-full flex items-center justify-center text-custom-blue">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
								</svg>
							</div>
						</div>
						<div class="col-span-5 pl-4 -mt-2">
							<p class="font-semibold text-md sm:text-lg">We Won't Waste Your Time</p>
							<p class="mt-1 sm:leading-5 text-sm sm:text-md">This representative is likely to help you based on your criteria.</p>
						</div>
					</div>


					<div class="flex flex-row items-start mt-6 sm:mt-10">
						<div class="col-span-3">
						<div class="h-16 w-16 bg-blue-100/40 border border-1 border-custom-blue rounded-full flex items-center justify-center text-custom-blue">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
							</svg>

							</div>
						</div>
						<div class="col-span-5 pl-4 -mt-2">
							<p class="font-semibold text-md sm:text-lg">We'll Handle The Work</p>
							<p class="mt-1 sm:leading-5 text-sm sm:text-md">Give the representative a couple of minutes, they'll help you save.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
				
	</main>
	
</div>	

<?php
include_once(__DIR__.'/../components/footer.php');
?>