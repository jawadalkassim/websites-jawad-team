<?php

$funnel_folder = 'life';

$funnel_config = array(
    'version' => '1.0',
    'steps' => array(
        array(
            'id' => 'start-my-quote',
            'file_name' => $funnel_folder.'/start-my-quote.php',
        ),
        array(
            'id' => 'do-you-have-life-insurance',
            'file_name' => $funnel_folder.'/do-you-have-life-insurance.php',
        ),
        array(
            'id' => 'gender',
            'file_name' => $funnel_folder.'/gender.php',
        ),
        array(
            'id' => 'tobacco-use',
            'file_name' => $funnel_folder.'/tobacco-use.php',
        ),
        array(
            'id' => 'marital-status',
            'file_name' => $funnel_folder.'/marital-status.php',
        ),
        array(
            'id' => 'children',
            'file_name' => $funnel_folder.'/children.php',
        ),
        array(
            'id' => 'household-income',
            'file_name' => $funnel_folder.'/household-income.php',
        ),
        array(
            'id' => 'dob',
            'file_name' => $funnel_folder.'/dob.php',
        ),
        array(
            'id' => 'why-are-you-looking-for-life-insurance',
            'file_name' => $funnel_folder.'/why-are-you-looking-for-life-insurance.php',
        ),
        array(
            'id' => 'height',
            'file_name' => $funnel_folder.'/height.php',
        ),
        array(
            'id' => 'weight',
            'file_name' => $funnel_folder.'/weight.php',
        ),
        array(
            'id' => 'previous-treatments',
            'file_name' => $funnel_folder.'/previous-treatments.php',
        ),
        array(
            'id' => 'current-employment',
            'file_name' => $funnel_folder.'/current-employment.php',
        ),
        array(
            'id' => 'treatments-or-prescriptions',
            'file_name' => $funnel_folder.'/treatments-or-prescriptions.php',
        ),
        array(
            'id' => 'zip-code',
            'file_name' => $funnel_folder.'/zip-code.php',
        ),
        array(
            'id' => 'first-last-name',
            'file_name' => $funnel_folder.'/first-last-name.php',
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