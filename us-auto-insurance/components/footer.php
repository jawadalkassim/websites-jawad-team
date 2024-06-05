<footer class="bg-white border-t border-t-1 border-gray-200 pb-4">
	<div class="grid grid-cols-2 gap-x-6 sm:gap-x-8 max-w-xs mt-6 px-12 mx-auto flex items-center">
		<div><img src="/assets/images/brands/norton-secured-logo.svg"></div>
		<div><img src="/assets/images/brands/mcafee-secure-logo.svg"></div>
	</div>
	<h2 id="footer-heading" class="sr-only">Footer</h2>
	<div class="mx-auto max-w-7xl px-6 pb-8 pt-8 lg:px-8">
		<div class="text-center text-gray-600 text-sm font-light">
			<p class="hidden">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

			<p class="mt-4">Copyright &copy; 2024 - speedyinsurancequotes.com</p>

			<p class="mt-4"><a class="iframe text-custom-blue" href="/footer/privacy-policy.php">Privacy Policy</a>&emsp;|&emsp;<a class="iframe text-custom-blue" href="/footer/terms-and-conditions.php">Terms of Use</a>&emsp;|&emsp;<a class="iframe text-custom-blue" href="/footer/do-not-sell-my-info/">Do Not Sell or Share My Personal Information</a></p>

		</div>
	</div>
</footer>

<?php
/*
<!--call button mobile-->
<div id="mobile_call_block" class="sticky left-0 bottom-0 w-full text-center backdrop-blur-sm bg-gray-200 border-t border-t-gray-300 sm:hidden transition ease-in-out duration-500">
	<div class="relative pt-1.5 pb-2.5 px-2.5">
		<button id="mobile_minimize_call_block" type="button" class="absolute right-2 -top-6 bg-gray-200 rounded-t-lg px-4 pt-2.5 pb-3 text-gray-500 border-t border-t-gray-300">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 transition ease-in-out duration-500">
				<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
			</svg>
		</button>
		<p class="flex flex-row items-center justify-center text-sm font-normal text-gray-800 pb-2.5 px-2 -ml-1.5">
			<span class="relative flex h-2.5 w-2.5 inline-flex mr-1">
				<span class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75 bg-green-500"></span>
				<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
			</span>
			Questions? Agents Are Available.
		</p>
		<a href="tel:18888888888" class="flex items-center justify-center w-full rounded-lg py-2 text-2xl font-normal bg-custom-blue text-white border-b border-b-2 border-b-custom-dark-blue">
			<svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 511.17 511.16" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 mr-2.5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M276.5,21.37c0-11.78,9.55-21.33,21.33-21.33,117.77.13,213.2,95.57,213.33,213.33,0,11.78-9.55,21.33-21.33,21.33s-21.33-9.55-21.33-21.33c-.11-94.21-76.45-170.56-170.67-170.67-11.78,0-21.33-9.55-21.33-21.33ZM297.83,128.03c47.13,0,85.33,38.21,85.33,85.33,0,11.78,9.55,21.33,21.33,21.33s21.33-9.55,21.33-21.33c-.07-70.66-57.34-127.93-128-128-11.78,0-21.33,9.55-21.33,21.33s9.55,21.33,21.33,21.33ZM491.82,357.13c25.74,25.81,25.74,67.59,0,93.4l-19.41,22.38C297.68,640.18-127.49,215.12,37.2,39.84l24.53-21.33c25.83-25.01,66.95-24.63,92.31.85.66.66,40.19,52.01,40.19,52.01,24.37,25.6,24.3,65.83-.15,91.35l-24.7,31.06c27.61,67.09,80.83,120.41,147.86,148.16l31.25-24.85c25.52-24.43,65.74-24.49,91.33-.13,0,0,51.33,39.51,51.99,40.17ZM462.46,388.15s-51.05-39.27-51.71-39.94c-9.15-9.07-23.9-9.07-33.05,0-.58.6-43.61,34.88-43.61,34.88-5.9,4.7-13.84,5.93-20.89,3.24-87-32.39-155.66-100.95-188.18-187.9-2.9-7.15-1.72-15.3,3.09-21.33,0,0,34.28-43.05,34.86-43.61,9.07-9.15,9.07-23.9,0-33.05-.66-.64-39.94-51.73-39.94-51.73-9.26-8.3-23.39-7.94-32.21.83l-24.53,21.33c-120.36,144.73,248.09,492.74,374.91,372.89l19.43-22.4c9.47-8.77,10.27-23.47,1.81-33.22h0Z"/>
			</svg>
			(888) 888-8888
		</a>
	</div>
</div>

<!--call button desktop-->
<div id="desktop_call_block" class="fixed right-2 bottom-2 rounded-xl text-center backdrop-blur-sm bg-gray-200/50 border border-gray-200 px-5 pt-2.5 pb-3.5 hidden w-fit sm:flex sm:flex-col">
	<p class="text-sm font-normal text-gray-800 pb-2.5 -ml-1.5">
		<span class="relative flex h-3 w-3 inline-flex mr-1">
			<span class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75 bg-green-500"></span>
			<span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
		</span>
		Questions? Agents Are Available.
	</p>
	<a href="#" class="flex items-center justify-center w-full rounded-xl py-2 pl-6 pr-8 text-2xl font-normal bg-custom-blue text-white border-b border-b-2 border-b-custom-dark-blue">
		<svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" viewBox="0 0 511.17 511.16" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 mr-2.5">
			<path stroke-linecap="round" stroke-linejoin="round" d="M276.5,21.37c0-11.78,9.55-21.33,21.33-21.33,117.77.13,213.2,95.57,213.33,213.33,0,11.78-9.55,21.33-21.33,21.33s-21.33-9.55-21.33-21.33c-.11-94.21-76.45-170.56-170.67-170.67-11.78,0-21.33-9.55-21.33-21.33ZM297.83,128.03c47.13,0,85.33,38.21,85.33,85.33,0,11.78,9.55,21.33,21.33,21.33s21.33-9.55,21.33-21.33c-.07-70.66-57.34-127.93-128-128-11.78,0-21.33,9.55-21.33,21.33s9.55,21.33,21.33,21.33ZM491.82,357.13c25.74,25.81,25.74,67.59,0,93.4l-19.41,22.38C297.68,640.18-127.49,215.12,37.2,39.84l24.53-21.33c25.83-25.01,66.95-24.63,92.31.85.66.66,40.19,52.01,40.19,52.01,24.37,25.6,24.3,65.83-.15,91.35l-24.7,31.06c27.61,67.09,80.83,120.41,147.86,148.16l31.25-24.85c25.52-24.43,65.74-24.49,91.33-.13,0,0,51.33,39.51,51.99,40.17ZM462.46,388.15s-51.05-39.27-51.71-39.94c-9.15-9.07-23.9-9.07-33.05,0-.58.6-43.61,34.88-43.61,34.88-5.9,4.7-13.84,5.93-20.89,3.24-87-32.39-155.66-100.95-188.18-187.9-2.9-7.15-1.72-15.3,3.09-21.33,0,0,34.28-43.05,34.86-43.61,9.07-9.15,9.07-23.9,0-33.05-.66-.64-39.94-51.73-39.94-51.73-9.26-8.3-23.39-7.94-32.21.83l-24.53,21.33c-120.36,144.73,248.09,492.74,374.91,372.89l19.43-22.4c9.47-8.77,10.27-23.47,1.81-33.22h0Z"/>
		</svg>
		(888) 888-8888
	</a>
</div>
*/
?>

