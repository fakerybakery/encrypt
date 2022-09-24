<?php
$encryptedstring = $_GET['q'];
$password = $_GET['p'];
if (openssl_decrypt($encryptedstring,"AES-128-ECB",$password)) {
    $decrypted_string = openssl_decrypt($encryptedstring,"AES-128-ECB",$password);
} else {
    $decrypted_string = 'ERR_INCORRECT_PASSWORD';
}
echo $decrypted_string;