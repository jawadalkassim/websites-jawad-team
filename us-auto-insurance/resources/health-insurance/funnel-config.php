<?php

$funnel_folder = 'health';

$funnel_config = array(
    'version' => '1.0',
    'steps' => array(
        array(
            'id' => 'start-my-quote',
            'file_name' => $funnel_folder.'/start-my-quote.php',
        ),
        array(
            'id' => 'dob',
            'file_name' => $funnel_folder.'/dob.php',
        ),
        array(
            'id' => 'house_hold_income',
            'file_name' => $funnel_folder.'/house_hold_income.php',
        ),
        array(
            'id' => 'health_conditions',
            'file_name' => $funnel_folder.'/do-you-have-health-conditions.php',
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