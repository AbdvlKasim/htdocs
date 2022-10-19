<!doctype html>
<head>
  <h1>Hvetekorn oppgave 5</h1>
</head>
<body>

<?php

$start = 1;

for ($i = 1; $i <= 64; $i++) {

// her så kaller jeg på funksjonen som jeg har kalt sortere
$sortere = sortere($start); 
echo "<br> Rute $i har $sortere hvetekorn<br>";
$start = $start * 2;

}
function sortere($tall) {
if($tall > 1000000000) {
//her så vil jeg formatere slik at jeg formatere nummere til gruppe indeling på for eks. hundre, tusen osv.
$formaterenummere = number_format($tall, 0, null, " ");
//her så deler jeg den ene stringen med den andre stringen, slik at man får en bedre output
$formaterenummere = explode(' ', $formaterenummere);

// For å gjøre d mye enklere senere så har jeg gjort formaterenummere til en array med 0 1 2 3 osv som index slik at jeg da kan lage en string på slutten og skrive dem i setning osv.

$tall = ""; //dette gjør jeg bare for å sette variabelen om til en string slik at jeg senere ikke får noe konflikt. 

//jeg bruker int for å konvertere fra string til int slik at jeg får return value i int. 
If(count($formaterenummere) >= 7 ){
   $tall .= (int)$formaterenummere[count($formaterenummere)-7] . ' trillioner, ';
} 

If(count($formaterenummere) >= 6 ){
   $tall .= (int)$formaterenummere[count($formaterenummere)-6] . ' billiarder, ';
} 

If(count($formaterenummere) >= 5 ){
   $tall .= (int)$formaterenummere[count($formaterenummere)-5] . ' billioner, ';
}

$hundre = (((int)($formaterenummere[3] / 100) ?: '')); 

$tall .= (int)$formaterenummere[count($formaterenummere)-4] . ' milliarder, ';
$tall .= (int)$formaterenummere[count($formaterenummere)-3] . ' millioner, ';
// Før "?" = condition, etter "?" = true, etter ":" = else
$tall .= (int)$formaterenummere[count($formaterenummere)-2] . ' tusen, '. (($hundre != '' ? $hundre . ' Hundre, ' : ''));
$tall .= " og " . (int)($formaterenummere[count($formaterenummere)-1] % 100);

   }
   return $tall;
}

?>

