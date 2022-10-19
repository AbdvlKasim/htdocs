<?php
// Her lager jeg 2 variabler som jeg gir to ulike verdier. I den første skriver jeg navnet mitt og i den andre skriver jeg alderen min. 
$Navn = "Abdul";
$Alder = 22;

//Her lager jeg en if statement der - hvis alderen er mindre enn 18 så vil det printe den første meldingen som er at personen ikke er 
//myndig, men hvis personen er 18 eller over så vil den andre meldingen printe ut som kommer etter else, altså at personen er myndig.
if ($Alder < 18) {
    echo $Navn. " er " .$Alder. " år og er dermed ikke myndig, siden han/hun er under 18 år. ";

} else {
    echo $Navn. " er " .$Alder. " år og dermed myndig. ";
}

?>