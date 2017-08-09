<?php

$url = "http://itnthackathon.bweas.tm.com.my/api/getElevatorInfo";
$json = file_get_contents($url);
//$json_data = json_decode($json, true);
echo $json;

?>