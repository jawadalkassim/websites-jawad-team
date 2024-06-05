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

$second_vehicle_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
		'text' => 'No',
	),
);

$auto_insurance_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
		'text' => 'No',
	),
);

$auto_insurance_companies = array(
	array(
		'value' => '21st Century Insurance',
		'text' => '21st Century Insurance',
	),
	array(
		'value' => 'AAA Insurance Co',
		'text' => 'AAA Insurance Co',
	),
	array(
		'value' => 'Allstate',
		'text' => 'Allstate',
	),
	array(
		'value' => 'American Family',
		'text' => 'American Family',
	),
	array(
		'value' => 'AMICA',
		'text' => 'AMICA',
	),
	array(
		'value' => 'Country Finanical',
		'text' => 'Country Finanical',
	),
	array(
		'value' => 'Esurance',
		'text' => 'Esurance',
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

$insurance_duration_options = array(
	array(
		'value' => '1-2 years',
		'text' => '1-2 years',
	),
	array(
		'value' => '2-3 years',
		'text' => '2-3 years',
	),
	array(
		'value' => '3-5 years',
		'text' => '3-5 years',
	),
	array(
		'value' => '5+ years',
		'text' => '5+ years',
	),
	array(
		'value' => 'Less than a year',
		'text' => 'Less than a year',
	),
);

$homeowner_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
		'text' => 'No',
	),
);

$homeowner_insurance_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
		'text' => 'No',
	),
);

$gender_options = array(
	array(
		'value' => 'Male',
		'text' => 'Male',
	),
	array(
		'value' => 'Female',
		'text' => 'Female',
	),
);

$marital_status_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
		'text' => 'No',
	),
);

$vehicle_count_options = array(
	array(
		'value' => '1',
		'text' => '1',
	),
	array(
		'value' => '2',
		'text' => '2',
	),
	array(
		'value' => '3+',
		'text' => '3+',
	),
);

$recent_accident_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
		'text' => 'No',
	),
);

$dui_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
		'text' => 'No',
	),
);

$military_options = array(
	array(
		'value' => 'Yes',
		'text' => 'Yes',
	),
	array(
		'value' => 'No',
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