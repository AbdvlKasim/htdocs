<?php

$setning = "Web Database Applications with PHP and MySQL: Building Effective Database-Driven Web Sites";
$setning = strtolower($setning);
$setning = ucfirst($setning);

echo strlen($setning);
echo "<br>";
echo ($setning);
echo "<br>";
echo ucfirst(strtolower($setning));
echo "<br>";
echo md5($setning);
echo "<br>";
$crypto = md5($setning);
echo substr($crypto, 5, 10);
echo "<br>";
echo substr($crypto, rand(0, 10), 10);
echo "<br>";
echo "<br>";
echo "13 june, 2000 is on a ". date("l", mktime(0,0,0,6,13,2000));

?>