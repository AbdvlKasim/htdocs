<?php

//Her lager jeg en matrise med nøkkel og verdier. nøkkel på venstre side og verdier på høyre
$Matrise = array(
    0 => 'Eple',
    3 => 'Pære',
    5 => 'Ananas',
    7 => 'Pasjonsfrukt',
    8 => 'Mango',
    15 => 'Vannmelon'
);

echo "Dette er fra en foreach løkkke: ";
echo "<br>";
// Her lager en foreach løkke siden jeg ønsker å printe ut nøkkelene og verdiene på en fin måte.
foreach ($Matrise as $key => $verdi) {
    echo "<br>";
    echo $key. " er ". $verdi;
    echo "<br><br>";
}
//Dette gjør jeg for å vise hvordan outputen blir hvis jeg bruker Print_r istdenfor foreach løkke.
echo "Dette er hva outputen er ved bruk av PRINT_R funksjon:<br><br>";
print_r  ($Matrise);








?>