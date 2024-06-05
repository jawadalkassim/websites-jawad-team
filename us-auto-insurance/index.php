
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="/assets/css/jquery.fancybox.css" rel="stylesheet">
<link href="./assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" media="all">
<style>
label.error{
  color:#ffffff; 
}
</style>
</head>

<body class="bg-white text-gray-700">

<form id="main">

<main class="min-h-screen">

  <header>
  
    <div class="max-w-5xl mx-auto text-center sm:text-left grid grid-cols-1 sm:grid-cols-2 flex items-center justify-center sm:justify-start py-4">
      <div class="text-center">
        <img class="h-10 w-auto sm:h-12 mx-auto sm:ml-0" src="./assets/images/speedy-logo.png">
      </div>
      <div class="text-center sm:text-right text-xl sm:text-2xl font-bold text-gray-700 hidden sm:flex flex-col justify-end">
        <span class="text-sm sm:text-lg font-normal text-custom-dark-blue">Call an agent now:</span>
        <span class="-mt-2">(888) 123-1234</span>
      </div>
    </div>
  
  </header>
  
  <div class="px-3 sm:px-6 sm:px-0 bg-blue-400 sm:bg-[url('../../assets/images/suburban-1-street.jpg')] bg-auto sm:bg-cover bg-top bg-no-repeat h-full sm:h-96 hidden sm:block">
    <div class="max-w-5xl mx-auto text-center sm:text-left flex items-center">
      
      <h2 class="w-full text-center mt-3 sm:mt-12 text-gray-900 drop-shadow-md font-bold text-2xl sm:text-4xl"><span class="px-4 py-1.5 rounded-t-full bg-gradient-to-r from-white/0 via-white/70 to-white/0">Find Affordable Insurance Rates In <span class="state-text"></span>!</span</h2>

    </div>
  </div>

  <div class="pt-5 pb-8 sm:pt-8 sm:pb-8 px-3 sm:px-6 sm:px-0 bg-gradient-to-br from-cyan-400 to-blue-700">

    <h2 class="text-center text-white pb-5 font-bold text-2xl sm:text-4xl block sm:hidden">Find Affordable Insurance Rates In <span class="state-text"></span></h2>

    <div class="max-w-4xl mx-auto text-center sm:text-left grid grid-cols-1 sm:grid-cols-3 gap-x-4 gap-y-4">
      <span>
        <select id="insurance_type" name="insurance_type" class="block w-full rounded-md border-0 pl-5 py-3 text-gray-700 font-semibold shadow-sm text-xl">
          <option value="auto-insurance">Auto Insurance</option>
          <!--<option>Home Insurance</option>-->
          <option value="life-insurance">Life Insurance</option>
          <!--<option>Health Insurance</option>
          <option>Condo Insurance</option>
          <option>Renters Insurance</option>
          <option>Medicare Insurance</option>-->
        </select>
      </span>
      <span>
        <input type="tel" name="zip" id="zip" class="block w-full rounded-md border-0 pl-5 py-3 text-gray-700 font-semibold shadow-sm text-xl" placeholder="Zip Code" minlength="5" maxlength="5" required>
      </span> 
      <span>
        <button type="submit" class="-mt-0.5 bg-rose-600 shadow-md shadow-blue-900/50 sm:shadow-blue-900/0 hover:shadow-blue-900/50 shadow-lg text-white text-2xl font-extrabold rounded-lg px-5 py-3 w-full sm:w-fit transition ease-in-out duration-300" type="button">Get My Quotes</button>
      </span>
    </div>
  </div>


  <section id="LogoCloud">
		
    <div class="bg-white pt-6 sm:pt-8 pb-8 sm:pb-12">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-sm font-normal text-gray-600 capitalize">We partner with <span class="font-bold">hundreds of brands, including top brands</span></h2>
        <div class="mx-auto mt-4 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-2 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="./assets/images/logos/color/allstate-seeklogo.svg" alt="Transistor" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="./assets/images/logos/color/liberty-mutual.svg" alt="Reform" width="158" height="100">
          <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="./assets/images/logos/color/state-farm.svg" alt="Tuple" width="158" height="48">
          <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="./assets/images/logos/color/progressive.svg" alt="SavvyCal" width="158" height="48">
          <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="./assets/images/logos/color/travelers.svg" alt="Statamic" width="158" height="48">
        </div>
      </div>
    </div>
    
  </section>

  <div class="pt-4 pb-8 sm:pt-8 sm:pb-12 px-4 sm:px-0 bg-gray-100">

    <div class="max-w-5xl mx-auto text-center flex items-center">
      <div class="p-4 relative">
        <h2 class="mt-3 sm:mt-6 text-2xl sm:text-4xl capitalize font-light"><span class="font-extrabold bg-clip-text text-transparent bg-gradient-to-br from-cyan-400 to-blue-700">Save up to XX%</span> on your insurance policy</h2>
        <p class="mt-3 sm:mt-6 text-md sm:text-lg font-normal">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
      </div>
    </div>

    <div class="pt-2 sm:pt-8 max-w-5xl mx-auto text-center sm:text-left grid grid-cols-1 sm:grid-cols-3 gap-x-4 flex items-start">
      
      <div class="p-4 relative text-center">
        <span class="block size-48 mx-auto bg-gradient-to-br from-cyan-400 to-blue-700 relative">
          <span class="block absolute top-8 left-0 w-48 h-32 bg-gray-100"></span>
          <span class="block absolute top-2 left-2 w-44 h-44 bg-gray-100 flex flex-col items-center justify-center">
            <span class="bg-clip-text text-transparent bg-gradient-to-br from-cyan-400 to-blue-700 -mt-2 font-bold text-xs sm:text-sm capitalize px-4">SAVINGS</span>
            <h2 class="text-gray-900 mt-0 font-bold text-2xl sm:text-2xl capitalize px-4">Up To XX%</h2>
          </span>
        </span>
        <p class="mt-6 text-md sm:text-lg font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
      
      <div class="p-4 relative text-center">
        <span class="block size-48 mx-auto bg-gradient-to-br from-cyan-400 to-blue-700 relative">
          <span class="block absolute top-8 left-0 w-48 h-32 bg-gray-100"></span>
          <span class="block absolute top-8 left-0 w-48 h-32 bg-gray-100"></span>
          <span class="block absolute top-2 left-2 w-44 h-44 bg-gray-100 flex flex-col items-center justify-center">
            <span class="bg-clip-text text-transparent bg-gradient-to-br from-cyan-400 to-blue-700 -mt-2 font-bold text-xs sm:text-sm capitalize px-4">CUSTOMERS</span>
            <h2 class="text-gray-900 mt-0 font-bold text-2xl sm:text-2xl capitalize px-4">XX,XXX+</h2>
          </span>
        </span>
        <p class="mt-6 text-md sm:text-lg font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
      
      <div class="p-4 relative text-center">
        <span class="block size-48 mx-auto bg-gradient-to-br from-cyan-400 to-blue-700 relative">
          <span class="block absolute top-8 left-0 w-48 h-32 bg-gray-100"></span>
          <span class="block absolute top-8 left-0 w-48 h-32 bg-gray-100"></span>
          <span class="block absolute top-2 left-2 w-44 h-44 bg-gray-100 flex flex-col items-center justify-center">
            <span class="bg-clip-text text-transparent bg-gradient-to-br from-cyan-400 to-blue-700 -mt-2 font-bold text-xs sm:text-sm capitalize px-4">SUPPORT</span>
            <h2 class="text-gray-900 mt-0 font-bold text-2xl sm:text-2xl capitalize px-4">24/7/365</h2>
          </span>
        </span>
        <p class="mt-6 text-md sm:text-lg font-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
    
    </div>

  </div>
  <div class="pt-4 pb-8 sm:pt-8 sm:pb-12 px-4 sm:px-0 bg-white">

    <div class="pt-6 sm:pt-12 max-w-2xl mx-auto text-center flex-col items-center">
      <img class="mx-auto" src="./assets/images/auto-insurance.jpg">
      <div class="sm:p-4 relative">
        <h2 class="mt-3 font-bold text-2xl sm:text-4xl">The quickest way to find affordable auto insurance in <span class="state-text">US</span></h2>
        <div class="mt-8 sm:mt-12">
          <a href="/auto-insurance/" class="bg-rose-600 shadow-md shadow-rose-900/0 hover:shadow-rose-900/50 shadow-lg text-white text-3xl font-extrabold rounded-lg px-8 py-4 block w-full sm:w-fit mx-auto transition ease-in-out duration-300">Get My Quotes</a>
        </div>
      </div>
    </div>


  </div>


