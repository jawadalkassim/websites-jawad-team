<div class="pt-8 sm:pt-16 pb-8">

    <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Select your vehicle?</h2>
    <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>

    <div class="py-4 md:py-8 px-8">

        <div class="text-sm leading-4 pb-2 mx-auto max-w-sm ease-in-out duration-300">

            <label for="vehicleYear1" class="block pl-0.5 text-sm font-medium text-gray-700"> Year </label>
            <select name="vehicleYear1" id="vehicleYear1" class="peer block w-full mt-0.5 pl-4 pr-10 py-3 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
                <option class="text-gray-500" value="" selected disabled hidden>-- Select Year --</option>
                
                <?php

                    $json_url = __DIR__.'/../../resources/vehicle-data.json';
                    $json_data = file_get_contents($json_url);
                    $data_array = json_decode($json_data, true);
                    $vehicle_year_array = array();
                    //
                    $vehicle_make_array = array();
                    $vehicle_model_array = array();
                    $vehicle_trim_array = array();
                    //

                    foreach($data_array as $key => $value){
                        $vehicle_year_array[] = $key;
                    }

                    $reverse_year_array = array_reverse($vehicle_year_array);

                    foreach($reverse_year_array as $key => $value){
                        
                        if($value == $_SESSION['vehicleYear1']){

                            echo '<option value="'.$value.'" selected>'.$value.'</option>';

                            foreach($data_array[$_SESSION['vehicleYear1']] as $key => $value){
                                    
                                $vehicle_make_array[] = $key;

                                if($key == $_SESSION['vehicleMake1']){

                                    foreach($data_array[$_SESSION['vehicleYear1']][$_SESSION['vehicleMake1']] as $key => $value){

                                        $vehicle_model_array[] = $key;

                                        if($key == $_SESSION['vehicleModel1']){

                                            foreach($data_array[$_SESSION['vehicleYear1']][$_SESSION['vehicleMake1']][$_SESSION['vehicleModel1']] as $key => $value){

                                                $vehicle_trim_array[] = $key;

                                            };

                                        }

                                    };

                                }

                            };

                        } else {

                            echo '<option value="'.$value.'">'.$value.'</option>';
                        
                        }
                    }

                ?>

            </select>

            <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>

        </div>
        
        <?php
            //echo count($vehicle_make_array);
            if( count($vehicle_make_array) < 1 || ( count($vehicle_make_array) == 1 && $vehicle_make_array[0] == 'NA' ) ){
        ?>
        
        <div class="text-sm leading-4 py-2 mx-auto max-w-sm ease-in-out duration-300 mx-auto max-w-sm hidden">
        
        <?php
            } else {
        ?>
        
        <div class="text-sm leading-4 py-2 mx-auto max-w-sm ease-in-out duration-300 mx-auto max-w-sm">
        
        <?php
            }
        ?>

            <label for="vehicleMake1" class="block pl-0.5 text-sm font-medium text-gray-700"> Vehicle Make </label>
            <select name="vehicleMake1" id="vehicleMake1" class="peer block w-full mt-0.5 pl-4 pr-10 py-3 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
                <option class="text-gray-500" value="" selected disabled hidden>-- Select Make --</option>

                <?php

                    foreach($vehicle_make_array as $key => $value){

                        if($value == $_SESSION['vehicleMake1']){

                            echo '<option value="'.$value.'" selected>'.$value.'</option>';

                        } else {

                            echo '<option value="'.$value.'">'.$value.'</option>';

                        }

                    };

                ?>

            </select>

            <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>

        </div>

        <?php
            //echo count($vehicle_model_array);
            if( count($vehicle_model_array) < 1 || ( count($vehicle_model_array) == 1 && $vehicle_model_array[0] == 'NA' ) ){
        ?>
        
        <div class="text-sm leading-4 py-2 mx-auto max-w-sm ease-in-out duration-300 mx-auto max-w-sm hidden">
        
        <?php
            } else {
        ?>
        
        <div class="text-sm leading-4 py-2 mx-auto max-w-sm ease-in-out duration-300 mx-auto max-w-sm">
        
        <?php
            }
        ?>
        
            <label for="vehicleModel1" class="block pl-0.5 text-sm font-medium text-gray-700"> Vehicle Model </label>
            <select name="vehicleModel1" id="vehicleModel1" class="peer block w-full mt-0.5 pl-4 pr-10 py-3 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
                <option class="text-gray-500" value="" selected disabled hidden>-- Select Model --</option>

                <?php
                
                    foreach($vehicle_model_array as $key => $value){

                        if($value == $_SESSION['vehicleModel1']){

                            echo '<option value="'.$value.'" selected>'.$value.'</option>';

                        } else {

                            echo '<option value="'.$value.'">'.$value.'</option>';

                        }

                    };

                ?>
            </select>

            <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>

        </div>

        <?php
            //echo count($vehicle_trim_array);
            if( count($vehicle_trim_array) < 1 || ( count($vehicle_trim_array) == 1 && $vehicle_trim_array[0] == 'NA' ) ){
        ?>
        
        <div class="text-sm leading-4 py-2 mx-auto max-w-sm ease-in-out duration-300 mx-auto max-w-sm hidden">
        
        <?php
            } else {
        ?>
        
        <div class="text-sm leading-4 py-2 mx-auto max-w-sm ease-in-out duration-300 mx-auto max-w-sm">
        
        <?php
            }
        ?>

            <label for="vehicleTrim1" class="block pl-0.5 text-sm font-medium text-gray-700"> Vehicle Trim </label>
            <select name="vehicleTrim1" id="vehicleTrim1" class="peer block w-full mt-0.5 pl-4 pr-10 py-3 bg-white border border-gray-400 rounded-md shadow-sm focus:border-sky-400 focus:z-10 ring-0 outline-0 w-full text-lg placeholder-shown:not-empty" required>
                <option class="text-gray-500" value="" selected disabled hidden>-- Select Trim --</option>

                <?php
                
                    foreach($vehicle_trim_array as $key => $value){

                        if($value == $_SESSION['vehicleTrim1']){

                            echo '<option value="'.$value.'" selected>'.$value.'</option>';

                        } else {

                            echo '<option value="'.$value.'">'.$value.'</option>';

                        }

                    };

                ?>
            </select>

            <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>

        </div>

        <div class="text-sm leading-4 py-2 mx-auto max-w-sm ease-in-out duration-300 mx-auto max-w-sm">
            <label for="vehicleMileage1" class="block pl-0.5 text-sm font-medium text-gray-700"> Mileage </label>
            <input type="tel" name="vehicleMileage1" id="vehicleMileage1" class="mt-0.5 block w-full p-2.5 border border-gray-400 rounded-md shadow-sm focus:border-custom-blue focus:z-10 w-full text-lg placeholder-shown:not-empty" placeholder="Mileage" onkeyup="reformatText(this)" value="<?php if ($_SESSION['vehicleMileage1']) echo $_SESSION['vehicleMileage1']; ?>" maxlength="7" required>
            <div class="custom-error text-rose-500 text-xs text-left pt-1 transition ease-in-out duration-300 hidden">This field is required.</div>
        </div>
        
    </div>

    <button type="button" class="dob-next-button flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-action="next-step">
        Continue
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2 md:w-8 md:h-8">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
        </svg>
    </button>

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