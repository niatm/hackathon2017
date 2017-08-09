<?php

$username = $_REQUEST['username'];
$from = $_REQUEST['from'];
$to = $_REQUEST['to'];

$url = "http://175.139.131.98/updateinfo.php?user=$username&from=20&to=G&timer=30";
$result = file_get_contents($url);

echo $_SERVER['SERVER_NAME'] .'/www/qr/test.png';

?>