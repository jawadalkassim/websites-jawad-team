<?php

$funnel_folder = 'auto';

$funnel_config = array(
    'version' => '1.0',
    'steps' => array(
        array(
            'id' => 'start-my-quote',
            'file_name' => $funnel_folder.'/start-my-quote.php',
        ),
        array(
            'id' => 'vehicle-1-make',
            'file_name' => $funnel_folder.'/vehicle-year-1.php',
        ),
        array(
            'id' => 'vehicle-1-make',
            'file_name' => $funnel_folder.'/vehicle-make-1.php',
        ),
        array(
            'id' => 'vehicle-1-model',
            'file_name' => $funnel_folder.'/vehicle-model-1.php',
        ),
        /*array(
            'id' => 'vehicle-1',
            'file_name' => $funnel_folder.'/vehicle-information-1.php',
        ),*/
        array(
            'id' => 'second-vehicle',
            'file_name' => $funnel_folder.'/second-vehicle.php',
        ),
        array(
            'id' => 'vehicle-2-make',
            'file_name' => $funnel_folder.'/vehicle-year-2.php',
            'requirements' => array(
                'inclusions' => array(
                    'secondVehicle' => array(
                        'Yes',
                    ),
                ),            
            ),
        ),
        array(
            'id' => 'vehicle-2-make',
            'file_name' => $funnel_folder.'/vehicle-make-2.php',
            'requirements' => array(
                'inclusions' => array(
                    'secondVehicle' => array(
                        'Yes',
                    ),
                ),            
            ),
        ),
        array(
            'id' => 'vehicle-2-model',
            'file_name' => $funnel_folder.'/vehicle-model-2.php',
            'requirements' => array(
                'inclusions' => array(
                    'secondVehicle' => array(
                        'Yes',
                    ),
                ),            
            ),
        ),
        /*array(
            'id' => 'vehicle-2',
            'file_name' => $funnel_folder.'/vehicle-information-2.php',
            'requirements' => array(
                'inclusions' => array(
                    'secondVehicle' => array(
                        'Yes',
                    ),
                ),            
            ),
        ),*/
        array(
            'id' => 'currently-insured',
            'file_name' => $funnel_folder.'/currently-insured.php',
        ),
        array(
            'id' => 'auto-insurance-companies',
            'file_name' => $funnel_folder.'/auto-insurance-companies.php',
            'requirements' => array(
                'inclusions' => array(
                    'autoInsurance' => array(
                        'Yes',
                    ),
                ),           
            ),
        ),
        array(
            'id' => 'insurance-duration',
            'file_name' => $funnel_folder.'/insurance-duration.php',
            'requirements' => array(
                'inclusions' => array(
                    'autoInsurance' => array(
                        'Yes',
                    ),
                ),
                'exclusions' => array(
                    'currentAutoInsurance' => array(
                        'Other',
                    ),
                ),      
            ),
        ),
        array(
            'id' => 'homeowner',
            'file_name' => $funnel_folder.'/homeowner.php',
        ),
        array(
            'id' => 'homeowner-insurance',
            'file_name' => $funnel_folder.'/homeowner-insurance.php',
            'requirements' => array(
                'inclusions' => array(
                    'ownHome' => array(
                        'Yes',
                    ),
                ),           
            ),
        ),
        array(
            'id' => 'dob',
            'file_name' => $funnel_folder.'/dob.php',
        ),
        array(
            'id' => 'gender',
            'file_name' => $funnel_folder.'/gender.php',
        ),
        array(
            'id' => 'marital-status',
            'file_name' => $funnel_folder.'/marital-status.php',
        ),
        array(
            'id' => 'vehicle-count',
            'file_name' => $funnel_folder.'/vehicle-count.php',
        ),
        array(
            'id' => 'recent-accidents',
            'file_name' => $funnel_folder.'/recent-accidents.php',
        ),
        array(
            'id' => 'dui',
            'file_name' => $funnel_folder.'/dui.php',
        ),
        array(
            'id' => 'first-last-name',
            'file_name' => $funnel_folder.'/first-last-name.php',
        ),
        array(
            'id' => 'military',
            'file_name' => $funnel_folder.'/military.php',
        ),
        array(
            'id' => 'address',
            'file_name' => $funnel_folder.'/address.php',
        ),
        array(
            'id' => 'email',
            'file_name' => $funnel_folder.'/email.php',
        ),
        array(
            'id' => 'phone',
            'file_name' => $funnel_folder.'/phone.php',
        ),
    ),
);

?>