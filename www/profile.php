<?php
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
//header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$username = $_REQUEST['username'];

$url = "http://172.30.201.238:8080/api/getStaffProfile?filter=STAFF_NUMBER,eq,$username&transform=1";
$json = file_get_contents($url);
//$json_data = json_decode($json, true);
echo $json;

?>