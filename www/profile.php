<?php

$username = $_REQUEST['username'];

$url = "http://172.30.201.238:8080/api/getStaffProfile?filter=STAFF_NUMBER,eq,$username";
$json = file_get_contents($url);
//$json_data = json_decode($json, true);
echo $json;

?>