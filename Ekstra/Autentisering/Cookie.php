<?php

setcookie("Bil", "Toyota", time() + 5184000, "/"); // 60 døgn


//sessions 
session_start();
$_SESSION['user']['id'] = 9700;
$_SESSION['user']['auth'] = 3;
$_SESSION['user']['firstname'] = "Abdul Rahman";
$_SESSION['user']['lastname'] = "Kasim";
$_SESSION['user']['logged_in'] = true;

echo $_SESSION['user']['id'];
unset($_SESSION['user']['logged_in']);
//session_destroy();

echo $_SESSION['user']['firstname'];






?>