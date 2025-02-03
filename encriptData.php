<?php
$data = "rajesh";
$key = "name";
$password = "MYpassword"; 

$encryptedData = openssl_encrypt($data, $key, $password);
echo $encryptedData;

$decryptedData = openssl_decrypt($encryptedData, $password, $key);
echo $decryptedData;
?>