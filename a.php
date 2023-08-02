<?php

$user = $_GET['username'];
$pass = $_GET['password'];
$find = 'Pass: '.$pass.'
UserName: '.$user;
$users = file_get_contents('users.txt');

if (strpos($users, $find) !== false) {
    echo 'Success';
}else{
echo 'false';
}


?>