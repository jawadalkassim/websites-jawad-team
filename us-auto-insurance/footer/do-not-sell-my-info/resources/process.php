<?php

session_start();
require_once('config.php');

$method = (isset($_POST['method'])) ? $_POST['method'] : $_GET['method'];

switch ($method) {
		
	case "OptOut":{

		/*
		foreach($_POST as $key => $value){
			$_SESSION[$key] = $value;
		}
		*/

		$fields = array(
			'lp_campaign_id' => $campaign_data['lp_campaign_id'],
			'lp_campaign_key' => $campaign_data['lp_campaign_key'],
			'first_name' => $_POST['firstName'],
			'last_name' => $_POST['lastName'],
			'address' => $_POST['address'],
			'city' => $_POST['city'],
			'state' => $_POST['state'],
			'zip' => $_POST['zip'],
			'email_address' => $_POST['email'],
			'phone_home' => stripSpecialCharacters($_POST['phone']),
			'ip_address' => $_POST['ip_address'],
			'description' => $_POST['description'],
		);

		//print_r($fields);
		//die();

		//create string from array
		$fields_string = '';
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.urlencode($value).'&'; }

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

			$response = array('success' => true);

		} else {

			//$response = array('success' => false);
			$response = array('success' => true);

		}

		//telegramSendMessage('OptOut - ACA'.PHP_EOL.$output);

		//todo: post to endpoint

		//curl_close ($curlSession);
		print json_encode($response);
		exit;

	break;	

	}
			
}

function stripSpecialCharacters($input){
	return preg_replace('/[^0-9]/', '', $input);
}
function telegramSendMessage($message) {

	$apiToken = "6488679573:AAH9UwqTzEaOiFPeQ7VArtgDjYUjJ0OFptE";
	$data = [
		'chat_id' => '-1001990097907',
		'text' => $message
	];
	$messaage_response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
	
}

?>