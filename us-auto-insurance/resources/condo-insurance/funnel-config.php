<?php

$funnel_folder = 'condo';

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
            'id' => 'property-used',
            'file_name' => $funnel_folder.'/property-used.php',
        ),
        array(
            'id' => 'property-old',
            'file_name' => $funnel_folder.'/property-old.php',
        ),
        array(
            'id' => 'square-footage',
            'file_name' => $funnel_folder.'/square-footage.php',
        ),
        array(
            'id' => 'stories',
            'file_name' => $funnel_folder.'/stories.php',
        ),
        array(
            'id' => 'currently-insured',
            'file_name' => $funnel_folder.'/currently-insured.php',
        ),
        array(
            'id' => 'current_carrier',
            'file_name' => $funnel_folder.'/current_carrier.php',
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
            'id' => 'married',
            'file_name' => $funnel_folder.'/married.php',
        ),
        array(
            'id' => 'military',
            'file_name' => $funnel_folder.'/military.php',
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