<?php

$username = $_REQUEST['username'];
$from = $_REQUEST['from'];
$to = $_REQUEST['to'];

$url = "http://172.30.201.238:8080/api/getStaffProfile?filter=STAFF_NUMBER,eq,$username&transform=1";
$result = file_get_contents($url);
$json_data = json_decode($json, true);
$fullname = $json_data['getStaffProfile'][0]['FULL_NAME'];

$url = "http://175.139.131.98/updateinfo.php?user=$fullname&from=$from&to=$to&timer=30";
$result = file_get_contents($url);

echo $_SERVER['SERVER_NAME'] .'/www/qr/test.png';

?>