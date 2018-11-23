<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class Cartatest extends TestCase{
    public function testcartaTipo(){
        $carta = new Carta("rojo",5,"poker");
        $this->assertEquals($carta->obtenertipo(),"poker"); 
       
    }
    public function testcartaPalo(){
        $carta = new Carta("rojo",5,"poker");
        $this->assertEquals($carta->obtenerpalo(),"rojo");
        
    }
    public function testcartaNumero(){
        $carta = new Carta("rojo",5,"poker");
        $this->assertEquals($carta->obtenernumero(),5);
    }
}
