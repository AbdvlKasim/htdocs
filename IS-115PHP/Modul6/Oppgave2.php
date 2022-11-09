<?php

//Her lager jeg en klasse som heter bruker med de attributene som måtte være med
class Bruker
{
    public $fornavn;
    public $etternavn;
    public $brukernavn;
    public $registreringsdato;
// Her lager jeg en function som printer ut fornavet og etternavnet
function BrukerFornavn() 
{
    echo $this->fornavn ." ". $this->etternavn;
}
//Her lager jeg en function som finner registreringsdatoen som har blitt definert
function FinnRegistreringsDato() 
{
    $this->registreringsdato;
}

}

$Bruker1 = new Bruker();

$Bruker1-> fornavn = 'Abdul';
$Bruker1-> etternavn = 'Kasim';
$Bruker1-> registreringsdato = "18-10-2022";


// Oppgave 2 begynner her

Class Student extends Bruker {
    public $Studentid;


function BrukerFornavn() 
{
    return $this->fornavn . " " . $this->etternavn. " (student)";
}
}


$Student1 = new Student();
$Student1-> fornavn = "Abdul";
$Student1-> etternavn = "Kasim";

echo $Student1->BrukerFornavn();
echo "<br>";
echo $Bruker1->BrukerFornavn();














?>