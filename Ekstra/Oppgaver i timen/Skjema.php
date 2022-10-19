<?php
// Dette gjør vi slik at når vi trykker registrer knappen, så vil vi få opp verdiene vi har skrevet inn. //
if(isset($_REQUEST['registrer']))
{
    echo "Innhold i skjemaet fra bruker er:<br>";
    echo "Navn: " .$_REQUEST['fnavn'] . " " .$_REQUEST['enavn'] . "<br>";
    echo "Epost: " .$_REQUEST['epost'] . "<br>";
    echo "Tlf: " .$_REQUEST['tlf'] . "<br>";
    echo "F-dato: " .$_REQUEST['fdato'] . "<br>";

    foreach($_REQUEST as $key =>  $value)
    {
        echo $key . ": " . $value . "<br>";

    }

}



?>

<html>
  <head>
    <title>Registrering av bruker</title>
  </head>
<body>
<pre>
<form method="post" action="">
  Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post: <input type="email" name="epost" placeholder="E-post"><br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" value="<?php if(isset($_REQUEST['tlf'])) echo $_REQUEST['tlf']; ?> "><br>
  Fødselsdato: <input type="date" name="fdato" value="2001-05-05"><br>
  <input type="submit" name="registrer" value="Registrér">
</form>
</pre>
</body>
</html>