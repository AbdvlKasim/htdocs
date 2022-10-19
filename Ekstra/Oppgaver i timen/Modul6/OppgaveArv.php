<?php

class Motorvogn {
public $skiltnummer;
public $farge;
public $pris;
public $årsmodell;


public function info_motorvogn() {
    return $this->skiltnummer . " " . $this->årsmodell;
}
}

class Ducati extends Motorvogn {
    public $hestekrefter;
}

class BMW extends Motorvogn {
    public $Antallseter;
} 