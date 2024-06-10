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
