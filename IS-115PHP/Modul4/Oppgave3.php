<html>
<body>
  <head>
    <title>Registrering av bruker</title>
  </head>
  <?php

  //Her lager jeg en array med brukerinformasjon. 
  $Bruker1 = array (
    'Fornavn'     => 'Abdul Rahman',
    'Etternavn'   => 'Kasim',
    'E-post'      => 'Abdul-Kasim@hotmail.com',
    'Telefon'     => 41384997,
    'Fødselsdato' => '2000-06-13'
)
?>
<pre>
  <h2>Eksisterende informasjon:</h2>
<form method="post" action="">
  Fornavn: <input type="text" name="fnavn" value= <?php 
  if (empty($_REQUEST['fnavn'])) { //Sjekker om inputen står tom eller ikke
    echo $Bruker1['Fornavn']; //Hvis den er tom, så hentes det fra listen bruker1
  } else 
    echo $_REQUEST['fnavn']; //hvis ikke, vil det man skriver inn bli valuen
  ?> 
  placeholder="fornavn" required><br>

  Etternavn: <input type="text" name="enavn" value=<?php 
  if (empty($_REQUEST['enavn'])) {
    echo $Bruker1['Etternavn']; 
  } else 
    echo $_REQUEST['enavn']; 
  ?>
   placeholder="etternavn" required><br>


  E-post: <input type="email" name="epost" value=<?php 
  if (empty($_REQUEST["epost"])) {
    echo $Bruker1['E-post']; 
  } else 
    echo $_REQUEST['epost']; 
  ?>
   placeholder="E-post" required><br>


  Telefon: <input type="tel" name="tlf" value=<?php 
  if (empty($_REQUEST['tlf'])) {
    echo $Bruker1['Telefon']; 
  } else 
    echo $_REQUEST['tlf']; 
  ?>
   placeholder="telefon" required><br>


  Fødselsdato: <input type="date" name="fdato" value=<?php 
  if (empty($_REQUEST['fdato'])) {
    echo $Bruker1['Fødselsdato']; 
  } else 
    echo $_REQUEST['fdato']; 
  ?> 
  placeholder="Fødselsdato" required><br>


  <input type="submit" name="endre" value="Endre">  
</form>
</pre>

<?php

// Dette gjør vi slik at når vi trykker endre knappen, så skal verdiene bli endret. //
   if(isset($_REQUEST['endre'])) {
    
  $Bruker1 = array(
  'fornavn' => $_REQUEST['fnavn'],
  'etternavn'=> $_REQUEST['enavn'],
  'E-post' => $_REQUEST['epost'],
  'telefon' => $_REQUEST['tlf']
); 

echo "<h3> Endret informasjon:</h3>";
foreach ($Bruker1 as $brukere => $value) { // Her bruker jeg en foreach loop for å printe ut det som ble endret. 
  print_r("<b>$brukere</b>: $value</b><br>");
}
}

?>
</body>
</html>