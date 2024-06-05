<?php
include_once('./resources/form-options.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Do Not Sell My Personal Information</title>
<meta name="description" content="Do Not Sell My Personal Information"/>
<meta name="keywords" content="">
<link href="./assets/css/style.css" rel="stylesheet" media="all" />	
<style>
select {
	appearance: none;
	background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
	background-repeat: no-repeat;
	background-position: right 1rem center;
	background-size: 1em;
}
label.error {
    color: red;
    font-size: 0.8em;
}
</style>	
</head>

<body>

<form id="OptOut" name="OptOut" class="bg-transparent">

  <div class="max-w-4xl mx-auto text-gray-900 py-8 px-6">

  <div class="">

  	<h1 class="text-2xl font-bold text-center">Do Not Sell My Personal Information</h1>

	<p class="mt-4 text-md font-normal">We respect your privacy. If you would like to opt-out of the sale of your personal information or exercise another privacy right, please fill out the form below and tell us more about your privacy request:</p>
    
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">

        <div class="sm:col-span-3">
          <label for="firstName" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
          <div class="mt-1">
            <input type="text" name="firstName" id="firstName" class="text-field block w-full mt-0.5 px-4 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="lastName" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
          <div class="mt-1">
            <input type="text" name="lastName" id="lastName" class="text-field block w-full mt-0.5 px-4 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
          </div>
        </div>

        <div class="col-span-full">
          <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
          <div class="mt-1">
            <input type="text" name="address" id="address" class="text-field block w-full mt-0.5 px-4 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
          </div>
        </div>

        <div class="sm:col-span-2 sm:col-start-1">
          <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
          <div class="mt-1">
            <input type="text" name="city" id="city" class="text-field block w-full mt-0.5 px-4 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State</label>
          <div class="mt-1">
			<select name="state" id="state" class="block w-full mt-0.5 pl-4 pr-10 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg" required>
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
		  </div>
        </div>

        <div class="sm:col-span-2">
          <label for="zip" class="block text-sm font-medium leading-6 text-gray-900">Zip Code</label>
          <div class="mt-1">
            <input type="tel" name="zip" id="zip" class="peer block w-full mt-0.5 px-4 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" minlength="5" maxlength="5" pattern="[0-9]*" required>
          </div>
        </div>

		<div class="sm:col-span-3">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
          <div class="mt-1">
            <input type="email" name="email" id="email" class="text-field block w-full mt-0.5 px-4 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
          <div class="mt-1">
            <input type="tel" name="phone" id="phone" class="text-field block w-full mt-0.5 px-4 py-2.5 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
          </div>
        </div>

      </div>
	  
    </div>

  </div>

  <p class="mt-4 text-md font-normal">You can learn more about our collection, use and disclosure of personal information and your privacy rights in our <a href="/footer/privacy-policy.php">Privacy Policy</a>.</p>

  <div class="py-8 flex items-center justify-end gap-x-6">
    <button type="submit" class="w-full rounded-md bg-green-600 px-6 py-3.5 text-lg font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Submit</button>
  </div>

  </div>

</form>

<div id="Confirmation" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display:none">
  
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
        <div class="py-6">
          <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100">
            <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
          </div>
          <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Thank You</h3>
            <div class="mt-2">
              <p class="text-md text-gray-500">We have successfully received your request..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
<script src="./assets/js/jquery.mask.min.js"></script>
<script>

$(document).ready(function(){
	
	$('#phone').mask('(000) 000-0000');

});

$("#OptOut").submit(function(event) {

	event.preventDefault();
	
	var f = document.forms.OptOut;

	if(validate()){

		var values = $(this).serialize();
		
		$.ajax({
			url: "./resources/process.php?method=OptOut",
			type: "post",
			data: values,
			dataType: "json",
			success: function(data) {
				if(data.success){
					//alert('complete');
					$('#Confirmation').fadeIn(500);

				} else {
					alert('error');
				}
			},
			error:function(data){
				alert('error');
			}
		});
		
	}
	
});	

function validate() {
	
	var $inputs = $('#OptOut').find('input[type="text"],input[type="tel"],input[type="email"],select'),
        validationCount = 0;
    if ($inputs.length) {
        $inputs.each(function () {
            if (validator.element($(this))) {
                $el = $(this);
                key = $el.attr('name');
                value = $el.val();
                ++validationCount;
            }
        });
    }
    if (validationCount == $inputs.length)
        return true;
    else
        return false;
}

var validator = $("#OptOut").validate({
    debug: true,
    // other rules & options,
    highlight: function (element, errorClass, validClass) {
        $(element).parent().addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).parent().removeClass(errorClass).addClass(validClass);
    },
    rules: {
        phone: {
            required: true,
            phoneUS: true
        },
        email: {
            required: true,
            email: true,
            regex: /^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i,
        },
    },
    onsubmit: false
});

$.validator.addMethod(
    "regex",
    function (value, element, regexp) {
        if (regexp && regexp.constructor != RegExp) {
            regexp = new RegExp(regexp);
        } else if (regexp.global) regexp.lastIndex = 0;
        return this.optional(element) || regexp.test(value);
    },
    "Please enter a valid email."
);

$.validator.addClassRules("text-field", {
    required: true,
    minlength: 2
});

</script>
</body>
</html>