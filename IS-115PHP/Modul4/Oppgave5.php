<?php
$Deltakere = array (

'Abdul'     => 0,
'Berat'     => 0,
'Mehmet'    => 0,
'Sebastian' => 0,
'Mago'      => 0,
'Mariam'    => 0,
'Ømer'   => 0, 
'Nour'      => 0,
'Sulu'      => 0,
'Gurol'     => 0
);

//Dette gjør jeg siden oppgaven ber om å prine ut deltakerene før konkuransen begynner. 
echo "<h3> påmeldte deltakere på konkurransen</h3>";
foreach($Deltakere as $Deltaker => $Verdi) {
    print_r("$Deltaker<br>");
}

//Her lager jeg en for each løkke for å tildele hvert deltaker et pengsum fra 1 til 50.
foreach ($Deltakere as $Deltaker => $Verdi) {
    
    $Deltakerspoeng = rand(1,50);
    $Deltakere [$Deltaker] = $Deltakerspoeng;
}
arsort($Deltakere); //dette gjør jeg for å sortere poengsummene slik at det høyeste er øverst også går det ned i riktig rekkefølge. 

//Her så printer jeg ut Deltakere og poengsummene som har blitt tildelt.
echo "<h3> Deltakere med dems poengsum </h3>";

    foreach ($Deltakere as $Deltaker => $Verdi) {
    echo "<br>Navn: $Deltaker => Poeng: $Verdi<br>"; 
}

//Dette gjør jeg for å telle antall deltakere og sjekke eller sørge for at listen er større enn 1. 
while(count($Deltakere) > 1) {

//Dette gjør jeg for å finne laveste verdi i selve arrayen. 
$Lavestepoeng = min($Deltakere);

//Her lager jeg en if statement for å sjekke om verdi er lik lavestepoeng
foreach($Deltakere as $Deltaker => $Verdi) {
    if ($Verdi === $Lavestepoeng) {
    unset($Deltakere[$Deltaker]);
    echo "<br><b>$Deltaker ble slettet med $Verdi poeng</b>";
}
}

//Her printer jeg ny runde med deltakere hvor jeg randomizer tallene og printer ut på nytt. 
echo "<h3> Ny runde med deltakere</h3>"; 
foreach ($Deltakere as $Deltaker => $Verdi) {
    $Deltakerspoeng = rand(1,50);
    $Deltakere [$Deltaker] = $Deltakerspoeng;
}

arsort($Deltakere);

//Nå skal jeg sjekke om listen er større enn 1 og hvis den er det så skal den printe listen igjen
if(count($Deltakere) > 1 ) {
    foreach($Deltakere as $Deltaker => $Verdi) {
    echo "<br>Navn: $Deltaker => Poeng: $Verdi<br>";

}
} 

//Hvis ikke så vil det printe ut den siste personen som er igjen og printe ut at vedkommende er vinneren. 
else { 
    echo "<br>Navn: $Deltaker => Poeng: $Verdi<br>";
    echo "<br>";
    echo "<b>Vinneren av konkurransen er $Deltaker med $Verdi poeng!</b>";
}
}

?>