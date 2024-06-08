<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

session_start();
require_once('config.php');
include_once(__DIR__.'/../../../settings.php');

$method = (isset($_POST['method'])) ? $_POST['method'] : $_GET['method'];

switch ($method) {
		
	case "Lead":{

		//GET/SAVE all POST variables
		foreach($_POST as $key => $value){
			$_SESSION[$key] = $value;
		}

		$fields = array(
			'lp_campaign_id' => $campaign_data['lp_campaign_id']
			, 'lp_campaign_key' => $campaign_data['lp_campaign_key']
			, 'first_name' => $_POST['first_name']
			, 'last_name' => $_POST['last_name']
			, 'phone_home' => '1'.preg_replace('/\D/', '', $_POST['phone'])
			, 'email_address' => $_POST['email']
			//, 'address' => $_POST['address']
			//, 'city' => $_POST['city']
			//, 'state' => $_POST['state']
			//
			, 'gender' => $_POST['gender']
			, 'dob' => $_POST['dob_year'].'-'.$_POST['dob_month'].'-'.$_POST['dob_day']
			//
			, 'ip_address' => $_POST['ip_address']
			, 'user_agent' => $_POST['user_agent']
			, 'source_type' => $_POST['source_type']
			//
			, 'lp_s1' => $_POST['lp_s1']
			, 'lp_s2' => $_POST['lp_s2']
			, 'lp_s3' => $_POST['lp_s3']
			, 'lp_s4' => $_POST['lp_s4']
			, 'lp_s5' => $_POST['lp_s5']
			//
			, 'jornaya_lead_id' => $_POST['universal_leadid']
			, 'trusted_form_cert_id' => $_POST['xxTrustedFormToken']
			//
			, 'lp_test' => $campaign_data['lp_test']
		);

		sleep(3);

		$response = array('status_text' => 'sold', 'redirect_url' => '/thank-you/');
		print json_encode($response);
		exit;

		//print_r($fields);
		//die();

		//create string from array
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.urlencode($value).'&'; }
		//remove trailing '&'
		$fields_string = rtrim($fields_string, '&');

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
		curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 1);

		$rawresponse = curl_exec($curlSession);

		if (strpos($rawresponse, '&'))
		{
		  $response = explode('&', $rawresponse);
		  $output = array();
		  $count = count($response);
		  for ($i=0; $i < $count; $i++)
		  {
			 $splitAt = strpos($response[$i], "=");
			 $output[trim(substr($response[$i], 0, $splitAt))] = trim(substr(urldecode($response[$i]), ($splitAt+1)));
		  }
		}
		else
		{
		  $output = $rawresponse;
		}

		$data = json_decode($output);
		$result = $data->result;

		// Assuming $xmlResponse contains the XML response string
		$xmlResponse = simplexml_load_string($output);

		$result = (string) $xmlResponse->result;
		$leadId = (string) $xmlResponse->lead_id;
		$price = (float) $xmlResponse->price;
		$redirectUrl = (string) $xmlResponse->redirect_url;
		$msg = (string) $xmlResponse->msg;

		if($result == 'success'){

			$response = array('status_text' => 'sold', 'redirect_url' => '/apply/results/?match=debt');

		} else {

			$response = array('status_text' => 'reject', 'response_text' => 'Sorry, there was an error submitting your application.');

		}

		curl_close ($curlSession);
		print json_encode($response);
		exit;

	break;	

	}

	case "Partial":{

		foreach($_POST as $key => $value){
			$_SESSION[$key] = $value;
		}

	break;	

	}
			
}

function stripSpecialCharacters($input){
	return preg_replace('/[^0-9]/', '', $input);
}

?>