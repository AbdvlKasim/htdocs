
<html>
  <head>
    <title>Registrering av bruker</title>
  </head>
<body>
<pre>
<!-- Her lager jeg en skjema i html hvor jeg fyller inn brukerinformasjon -->
<form method="post" action="">
  Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" pattern=^[a-zA-Z\s]+$><br>
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" pattern=^[a-zA-Z\s]+$><br>
  E-post: <input type="email" name="epost" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" placeholder="E-post"><br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" pattern ="[0-9]{8}"><br>
  Fødselsdato: <input type="date" name="fdato" value="2001-05-05"><br>
  <input type="submit" name="registrer" value="Registrér">
</form>
</pre>
</body>
</html>

<?php
// Dette gjør vi slik at når vi trykker registrer knappen, så vil vi få opp verdiene vi har skrevet inn. //
if(isset($_REQUEST['registrer'])) {
  $Bruker = array(
    'Fornavn'     => $_REQUEST['fnavn'],
    'Etternavn'   => $_REQUEST['enavn'],
    'E-post'      => $_REQUEST['epost'],
    'Telefon'     => $_REQUEST['tlf'],
    'Fødselsdato' => $_REQUEST['fdato']
  );

    echo "Følgende bruker som ble registrert er: <br>";
    echo "<br>";
    foreach($Bruker as $brukeren => $verdi) { //bruker foreach loop her for å printe ut brukeren som ble registrert.
      print_r("$brukeren : $verdi</b><br>");
    }

}





?>