<?php

$json_url = $_SERVER['DOCUMENT_ROOT'].'/resources/vehicle-data.json';
$json_data = file_get_contents($json_url);
$data_array = json_decode($json_data, true);
$vehicle_year_array = array();

foreach($data_array as $key => $value){
    $vehicle_year_array[] = $key;
}

$reverse_year_array = array_reverse($vehicle_year_array);

?>

<div class="pt-8 sm:pt-16 pb-8">

    <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Select your vehicle year?</h2>
    <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>
    
    <div class="vehicle-1-year-list py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-4 sm:grid-cols-8 md:grid-col-8 gap-4">

        <?php

            $vehicle_year_count = 0;

            foreach($reverse_year_array as $key => $value){

                $vehicle_year_count++;

                if($vehicle_year_count <= 40){

                    if($_SESSION['vehicleYear2'] == $value){
                        echo '<button type="button" class="flex items-center justify-center bg-custom-dark-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-xl md:text-2xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="vehicleYear2" data-value="'.$value.'" data-action="next-step">'.$value.'</button>';
                    } else {
                        echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-xl md:text-2xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="vehicleYear2" data-value="'.$value.'" data-action="next-step">'.$value.'</button>';
                    }

                }
            
            }

        ?>

        <input type="hidden" id="vehicleYear2" name="vehicleYear2" value="<?php if ($_SESSION['vehicleYear2']) echo $_SESSION['vehicleYear2']; ?>">

    </div>

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