<html>
<body>
<h3> Summen </h3>
<?php 
$Tall1 = 5;
$Tall2 = 10;
$Summen = $Tall1 + $Tall2;
echo ($Summen);
?>
<h3>Differansen</h3>
<?php
echo (abs($Tall1 - $Tall2));
?>
<h3> Gjennomsnittet </h3>
<?php
echo ($Summen/2);
echo "<br><br>";
?>
<h3> Oppsummering </h3>
<?php
echo "Summen av de to variablene blir $Summen <br> Differansen av de to variablene blir "; 
echo (abs($Tall1 - $Tall2));
echo "<br>";
echo "gjennomsnittet av de to variablene blir "  .$Summen/2;
?>
<body> 
</html>