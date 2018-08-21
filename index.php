<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST") {
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	
	$text = $json->result->parameters->text;
	
	switch ($text) {
		case 'hi':
			$speech = "hey";
			break;
			
		default:
			$speech = "Default";
			break;
	}
	
	$response = new \stdClass();
	$response->fulfillmentText = "This response is coming from Heroku";
	$response->fulfillmentMessages=[""];
	$response->source = "webhook";
	$response->payload = "";
	$response->outputContexts = [""];
	$response->followupEventInput = "";
	echo json_encode($response);
	
}
else 
{
	echo "Method not allowed";
}

?>
