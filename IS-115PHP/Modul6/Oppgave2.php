<?php


class Bruker
{
    public $fornavn;
    public $etternavn;
    public $brukernavn;
    public $registreringsdato;

function BrukerFornavn() 
{
    echo $this->fornavn ." ". $this->etternavn;
}

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