<?php

$funnel_folder = 'medicare';

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
            'id' => 'gender',
            'file_name' => $funnel_folder.'/gender.php',
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