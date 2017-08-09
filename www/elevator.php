<?php

$username = $_REQUEST['username'];
$from = $_REQUEST['from'];
$to = $_REQUEST['to'];

$url = "http://172.30.201.238:8080/api/getElevatorInfo";
$json = file_get_contents($url);
//$json_data = json_decode($json, true);
echo '
	{
		"from": "'.$from.'",
		"to": "'.$to.'",
		"liftnum": "MTM1",
		"eta": "90"
	}
';

?>