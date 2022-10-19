<?php

class Bruker {
public $fnavn;
public $enavn;
protected $bnavn;
public $leder;

public function fullt_navn() {
return $this->fnavn . " " . $this->enavn;
}

protected function tilgang() {
return $this->admin() ? "Admin" : "Medlem";
}

private function admin() {
return $this->admin === true;
}
}

?>