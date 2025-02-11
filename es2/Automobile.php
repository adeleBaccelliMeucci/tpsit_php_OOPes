<?php
include "Veicolo.php";
class Automobile extends Veicolo{
    protected $modello;

    function getModello(){
        return $this -> modello;
    }
}

?>