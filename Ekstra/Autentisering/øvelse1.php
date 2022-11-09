<?php

setcookie("Bil", "Toyota", time() + 5184000, "/"); // 60 døgn


//sessions 
session_start();
$_SESSION['user']['brukernavn'] = "A99";
print_r($_SESSION);

//passord med md5()
$passord = md5('hemmelig');
//echo "<br><br>" .$passord;

$passord = password_hash("hemmelig", PASSWORD_DEFAULT);
echo "<br><br>" .$passord;

$db_hash = '$2y$10$E5jRdc0tmhwIoRMWVEf4S.9fBfo0f6fedN0.4XQ1PeC7Du8cYcd1mifjirjr';
if(password_verify("hemmelig", $db_hash)) 
{
 echo "<br>Det stemmer";
}
else 
{
    //echo "Det stemmer ikke";
    header("Location: Cookie.php"); exit();
}








?>