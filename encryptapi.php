<?php
$string_to_encrypt = $_GET['q'];
$password = $_GET['p'];
echo openssl_encrypt($string_to_encrypt,"AES-128-ECB",$password);
?>