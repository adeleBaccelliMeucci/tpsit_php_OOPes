<?php

class Alunno implements jsonserializable{
    protected $nome;
    protected $cognome;
    protected $eta;

    function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    function getNome(){
        return $this->nome;
    }
    function getCognome(){
        return $this->cognome;
    }
    function getEta(){
        return $this->eta;
    }

    function setNome(){
        $this -> nome = $nome; 
    }
    function setCognome(){
        $this -> cognome = $cognome; 
    }
    function setEta(){
        $this -> eta = $eta; 
    }


    function stampa(){
        echo "<p>nome: " . $this -> nome . ", cognome: " . $this -> cognome . ", età: " . $this -> eta ."</p>";
    }

    public function jsonSerialize(): array {
        return[
            'nome' => $this->nome,
            'cognome' => $this->cognome,
            'eta' => $this->eta,

        ];
    }
}


?>