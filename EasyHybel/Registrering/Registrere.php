

<!DOCTYPE html>
<html>
<head>

    <title>JSP - Hello World</title>
    <link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>


<div id="inputOgKnapper">

    <h1>Registrer deg</h1>

<form>
  <label for="fname">Fornavn</label><br>
  <input type="text" id="fname" name="fname" placeholder="skriv inn fornavnet ditt"><br>
  <label for="lname">Etternavn:</label><br>
  <input type="text" id="lname" name="lname" placeholder="skriv inn etternavnet ditt"> 
  <label for="epost">E-post:</label><br>
  <input type="text" id="epost" name="epost" placeholder="skriv inn e-posten din"> 
  <label for="tlfnummer">telefonnummer</label><br>
  <input type="text" id="tlfnummer" name="tlfnummer" placeholder="skriv inn telefonnummeret ditt"> 
  <br><br> 
  <input type="button" class="button_active" onclick="location.href='';" value="Registrer"/>

</form>


</body>
</html>