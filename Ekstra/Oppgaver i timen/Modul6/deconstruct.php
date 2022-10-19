<?php

class Bruker {
public static $ant_brukere = 0;
public function __destruct() {
self::$ant_brukere--;
echo "Antall brukere er redusert til " . 
self::$ant_brukere . "<br>";
}
}
$b = new Bruker;
echo Bruker::$ant_brukere;

?>