<div id="loadingModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display:none">
	<div class="fixed inset-0 bg-gray-900 bg-opacity-90 transition-opacity"></div>
	<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
			<div class="relative transform overflow-hidden rounded-lg bg-white px-0 py-0 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm">
				<div class="py-12 px-4 sm:px-6">
					<div class="text-center">
						<h3 class="text-3xl sm:text-4xl leading-7 font-extrabold leading-6 text-gray-700" id="modal-title">Thank you!</h3>
						<p class="mt-1 sm:mt-2 text-xl sm:text-2xl leading-7 font-semibold leading-6 text-gray-700" id="modal-title">Your application has been submitted.</p>
					</div>
					<div class="mt-2">
						<img class="h-12 w-auto mx-auto" src="/assets/images/loading/loading.gif">
					</div>
					<div class="mt-2 sm:mt-3 text-center">
						<p class="text-md sm:text-lg text-gray-700">We appreciate your patience as we match you with a provider.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</form>

<?php //include_once($_SERVER['DOCUMENT_ROOT'].'/apply/components/cookie-consent.php'); ?>
	
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="/assets/js/fancybox.js"></script>
<script type="text/javascript" src="/assets/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.page.min.js"></script>
<!--<script type="text/javascript" src="/assets/js/tiny-date-picker.min.js"></script>-->
<script type="text/javascript" src="/assets/js/gmAutocomplete.js"></script>

<!--vertical specific scripts-->
<?php

switch ($folder_name) {
    case 'auto-insurance':
        echo '<script type="text/javascript" src="/assets/js/auto-insurance.js?v='.time().'"></script>';
        break;
    case 'home-insurance':
        echo '<script type="text/javascript" src="/assets/js/home-insurance.js?v='.time().'"></script>';
        break;
    case 'life-insurance':
        echo '<script type="text/javascript" src="/assets/js/life-insurance.js?v='.time().'"></script>';
        break;
    case 'health-insurance':
        echo '<script type="text/javascript" src="/assets/js/health-insurance.js?v='.time().'"></script>';
        break;
    case 'condo-insurance':
        echo '<script type="text/javascript" src="/assets/js/condo-insurance.js?v='.time().'"></script>';
        break;
    case 'renters-insurance':
        echo '<script type="text/javascript" src="/assets/js/renters-insurance.js?v='.time().'"></script>';
        break;
    case 'medicare-insurance':
        echo '<script type="text/javascript" src="/assets/js/medicare-insurance.js?v='.time().'"></script>';
        break;
    default:
        echo '<script type="text/javascript" src="/assets/js/main.js?v='.time().'"></script>';
        break;
}

?>

<script type="text/javascript" src="/assets/js/main.js?v=<?php echo time(); ?>"></script>
<script async="" src="https://get.geojs.io/v1/ip/geo.js"></script>
<script>
function geoip(json){
	//console.log(json);
	var state = json ? json.region : "the United States";
	const dynamicStateElements = document.querySelectorAll('.dynamic_state');
	if (dynamicStateElements.length > 0) {
		dynamicStateElements.forEach(element => {
			element.innerHTML = state;
		});
	}
}
geoip();
</script>	
</body>
</html>
