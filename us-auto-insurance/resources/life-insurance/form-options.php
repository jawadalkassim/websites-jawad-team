<?php

include_once(__DIR__.'/../../../settings.php');

$has_life_insurance = array(
	array(
		'value' => 'YES',
		'text' => 'Yes',
	),
	array(
		'value' => 'NO',
		'text' => 'No',
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

$tobacco_use_options = array(
	array(
		'value' => 'YES',
		'text' => 'Yes',
	),
	array(
		'value' => 'NO',
		'text' => 'No',
	),
);

$marital_status = array(
	array(
		'value' => 'MARRIED',
		'text' => 'Yes',
	),
	array(
		'value' => 'NOT_MARRIED',
		'text' => 'No',
	),
);

$children = array(
	array(
		'value' => 'YES',
		'text' => 'Yes',
	),
	array(
		'value' => 'NO',
		'text' => 'No',
	),
);

$household_income_over_40k = array(
	array(
		'value' => 'YES',
		'text' => 'Yes',
	),
	array(
		'value' => 'NO',
		'text' => 'No',
	),
);

$employment_status = array(
	array(
		'value' => 'EMPLOYED',
		'text' => 'Currently Employed',
	),
	array(
		'value' => 'STUDENT',
		'text' => 'Student',
	),
	array(
		'value' => 'STAY_AT_HOME',
		'text' => 'Stay at Home',
	),
	array(
		'value' => 'RETIRED',
		'text' => 'Retired',
	),
	array(
		'value' => 'UNEMPLOYED',
		'text' => 'Unemployed',
	),
	array(
		'value' => 'DISABLED',
		'text' => 'Disabled',
	),
	array(
		'value' => 'MILITARY',
		'text' => 'Military',
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

$life_insurance_reasons = array(
	array(
		'value' => 'PROTECT_A_DEBT',
		'text' => 'Protect a debt (ie. mortgage or medical bills)',
	),
	array(
		'value' => 'COVER_END_OF_LIFE',
		'text' => 'Cover end of life expenses such as funeral costs
',
	),
	array(
		'value' => 'INCOME_REPLACEMENT',
		'text' => 'As income replacement',
	),
	array(
		'value' => 'LEAVE_MONEY_FOR_FAMILY',
		'text' => 'Leave money for my family',
	),
	array(
		'value' => 'LEAVE_MONEY_FOR_ORGANIZATION',
		'text' => 'Leave money to an organization',
	),
	array(
		'value' => 'OTHER',
		'text' => 'Other',
	),
);

$prescribed_meds_conditions = array(
	array(
		'value' => 'ANXIETY_DEPRESSION_BIPOLOR',
		'text' => 'Anxiety / depression / bipolar',
	),
	array(
		'value' => 'HEART_OR_CIRCULATORY_DISORDER',
		'text' => 'Heart or circulatory disorder
',
	),
	array(
		'value' => 'CANCER',
		'text' => 'Cancer',
	),
	array(
		'value' => 'RESPIRATORY_DISORDER',
		'text' => 'Respiratory disorder',
	),
	array(
		'value' => 'CHRONIC_PAIN',
		'text' => 'Chronic pain',
	),
	array(
		'value' => 'OTHER_MEDICAL_CONDITIONS',
		'text' => 'Other medical condition',
	),
	array(
		'value' => 'DIABETES',
		'text' => 'Diabetes',
	),
	array(
		'value' => 'NO_MEDICAN_CONDITIONS',
		'text' => 'I have no medical conditions',
	),
);

$prescribed_meds = array(
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