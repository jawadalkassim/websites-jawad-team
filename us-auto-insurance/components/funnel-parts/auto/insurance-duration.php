<div class="pt-8 sm:pt-16 pb-8">

    <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">How long have you been with <span class="current-insurance-company"><?php echo $_SESSION['currentAutoInsurance'] ? $_SESSION['currentAutoInsurance'] : 'your insurance company' ?></span>?</h2>
    <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
    
    <div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

        <?php

            foreach ($insurance_duration_options as $key => $value) {

                if($_SESSION['insuranceDuration'] == $value['value']){
                    echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="insuranceDuration" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
                } else {
                    echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="insuranceDuration" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
                }
            
            }

        ?>

        <input type="hidden" id="insuranceDuration" name="insuranceDuration" value="<?php if ($_SESSION['insuranceDuration']) echo $_SESSION['insuranceDuration']; ?>">

    </div>

    <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8 hidden">
        <div class="flex items-start w-full">
            <div class="flex-shrink-0">
                <img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
            </div>
            <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                    <p class="text-sm sm:text-md text-gray-600">....</p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
            </div>
        </div>
    </div>

</div>