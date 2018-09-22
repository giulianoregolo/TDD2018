<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class Cartatest extends TestCase{
    public function testcarta(){
        $carta = new Carta("rojo",5,"poker");
        $this->assertEquals($carta->obtenertipo(),"poker"); 
        $this->assertEquals($carta->obtenerpalo(),"rojo");
        $this->assertEquals($carta->obtenernumero(),5);
    }
}