<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 5">
  <h1>Oppgave 1 Standardavvik</h1>
</head>
<body>
<?php


function add($verdier)

 {
    
    $antallverdier = count($verdier); //dette gjør jeg for å finne ut av summen av variabelen $verdier. 
    $varianse = 0.0;

    $Gjennomsnittet = array_sum($verdier)/$antallverdier; //slik finner jeg ut av gjennomsnittet
    echo "Gjennomsnittet er  " . $Gjennomsnittet . "<br>";
   
          
    foreach($verdier as $i)
    {
        // sum of squares of differences between 
                    // all numbers and means.
        $varianse += pow(($i - $Gjennomsnittet), 2);
    }
      
    $standardavvik= (float)sqrt($varianse/$antallverdier); //slik finner jeg ut av standardavviket. 
    echo "<br>standardavviket er $standardavvik<br>";

}

// Her definerer jeg hva verdiene i variabelene skal bli
$verdier = array(1,2,3,4);

print_r(add($verdier));





?> 
</body>
</html>