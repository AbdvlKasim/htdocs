<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 5</title>
  <meta name="description" content="Oppgave 5">
  <h1>Oppgave 5 Kryptering</h1>
</head>
<body>
    <?php

    //Lager Først og fremst en string som jeg skal kryptere og dekryptere senere 
    $string = " Jeg er en student ";
    echo "Vanlig string'<b>$string</b>' \n"; // Printer vanlige formen av string
    
    $krypter = encrypt($string); // caller den første funksjonen, som krypterer den vanlige stringen over
    
    $dekrypter = decrypt($krypter); // caller dekrypterings funksjonen slik at den skal kjøre etter encrypt

    
    function encrypt($stringInput) {
      
      $liste = str_split($stringInput); // str_Split gjør at stengen blir splittet opp og hver bokstav settes inn i en array.
      
      $array = []; // Lager en tom matrise for å føre inn tallene jeg får fra loopen.
      
      // bruker foreach til å gå gjennom arrayen, og krypterer hver bokstav og fører det inn i et nytt og tomt array.
      foreach ($liste as $char) {
        $kryptert = ord($char); // ord() funksjonen krypterer til ASCII
        $array[] = (string)$kryptert; //Fører tallene inn i det tomme arrayet, og gjør det om til string for å få riktig datatype
      }
      
      $kryptertString = implode("", $array); // Setter sammen arrayet om til en string
      
      echo "<br>";
      echo "<br>Den krypterte strengen er: <b>'$kryptertString'</b>"; // her Printer jeg den krypterte versjonen

      return $array;
      
    }
    
    
    // Denne funksjonene tar inn det nye arrayet fra encrypt() og dekrypterer.
    function decrypt($input) {
      $array = []; // Lager nok et nytt array for å føre inn alle bokstavene igjen etter de-kryptering
      
      // Looper gjennom arrayet, og dekrypterer og fører inn i nytt array.
      foreach ($input as $char) {
        $dekrypt = chr($char); // chr() de-krypterer og gjør om fra ASCII til tekst
        $array[] = (string)$dekrypt;
      }
      
      $dekrypterString = implode("", $array); // Setter sammen til en String igjen
      
      echo "<br>";
      echo "<br>Den de-krypterte strenger er: <b>'$dekrypterString'</b>";
    }

    ?>
</body>
</html>