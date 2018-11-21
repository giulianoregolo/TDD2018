<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class Cartatest extends TestCase{
    public function testcarta(){
        $carta = new Carta("rojo",5,"poker");
        $palo = $this->obtenerpalo();
        $numero = $this->obtenernumero();
        $tipo = $this->obtenertipo();
        $this->assertEquals($tipo,"poker"); 
        $this->assertEquals($palo,"rojo");
        $this->assertEquals($numero,5);
        
    }
}
