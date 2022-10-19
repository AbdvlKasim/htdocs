<?php
$Kommune1 = "Kristiansand";
$Kommune2 = "Lillesand";
$Kommune3 = "Birkenes";
$Kommune4 = "Harstad";
$Kommune5 = "Kvæfjord";
$Kommune6 = "Tromsø";
$Kommune7 = "Bergen";
$Kommune8 = "Trondheim";
$Kommune9 = "Bodø";
$Kommune10= "Alta";

$Return_value = match ($Kommune10) {

    "Kristiansand", "Lillesand", "Birkenes" => "Agder fylkeskommune",
    "Harstad", "Kvæfjord", "tromsø", "Alta" => "Troms og finmark fylke",
    "Bergen" => "Vestland fylke",
    "Trondheim" => "Trøndelag fylke",
    "Bodø" => "Nordland fylke",
};

echo $Kommune1. " Ligger i ". $Return_value;


?>
