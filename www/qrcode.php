<?php

$url = "http://175.139.131.98/updateinfo.php?user=TM36186&from=20&to=G&timer=30";
$result = file_get_contents($url);

echo $_SERVER['SERVER_NAME'] .'/www/qr/test.png';

?>