<?php


$Antallgjester = 12;

$Inviterte = $Antallgjester-1; 
$Kvinner = $Antallgjester/2;
$Ungdommer = $Antallgjester/3;
$Ikkeungdommer = $Antallgjester-4;
$Tvillinger = $Antallgjester/6;

echo "Det er " .$Inviterte. " som er inviterte ";
echo "<br>";
echo "Det er " .$Kvinner. " som er kvinner";
echo "<br>";
echo "Det er " .$Ikkeungdommer. " som ikke er i 20 årene";
echo "<br>";
echo "Det er " .$Tvillinger. " som er tvillinger";
?>