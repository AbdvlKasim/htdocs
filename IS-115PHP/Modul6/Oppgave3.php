<?php


//Her lager jeg en tom array, hvor jeg vil ha inn slettede brukere
$SlettedeBrukere = [];

class Bruker
{
    var       $fornavn;
    var       $etternavn;
    protected $brukernavn;
    protected $registreringsdato;


    //Her lager jeg en construct som henter tilfeldige brukernavn og registreringsdato og tid idag.
    function __construct() {
        $this->brukernavn = $this->bruker_Navn();
        $this->registreringsdato = date("d.m.y H:i:s");
    }

    //Her lager jeg en metode for å tilfeldiggjøre brukernavn.
    function bruker_Navn() {
        
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
     
        for ($i = 0; $i < 5; $i++) {
            $tilfeldig = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$tilfeldig];
        } 
     
        return $randomString;
    }

    //Her lager jeg en destructor for å lagre tilfeldige brukernavn
    function __destruct()
    {
        echo $this->brukernavn = $this->bruker_Navn();

    }
}

    //Her lager jeg en student klasse som arver fra bruker
    class Student extends Bruker 
    {
        //Her lager jeg en function som henter studentinformasjonen
        public function StudentInformasjon() {
        $Studentinfo = array(

            "Fornavn"=>$this->fornavn,
            "Brukernavn"=>$this->brukernavn = $this->bruker_Navn(),
            "Registrert dato"=>$this->registreringsdato = date("d.m.y H:i:s")

        );

        //Her lager jeg en foreachløkke for å printe ut studentinfoen, altså nøkkelen (Fornavn) og verdien (Berat)
        foreach($Studentinfo as $nøkkel => $verdi) {
            echo "$nøkkel: $verdi <br>";
        }
            
    }
        //Her lager jeg en destruktor som skal putte de slettede brukere i en matrise som jeg kan printe ut på slutten. 
        function __destruct()
        {
          $SlettedeBrukere[] = $this->brukernavn;

          echo "<br>";
          echo "<br>Brukernavn på studentene som ble sletta: ";
          echo "<br>";
          print_r($SlettedeBrukere); 
          
        }

         
    }

//Her lager jeg two objekter, altså Bachelorstudent og Masterstudent
echo "Bachelor-student: <br>";
$BachelorStudent = new Student();
$BachelorStudent->fornavn = "Berat";
$BachelorStudent->StudentInformasjon();
echo "<br>";

echo "Master-student: <br>";
$MasterStudent = new Student();
$MasterStudent->fornavn = "Simer";
$MasterStudent->StudentInformasjon();


unset($BachelorStudent);
unset($MasterStudent);




?>