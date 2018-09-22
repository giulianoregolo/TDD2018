<?php

namespace TDD;

class Carta {
    
    protected $palo;

    protected $numero;

    protected $tipo;

    public function __construct($Palo,$Numero,$Tipo){
        $this->$palo = $Palo;
        $this->$numero = $Numero;
        $this->$tipo = $Tipo;
    }


    public function obtenerpalo(){
        return $this->$palo;
    }

    public function obtenernumero(){
        return $this->$numero;
    }

    public function obtenertipo(){
        return $this->$Tipo;
    }
}