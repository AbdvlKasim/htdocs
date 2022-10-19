<html>
<body>
  <head>
    <title>Oppgave 4</title>
  </head>
  <h3> Matrise før endring </h3>
  <?php

//Her lager jeg en matrise med byene før endring
$By = array(
    
    0 => 'New York',
    1 => 'Los Angeles',
    2 => 'Baku',
    3 => 'Moscow',
    4 => 'Oslo', 
    5 => 'Stocholm',
    6 => 'København',
    7 => 'Astana',
    8 => 'Athens',
    9 => 'Montreal'
);
foreach ($By as $byer => $value) { // her bruker jeg en foreach loop for å printe ut byene
    print_r("<b>$byer</b>: $value</b><br>");
  }

  //Deretter lager jeg en ny matrise med de nye byene som jeg vil skal dukke opp etter at jeg at printer ut på nytt
$By2 = array(
  0 => 'Zaghreb',
  1 => 'Sarajevo',
  2 => 'Prishtina',
  3 => 'Helsinki',
  4 => 'Sparta',
  5 => 'New Delhi',
  6 => 'London',
  7 => 'Amsterdam',
  8 => 'Istanbul',
  9 => 'Bangkok'

); 

echo "<h3> Matrisen etter endring </h3>";
$Forandretliste = array_replace($By,$By2); //Her så erstatter jeg den første matrisen med den andre matrisen med array_replace
foreach ($Forandretliste as $liste2 => $verdi) {
    print_r("<b>$liste2</b>: $verdi</b><br>");
}
$Økning = 10; //Her lager jeg en variabel med 10 med tanke på at jeg vil øke indeks med 10

echo "<h3> Matrisen etter indeks blir økt med 10</h3>";
$By2 = array_combine(range($Økning, count($By2) + ($Økning-1)), array_values($By2)); // Dette gjør jeg for å combine 2 arraylister og øke indeksene med 10.

foreach($By2 as $Endretliste => $nyverdi){ //Dette er for å printe den nye listen med indeksene økt med 10.
    print_r("<b>$Endretliste</b>: $nyverdi</b><br>");
}


















?>
</body>
</html>