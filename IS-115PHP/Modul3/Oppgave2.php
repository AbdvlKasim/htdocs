<?php
// Her lager jeg tre variabler siden jeg skal ha en teller som teller opp til 9 så vil jeg starte på 0 og avslutte på 9.
//Jeg har også en variabel kalt sum=0 slik at jeg kan regne ut summen av tallene etterpå
$start = 0;
$slutt = 9;
$sum = 0;

//Her lager jeg en for loop som startet med det jeg har definert i $start variabelen og slutter på $slutt variabelen
for ($i = $start; $i <= $slutt; $i++) {
    $sum += $i;
    echo $i. "<br>";
}

echo "<br>";
echo "Ferdig med å telle! Summen av tallene ble " .$sum;


?>