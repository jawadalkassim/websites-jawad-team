<div class="pt-8 sm:pt-16 pb-8">

    <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Select your vehicle model?</h2>
    <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
    
    <div class="vehicle-2-model-list rebind-container py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

        <?php

        if($_SESSION['vehicleYear2'] && $_SESSION['vehicleMake2']){

            foreach($data_array[$_SESSION['vehicleYear2']][$_SESSION['vehicleMake2']] as $key => $value){

                if($_SESSION['vehicleMake'] == $key){
                    echo '<button type="button" class="flex items-center justify-center bg-custom-dark-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-xl md:text-2xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="vehicleModel2" data-value="'.$key.'" data-action="next-step">'.$key.'</button>';
                } else {
                    echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-xl md:text-2xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="vehicleModel2" data-value="'.$key.'" data-action="next-step">'.$key.'</button>';
                }

            }

        }

        ?>

    </div>

    <input type="hidden" id="vehicleModel2" name="vehicleModel2" value="<?php if ($_SESSION['vehicleModel2']) echo $_SESSION['vehicleModel2']; ?>">

    <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
        <div class="flex items-start w-full">
            <div class="flex-shrink-0">
                <img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
            </div>
            <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                    <p class="text-sm sm:text-md text-gray-600">Tell us what car you drive & we'll look for the best rates.</p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
            </div>
        </div>
    </div>

</div>