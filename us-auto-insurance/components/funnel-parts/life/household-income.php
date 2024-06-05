<div class="pt-8 sm:pt-16 pb-8">

    <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Is your household income greater than or equal to $40,000 per year?</h2>
    <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300">Your income will help us understand which products are best suited for your budget.</p>
    
    <div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

        <?php

            foreach ($household_income_over_40k as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

                if($_SESSION['household_income'] == $value['value']){
                    echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
                } else {
                    echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="household_income" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
                }
            
            }

        ?>

        <input type="hidden" id="household_income" name="household_income" value="<?php if ($_SESSION['household_income']) echo $_SESSION['household_income']; ?>">

    </div>

    <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
        <div class="flex items-start w-full">
            <div class="flex-shrink-0">
                <img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
            </div>
            <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                    <p class="text-sm sm:text-md text-gray-600">This will help us calculate your monthly price. You can always update this amount later.</p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
            </div>
        </div>
    </div>

</div>