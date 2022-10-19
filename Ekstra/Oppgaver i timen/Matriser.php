<?php
$deltakere = array('Ømer', 'Berat', 'Mehmet', '17' => 'Sulu');
print_r($deltakere);
$deltakere[] = 'Gurol';
echo "<br>";
print_r($deltakere);
echo "<br>";

echo "Hei " . $deltakere[17];

?>