<div class="pt-8 sm:pt-16 pb-8">

    <h2 class="text-gray-700 text-3xl sm:text-4xl leading-8 font-extrabold text-center transition ease-in-out duration-300">Have you been treated for or prescribed medicine for:</h2>
    <p class="mt-2 text-gray-700 text-md sm:text-lg leading-6 font-normal text-center transition ease-in-out duration-300 hidden"></p>

    <div class="max-w-2xl mx-auto py-6 pl-4 sm:pl-0">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2">
            <div class="relative flex items-start">
                <div class="ml-3 text-md sm:text-lg leading-6">
                    <p class="font-normal text-gray-700">&bull; Alzheimer's Disease</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; ALS (Amyotrophic Lateral Sclerosis)</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Cystic Fibrosis</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Cystic Lung Disease</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Dementia</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Hepatitis B/C/D</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; HIV / AIDS</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Hydrocephalus</p>
                </div>
            </div>
            <div class="relative flex items-start">
                <div class="ml-3 text-md sm:text-lg leading-6">
                    <p class="font-normal text-gray-700">&bull; MS (Multiple Sclerosis)</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Parkinson's Disease</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Paraplegia</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Quadriplegia</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Schizophrenia</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Suicide Attempt</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; Silicosis</p>
                    <p class="mt-2 font-normal text-gray-700">&bull; STD/STIs</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-8 px-0 mx-auto max-w-4xl text-center grid grid-cols-1 sm:grid-cols-2 gap-4">

        <?php

            foreach ($prescribed_meds as $key => $value) {//$unsecured_debt_options / $unsecured_debt_amounts

                if($_SESSION['prescribed_meds'] == $value['value']){
                    echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="prescribed_meds" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
                } else {
                    echo '<button type="button" class="flex items-center justify-center bg-custom-blue text-white py-4 px-4 font-bold rounded-md w-full text-white text-2xl md:text-3xl font-bold border-b border-b-4 border-b-custom-dark-blue" data-target="prescribed_meds" data-value="'.$value['value'].'" data-action="next-step">'.$value['text'].'</button>';
                }
            
            }

        ?>

        <input type="hidden" id="prescribed_meds" name="prescribed_meds" value="<?php if ($_SESSION['prescribed_meds']) echo $_SESSION['prescribed_meds']; ?>">

    </div>

    <div class="mx-auto max-w-lg font-sm pt-4 sm:pt-8">
        <div class="flex items-start w-full">
            <div class="flex-shrink-0">
                <img class="w-16 h-16 sm:w-20 sm:h-20 rounded-full border border-4 border-gray-200" src="/assets/images/agent.jpg" alt="Sender Avatar">
            </div>
            <div class="ml-3 agent-chat">
                <div class="bg-gray-100 p-3 rounded-lg shadow-xs w-fit">
                    <p class="text-sm sm:text-md text-gray-600">Again, this will help ensure comprehensive coverage for various conditions and guarantee that your insurance plan aligns perfectly with your health needs.</p>
                </div>
                <p class="ml-1 mt-1 text-gray-400 text-xs sm:text-sm">Sarah, <span class="current-time"></span></p>
            </div>
        </div>
    </div>

</div>