</main>

</form>

<footer class="bg-gradient-to-br from-cyan-400 to-blue-700 py-0 sm:py-4">
  <div class="mx-auto max-w-5xl overflow-hidden px-6 py-8 lg:px-8 text-sm sm:text-md leading-5 sm:leading-6">
      <p class="text-center text-custom-blue"><a href="/legal/privacy/" target="_blank" class="iframe text-blue-100">Privacy Policy</a>&ensp;|&ensp;<a href="/legal/terms" target="_blank" class="iframe text-blue-100">Terms &amp; Conditions</a>&ensp;|&ensp;<a href="/legal/terms" target="_blank" class="iframe text-blue-100">Do Not Sell My Data</a></p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="/assets/js/fancybox.js"></script>
<script async="" src="https://get.geojs.io/v1/ip/geo.js"></script>
<script>

function geoip(json){
	//console.log(json);
	var location = json ? json.region : "unknown";
  var elements = document.getElementsByClassName('state-text');
  for (var i = 0; i < elements.length; i++) {
      elements[i].innerHTML = location;
  }
}
geoip();

$(document).ready(function(){

  //fancybox
  $("a.iframe").fancybox({
		'width'				: '90%',
		'height'			: '90%',
        'autoScale'     	: true,
        'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'type'				: 'iframe'
	});

  $('#zip').on('keypress', function(event) {
        // Allow only numbers, backspace, and delete keys
        const keyCode = event.which ? event.which : event.keyCode;
        if ((keyCode < 48 || keyCode > 57) && (keyCode !== 8 && keyCode !== 46)) {
            event.preventDefault();
        }
    });

    $('#zip').on('input', function(event) {
        // Remove any non-numeric characters
        const input = $(this).val();
        $(this).val(input.replace(/[^0-9]/g, ''));
    });

});

function formValidate() {
    var $page = $('form#main'),
        $inputs = $page.find('input[type="text"],input[type="tel"],input[type="email"],input[type="password"],input[type="checkbox"],select'),
        validationCount = 0;
    if ($inputs.length) {
        $inputs.each(function () {
            if (validator.element($(this))) {
                $el = $(this);
                key = $el.attr('name');
                value = $el.val();
                ++validationCount;
            } else {
				//console.log(this);
			}
        });
    }
    if (validationCount == $inputs.length)
        return true;
    else
        return false;
}

var validator = $('form#main').validate({
  debug: true,
  rules: {
    zip: {
			fiveDigits: true
		},
  },
	messages: {
		zip: {
			required: "Please enter your 5 digit zip code.",
		},
	},
    onsubmit: false
});

$.validator.addMethod(
	"fiveDigits", 
	function (value, element) {
		return /^[0-9]{5}$/.test(value);
  	}, 
	"Please enter a 5-digit zip."
);

$('form#main').submit(function(event) {
	
	event.preventDefault();
	
	if(formValidate()){
		
    window.location= '/' + $('#insurance_type').val() + '/?zip=' + $('#zip').val();
		
	}
	
});

</script>

</body>
</html>