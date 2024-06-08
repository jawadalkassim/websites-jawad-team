<?php

include_once(__DIR__.'/../../../settings.php');

$property_type = array(
	array(
		'value' => 'SINGLE_FAMILY_HOME',
		'text' => 'Single Family Home',
	),
	array(
		'value' => 'TOWNHOME',
		'text' => 'Townhome',
	),
	array(
		'value' => 'MULTI_FAMILY_HOME',
		'text' => 'Multi Family Home',
	),
	array(
		'value' => 'CONDOMINIUM',
		'text' => 'Condominium',
	),
	array(
		'value' => 'DUPLEX',
		'text' => 'Duplex ',
	),
	array(
		'value' => 'MOBILE_HOME',
		'text' => 'Mobile Home',
	),
	array(
		'value' => 'APARTMENT',
		'text' => 'Apartment ',
	),
);




$personal_property = array(
	array(
		'value' => '10,000 or less ',
		'text' => '$10,000 or less ',
	),
	array(
		'value' => '15,000',
		'text' => '$15,000',
	),
	array(
		'value' => '20,000',
		'text' => '$20,000',
	),
	array(
		'value' => '25,000',
		'text' => '$25,000',
	),
	array(
		'value' => '30,000',
		'text' => '$30,000',
	),
	array(
		'value' => '35,000',
		'text' => '$35,000',
	),
	array(
		'value' => '40,000',
		'text' => '$40,000',
	),
	array(
		'value' => '45,000',
		'text' => '$45,000',
	),
	array(
		'value' => '50,000',
		'text' => '$50,000',
	),
	array(
		'value' => '60,000',
		'text' => '$60,000',
	),
	array(
		'value' => '70,000',
		'text' => '$70,000',
	),
	array(
		'value' => '80,000',
		'text' => '$80,000',
	),
	array(
		'value' => '90,000',
		'text' => '$90,000',
	),
	array(
		'value' => '100,000',
		'text' => '$100,000',
	),
	array(
		'value' => '125,000',
		'text' => '$125,000',
	),
	array(
		'value' => '150,000',
		'text' => '$150,000',
	),
	array(
		'value' => '175,000',
		'text' => '$175,000',
	),
	array(
		'value' => '200,000',
		'text' => '$200,000',
	),
	array(
		'value' => '225,000',
		'text' => '$225,000',
	),
	array(
		'value' => '250,000',
		'text' => '$250,000',
	),
	array(
		'value' => '275,000',
		'text' => '$275,000',
	),
	array(
		'value' => '300,000 or more',
		'text' => '$300,000 or more',
	),
	
);

$currently_insured = array(
	array(
		'value' => 'YES',
		'text' => 'Yes',
	),
	array(
		'value' => 'NO',
		'text' => 'No',
	),
	
);

$current_carrier = array(
	array(
		'value' => 'AAA Insurance Co.',
		'text' => 'AAA Insurance Co.',
	),
	array(
		'value' => 'Allstate ',
		'text' => 'Allstate ',
	),
	array(
		'value' => 'American Family',
		'text' => 'American Family ',
	),
	array(
		'value' => 'Country Financial',
		'text' => 'Country Financial',
	),
	array(
		'value' => 'Farmers',
		'text' => 'Farmers',
	),
	array(
		'value' => 'Geico',
		'text' => 'Geico',
	),
	array(
		'value' => 'Liberty Mutual',
		'text' => 'Liberty Mutual',
	),
	array(
		'value' => 'Mercury',
		'text' => 'Mercury',
	),
	array(
		'value' => 'Metlife',
		'text' => 'Metlife',
	),
	array(
		'value' => 'Nationwide',
		'text' => 'Nationwide',
	),
	array(
		'value' => 'Progressive',
		'text' => 'Progressive',
	),
	array(
		'value' => 'Safeco',
		'text' => 'Safeco',
	),
	array(
		'value' => 'State Farm',
		'text' => 'State Farm',
	),
	array(
		'value' => 'The Hartford',
		'text' => 'The Hartford',
	),
	array(
		'value' => 'Travelers',
		'text' => 'Travelers',
	),
	array(
		'value' => 'USAA',
		'text' => 'USAA',
	),
	array(
		'value' => 'Other',
		'text' => 'Other',
	),
	
);

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

$gender_options = array(
	array(
		'value' => 'MALE',
		'text' => 'Male',
	),
	array(
		'value' => 'FEMALE',
		'text' => 'Female',
	),
);


$married = array(
	array(
		'value' => 'YES',
		'text' => 'Yes',
	),
	array(
		'value' => 'NO',
		'text' => 'No',
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

?>