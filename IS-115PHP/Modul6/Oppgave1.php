<?php

class Bruker
{
    public $fornavn;
    public $etternavn;
    public $brukernavn;
    public $registreringsdato;

function BrukerFornavn() 
{
    echo $this->fornavn;
    echo $this->etternavn;
}

function FinnRegistreringsDato() 
{
    $this->registreringsdato;
}

}

$Bruker1 = new Bruker();

$Bruker1->fornavn = 'Abdul';
$Bruker1->registreringsdato = "18-10-2022";

echo " Bruker 1 har fornavnet " . $Bruker1->fornavn. " og registreringsdatoen " . $Bruker1->registreringsdato;


?>