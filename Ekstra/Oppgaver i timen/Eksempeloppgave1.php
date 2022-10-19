<?php
$str = "reven rasker over isen";
echo strlen($str); 
echo "<br>";
$len = strlen($str);
$str = strtolower($str);
echo $str; 
echo "<br>";

$str = ucwords($str);
echo $str . "<br>";

$str = strtoupper($str);
echo $str . "<br>";
?>