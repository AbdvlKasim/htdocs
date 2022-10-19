<html>
<body>
<h3> Oppgave 5 </h3>
<?php
$init = 4400;
$hours = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;
?>
<?php echo "4400 utgjør: $hours timer, $minutes minutter, $seconds sekunder."
?>
<h3>Skulle jeg ha gjort oppgaven fort, ville jeg ha brukt echo gmdate syntaxen, hvor jeg bare skriver inn tallet jeg vil gjøre om til timer, minutter og sekunder</h3>
</body>
</html>