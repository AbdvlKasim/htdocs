<?php
//Her lager jeg to variabeler som i dette tilfellet er startsaldo som vi vil begynne på og renter som jeg skal gange med. 
$Startsaldo = 5000;
$Renter = 1.2; 

echo "Startsaldon ligger på: ". $Startsaldo;
echo "<br>";
echo "Renten ligger på: ". $Renter;
echo "<br>";

//Her lager jeg en for loop hvor $i begynner på 1 og fortsetter til 5 også definerer jeg at startsaldo skal ganges med renter.
// Deretter printer jeg bare hvor mye den nye saldoen skal ligge på osv. 
for ($i = 1; $i <= 5; $i++) {
    $Startsaldo = $Startsaldo * $Renter;
    echo "<br>";
    echo "$i". " året vil den nye saldoen ligge på " .$Startsaldo;
    echo "<br>";

}

?>