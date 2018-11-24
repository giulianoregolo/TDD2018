<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class Cartatest extends TestCase{
    public function testcartaTipo(){
        $carta = new Carta("rojo",5,"poker");
        $tipo = $carta->obtenertipo();
        $this->assertEquals($tipo,"poker"); 
       
    }
    public function testcartaNumero(){
        $carta = new Carta("rojo",5,"poker");
        $palo = $carta->obtenerpalo();
        $this->assertEquals($palo,"rojo");
        
    }
    public function testcartaPalo(){
        $carta = new Carta("rojo",5,"poker");
        $numero = $carta->obtenernumero();
        $this->assertEquals($numero,5);
    }
}
