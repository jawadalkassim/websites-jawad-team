<?php
$submissionType = $_GET['op'];
header('Content-type: application/json');

if ('phone' === $submissionType) {
    echo json_encode(['code' => 200, 'body' => true]);
    die();

} else if ('location' === $submissionType && key_exists('postal', $_GET)) {
    zipWithoutAPI();

} else if ('next' === $submissionType && key_exists('step', $_GET) && 'Q10' === $_GET['step']) {
    echo json_encode(['code' => 200, 'body' => true]);
    die();
} else {
    echo json_encode(['code' => 200, 'body' => true]);
    die();
}

function zipWithoutAPI()
{
    $zip = $_GET['postal'];
    $stateLabel = null;
    $state = null;
    /* Code cases alphabetized by state */
    if ($zip >= 35000 && $zip <= 36999) {
        $stateLabel = 'AL';
        $state = 'Alabama';
    } else if ($zip >= 99500 && $zip <= 99999) {
        $stateLabel = 'AK';
        $state = 'Alaska';
    } else if ($zip >= 85000 && $zip <= 86999) {
        $stateLabel = 'AZ';
        $state = 'Arizona';
    } else if ($zip >= 71600 && $zip <= 72999) {
        $stateLabel = 'AR';
        $state = 'Arkansas';
    } else if ($zip >= 90000 && $zip <= 96699) {
        $stateLabel = 'CA';
        $state = 'California';
    } else if ($zip >= 80000 && $zip <= 81999) {
        $stateLabel = 'CO';
        $state = 'Colorado';
    } else if ($zip >= 6000 && $zip <= 6999) {
        $stateLabel = 'CT';
        $state = 'Connecticut';
    } else if ($zip >= 19700 && $zip <= 19999) {
        $stateLabel = 'DE';
        $state = 'Delaware';
    } else if ($zip >= 32000 && $zip <= 34999) {
        $stateLabel = 'FL';
        $state = 'Florida';
    } else if ($zip >= 30000 && $zip <= 31999) {
        $stateLabel = 'GA';
        $state = 'Georgia';
    } else if ($zip >= 96700 && $zip <= 96999) {
        $stateLabel = 'HI';
        $state = 'Hawaii';
    } else if ($zip >= 83200 && $zip <= 83999) {
        $stateLabel = 'ID';
        $state = 'Idaho';
    } else if ($zip >= 60000 && $zip <= 62999) {
        $stateLabel = 'IL';
        $state = 'Illinois';
    } else if ($zip >= 46000 && $zip <= 47999) {
        $stateLabel = 'IN';
        $state = 'Indiana';
    } else if ($zip >= 50000 && $zip <= 52999) {
        $stateLabel = 'IA';
        $state = 'Iowa';
    } else if ($zip >= 66000 && $zip <= 67999) {
        $stateLabel = 'KS';
        $state = 'Kansas';
    } else if ($zip >= 40000 && $zip <= 42999) {
        $stateLabel = 'KY';
        $state = 'Kentucky';
    } else if ($zip >= 70000 && $zip <= 71599) {
        $stateLabel = 'LA';
        $state = 'Louisiana';
    } else if ($zip >= 3900 && $zip <= 4999) {
        $stateLabel = 'ME';
        $state = 'Maine';
    } else if ($zip >= 20600 && $zip <= 21999) {
        $stateLabel = 'MD';
        $state = 'Maryland';
    } else if ($zip >= 1000 && $zip <= 2799) {
        $stateLabel = 'MA';
        $state = 'Massachusetts';
    } else if ($zip >= 48000 && $zip <= 49999) {
        $stateLabel = 'MI';
        $state = 'Michigan';
    } else if ($zip >= 55000 && $zip <= 56999) {
        $stateLabel = 'MN';
        $state = 'Minnesota';
    } else if ($zip >= 38600 && $zip <= 39999) {
        $stateLabel = 'MS';
        $state = 'Mississippi';
    } else if ($zip >= 63000 && $zip <= 65999) {
        $stateLabel = 'MO';
        $state = 'Missouri';
    } else if ($zip >= 59000 && $zip <= 59999) {
        $stateLabel = 'MT';
        $state = 'Montana';
    } else if ($zip >= 27000 && $zip <= 28999) {
        $stateLabel = 'NC';
        $state = 'North Carolina';
    } else if ($zip >= 58000 && $zip <= 58999) {
        $stateLabel = 'ND';
        $state = 'North Dakota';
    } else if ($zip >= 68000 && $zip <= 69999) {
        $stateLabel = 'NE';
        $state = 'Nebraska';
    } else if ($zip >= 88900 && $zip <= 89999) {
        $stateLabel = 'NV';
        $state = 'Nevada';
    } else if ($zip >= 3000 && $zip <= 3899) {
        $stateLabel = 'NH';
        $state = 'New Hampshire';
    } else if ($zip >= 7000 && $zip <= 8999) {
        $stateLabel = 'NJ';
        $state = 'New Jersey';
    } else if ($zip >= 87000 && $zip <= 88499) {
        $stateLabel = 'NM';
        $state = 'New Mexico';
    } else if ($zip >= 10000 && $zip <= 14999) {
        $stateLabel = 'NY';
        $state = 'New York';
    } else if ($zip >= 43000 && $zip <= 45999) {
        $stateLabel = 'OH';
        $state = 'Ohio';
    } else if ($zip >= 73000 && $zip <= 74999) {
        $stateLabel = 'OK';
        $state = 'Oklahoma';
    } else if ($zip >= 97000 && $zip <= 97999) {
        $stateLabel = 'OR';
        $state = 'Oregon';
    } else if ($zip >= 15000 && $zip <= 19699) {
        $stateLabel = 'PA';
        $state = 'Pennsylvania';
    } else if ($zip >= 300 && $zip <= 999) {
        $stateLabel = 'PR';
        $state = 'Puerto Rico';
    } else if ($zip >= 2800 && $zip <= 2999) {
        $stateLabel = 'RI';
        $state = 'Rhode Island';
    } else if ($zip >= 29000 && $zip <= 29999) {
        $stateLabel = 'SC';
        $state = 'South Carolina';
    } else if ($zip >= 57000 && $zip <= 57999) {
        $stateLabel = 'SD';
        $state = 'South Dakota';
    } else if ($zip >= 37000 && $zip <= 38599) {
        $stateLabel = 'TN';
        $state = 'Tennessee';
    } else if (($zip >= 75000 && $zip <= 79999) || ($zip >= 88500 && $zip <= 88599)) {
        $stateLabel = 'TX';
        $state = 'Texas';
    } else if ($zip >= 84000 && $zip <= 84999) {
        $stateLabel = 'UT';
        $state = 'Utah';
    } else if ($zip >= 5000 && $zip <= 5999) {
        $stateLabel = 'VT';
        $state = 'Vermont';
    } else if ($zip >= 22000 && $zip <= 24699) {
        $stateLabel = 'VA';
        $state = 'Virgina';
    } else if ($zip >= 20000 && $zip <= 20599) {
        $stateLabel = 'DC';
        $state = 'Washington DC';
    } else if ($zip >= 98000 && $zip <= 99499) {
        $stateLabel = 'WA';
        $state = 'Washington';
    } else if ($zip >= 24700 && $zip <= 26999) {
        $stateLabel = 'WV';
        $state = 'West Virginia';
    } else if ($zip >= 53000 && $zip <= 54999) {
        $stateLabel = 'WI';
        $state = 'Wisconsin';
    } else if ($zip >= 82000 && $zip <= 83199) {
        $stateLabel = 'WY';
        $state = 'Wyoming';
    } else {
        $stateLabel = 'none';
        $state = 'none';
    }
    echo json_encode(['code' => 200, 'body' => json_encode(['state' => $state, 'state_label' => $stateLabel])]);
    die();
}