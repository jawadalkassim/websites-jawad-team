<?php

$funnel_folder = 'renters';

$funnel_config = array(
    'version' => '1.0',
    'steps' => array(
        array(
            'id' => 'start-my-quote',
            'file_name' => $funnel_folder.'/start-my-quote.php',
        ),
        array(
            'id' => 'property-type',
            'file_name' => $funnel_folder.'/property-type.php',
        ),
        array(
<<<<<<< HEAD
            'id' => 'currently-insured',
            'file_name' => $funnel_folder.'/currently-insured.php',
        ),

        array(
=======
>>>>>>> 965bb4900e483e385615fc2f8caa8b5ebdc4e699
            'id' => 'current_carrier',
            'file_name' => $funnel_folder.'/current_carrier.php',
            'requirements' => array(
                'inclusions' => array(
                    'currently_insured' => array(
                        'YES',
                    ),
                ),           
            ),
        ),
        array(
<<<<<<< HEAD
            'id' => 'personal-property',
        'file_name' => $funnel_folder.'/personal-property.php',
        ),

=======
            'id' => 'currently-insured',
            'file_name' => $funnel_folder.'/currently-insured.php',
        ),
        array(
            'id' => 'personal-property',
            'file_name' => $funnel_folder.'/personal-property.php',
        ),

        //  her 
        // array(
        //     'id' => 'current_carrier',
        //     'file_name' => $funnel_folder.'/current_carrier.php',
        // ),
        
       
>>>>>>> 965bb4900e483e385615fc2f8caa8b5ebdc4e699
        array(
            'id' => 'dob',
            'file_name' => $funnel_folder.'/dob.php',
        ),
        array(
            'id' => 'gender',
            'file_name' => $funnel_folder.'/gender.php',
        ),
        array(
            'id' => 'married',
            'file_name' => $funnel_folder.'/married.php',
        ),
        array(
            'id' => 'first-last-name',
            'file_name' => $funnel_folder.'/first-last-name.php',
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