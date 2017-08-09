<?php

$username = $_GET['username'];
$password = $_GET['password'];


$url = "http://172.30.201.238:8080/api/ldap/$username/$password";
$result = file_get_contents($url);
echo $result;

?>