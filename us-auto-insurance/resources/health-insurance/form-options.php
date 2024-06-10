<?php

include_once(__DIR__.'/../../../settings.php');


$months = array(
    '01' => 'January',
	'02' => 'February', 
	'03' => 'March',
	'04' => 'April',
    '05' => 'May', 
	'06' => 'June', 
	'07' => 'July', 
	'08' => 'August',
    '09' => 'September', 
	'10' => 'October', 
	'11' => 'November', 
	'12' => 'December',
);

$dob_options = array(
	'01' => array(
		'value' => '01',
		'text' => 'January',
		'abbreviated_text' => 'Jan',
		'days' => '31',
	),
	'02' => array(
		'value' => '02',
		'text' => 'February',
		'abbreviated_text' => 'Feb',
		'days' => '29',
	),
	'03' => array(
		'value' => '03',
		'text' => 'March',
		'abbreviated_text' => 'Mar',
		'days' => '31',
	),
	'04' => array(
		'value' => '04',
		'text' => 'April',
		'abbreviated_text' => 'Apr',
		'days' => '30',
	),
	'05' => array(
		'value' => '05',
		'text' => 'May',
		'abbreviated_text' => 'May',
		'days' => '31',
	),
	'06' => array(
		'value' => '06',
		'text' => 'June',
		'abbreviated_text' => 'Jun',
		'days' => '30',
	),
	'07' => array(
		'value' => '07',
		'text' => 'July',
		'abbreviated_text' => 'Jul',
		'days' => '31',
	),
	'08' => array(
		'value' => '08',
		'text' => 'August',
		'abbreviated_text' => 'Aug',
		'days' => '31',
	),
	'09' => array(
		'value' => '09',
		'text' => 'September',
		'abbreviated_text' => 'Sep',
		'days' => '30',
	),
	'10' => array(
		'value' => '10',
		'text' => 'October',
		'abbreviated_text' => 'Oct',
		'days' => '31',
	),
	'11' => array(
		'value' => '11',
		'text' => 'November',
		'abbreviated_text' => 'Nov',
		'days' => '30',
	),
	'12' => array(
		'value' => '12',
		'text' => 'December',
		'abbreviated_text' => 'Dec',
		'days' => '31',
	),
);
$state_list = array(
	'AL' => 'Alabama',
	'AK' => 'Alaska',
	'AZ' => 'Arizona',
	'AR' => 'Arkansas',
	'CA' => 'California',
	'CO' => 'Colorado',
	'CT' => 'Connecticut',
	'DE' => 'Delaware',
	'FL' => 'Florida',
	'GA' => 'Georgia',
	'HI' => 'Hawaii',
	'ID' => 'Idaho',
	'IL' => 'Illinois',
	'IN' => 'Indiana',
	'IA' => 'Iowa',
	'KS' => 'Kansas',
	'KY' => 'Kentucky',
	'LA' => 'Louisiana',
	'ME' => 'Maine',
	'MD' => 'Maryland',
	'MA' => 'Massachusetts',
	'MI' => 'Michigan',
	'MN' => 'Minnesota',
	'MS' => 'Mississippi',
	'MO' => 'Missouri',
	'MT' => 'Montana',
	'NE' => 'Nebraska',
	'NV' => 'Nevada',
	'NH' => 'New Hampshire',
	'NJ' => 'New Jersey',
	'NM' => 'New Mexico',
	'NY' => 'New York',
	'NC' => 'North Carolina',
	'ND' => 'North Dakota',
	'OH' => 'Ohio',
	'OK' => 'Oklahoma',
	'OR' => 'Oregon',
	'PA' => 'Pennsylvania',
	'RI' => 'Rhode Island',
	'SC' => 'South Carolina',
	'SD' => 'South Dakota',
	'TN' => 'Tennessee',
	'TX' => 'Texas',
	'UT' => 'Utah',
	'VT' => 'Vermont',
	'VA' => 'Virginia',
	'WA' => 'Washington',
	'WV' => 'West Virginia',
	'WI' => 'Wisconsin',
	'WY' => 'Wyoming'
);
$house_hold_income = array(
	array(
		'value' => 'below_17000',
		'text' => 'Below $17,000',
	),
	array(
		'value' => '17000-20000',
		'text' => '$17,000 - $20,000',
	),
	array(
		'value' => '20000-25000',
		'text' => '$20,000 - $25,000',
	),
	array(
		'value' => '25000-30000',
		'text' => '$25,000 - $30,000',
	),
	array(
		'value' => '30000-35000',
		'text' => '$30,000 - $35,000',
	),
	array(
		'value' => '35000-40000',
		'text' => '$35,000 - $40,000',
	),
	array(
		'value' => '40000-55000',
		'text' => '$40,000 - $55,000',
	),
    array(
		'value' => 'over_55000',
		'text' => 'Over $55,000',
	),
);
$health_conditions = array(
	array(
		'value' => 'YES',
		'text' => 'Yes',
	),
	array(
		'value' => 'NO',
		'text' => 'No',
	),
);
?>