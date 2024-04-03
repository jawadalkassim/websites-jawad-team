<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

session_start();
require_once('config.php');

$method = (isset($_POST['method'])) ? $_POST['method'] : $_GET['method'];
//$rid =  (isset($_POST['lp_request_id'])) ? $_POST['lp_request_id'] : $_GET['lp_request_id'];
switch ($method) {
		
	case "Lead":{

		$fields = array(
			'lp_campaign_id' => $campaign_data['lp_campaign_id']
			, 'lp_campaign_key' => $campaign_data['lp_campaign_key']
			, 'lp_response' => 'JSON'
			, 'first_name' => $_POST['firstName']
			, 'last_name' => $_POST['lastName']
			, 'phone_home' => preg_replace('/\D/', '', $_POST['homePhone'])
			, 'email_address' => $_POST['email']
			, 'address' => $_POST['address']
			, 'zip_code' => strtoupper($_POST['zip'])
			, 'country' => 'CA'
			, 'cc_debt_amount' => $_POST['estimated_debt']
			, 'ip_address' => $_POST['ip_address']
			, 'city' => $_POST['city']
			, 'state' => $_POST['state']
			, 'lp_request_id' => $_POST['rid']
            , 'employed' => $_POST['employed_field']

			// //
			// , 'lp_s1' => $_POST['lp_s1']
			// , 'lp_s2' => $_POST['lp_s2']
			// , 'lp_s3' => $_POST['lp_s3']
			// , 'lp_s4' => $_POST['lp_s4']
			// , 'lp_s5' => $_POST['lp_s5']
			// //
			, 'jornaya_lead_id' => $_POST['universal_leadid']
			, 'trusted_form_cert_id' => $_POST['xxTrustedFormToken']
			//
			//, 'lp_test' => $campaign_data['lp_test']
		);

		//print_r($fields);
		//die();

		//create string from array
		$fields_string = http_build_query($fields);
		//foreach($fields as $key=>$value) { $fields_string .= $key.'='.urlencode($value).'&'; }
		// //remove trailing '&'
		// $fields_string = rtrim($fields_string, '&');

		$output = array();
		$url = 'https://lendingarch.leadspediatrack.com/post.do';
		$data = $fields_string;

		$curlSession = curl_init();
		curl_setopt($curlSession, CURLOPT_URL, $url);
		curl_setopt($curlSession, CURLOPT_HEADER, 0);
		curl_setopt($curlSession, CURLOPT_POST, 1);
		curl_setopt($curlSession, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curlSession, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($curlSession, CURLOPT_TIMEOUT,5000);
		curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 2);

		$result = curl_exec($curlSession);

     	$leadResponse = json_decode($result, true);
        $result = $leadResponse['result'];
        $leadId = $leadResponse['lead_id'];
        $redirectUrl = $leadResponse['redirect_url'] ?? '';
        $msg = $leadResponse['msg'];
        $price = $leadResponse['price'];

		if ($result == "success") {
			$buyerID = $leadResponse['clients'][0]['client']['advertiserID'];
		}
		
		//print_r($output);
		//die();

		if($result == 'success'){

			$_SESSION['redirect_url'] = $redirectUrl;
			// $response = array('status_text' => 'sold', 'redirect_url' => '/Debt-v1/dist/submit.php/?match=true&lead_id='.$leadId);
			if (strlen($buyerID) !== 0){
				$thankYou = '/thank-you/' . $buyerID;
			} else {
				$thankYou = '/thank-you';
			}
			$response = array('status_text' => 'sold', 'redirect_url' => $thankYou . '?match=true&lead_id='.$leadId);

		} else if($result == 'failed'){

			$response = array('status_text' => 'failed', 'redirect_url' => '/Debt-v1/dist/submit.php/?match=false&lead_id='.$leadId);

		} else {

			$response = array('status_text' => 'reject', 'response_text' => 'Sorry, there was an error submitting your application.');

		}

		curl_close ($curlSession);
		print json_encode($response);
		exit;

	break;	

	}
			
}

function stripSpecialCharacters($input){
	return preg_replace('/[^0-9]/', '', $input);
}

?>