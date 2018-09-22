<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $CantidadCartas;
        $cartas = array(1,2,3,4);
        $mazo = new Mazo($cartas);
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $cartas = array(1,2,3,4);
        $mazo = new Mazo($cartas);
        $this->assertNotEquals($mazo->mezclar(),$cartas);
    }
    
    public function testCantcartas(){
        $CantidadCartas;
        $cartas = array(1,2,3,4);
        $mazo = new Mazo($cartas);
        $this->assertEquals($mazo->obtenerCantidadCartas(),4);
    }
    
    public function testNoEstaVacio(){
        $cartas = array(1,2,3,4);
        $mazo = new Mazo($cartas);
        $this->assertNotEquals($mazo->obtenerCantidadCartas(),0);
    }
    public function testEstaVacio(){
        $cartas = array();
        $mazo = new Mazo($cartas);
        $this->assertEquals($mazo->obtenerCantidadCartas(),0);
    }

    public function testCortar(){
        $cartas = array(1,2,3,4);
        $mazo = new Mazo($cartas);
        $mazo->cortar();
        $this->assertNotEquals($mazo->obtenerCartas(),$cartas);
        $this->assertEquals($mazo->obtenerCantidadCartas(),4);
    }    

    public function testAgregarUnaCarta(){
        $cartas = array(1,2,3,4);
        $mazo = new Mazo($cartas);
        $carta = array (5);
        $mazo -> agregarcartas($carta);
        $this->assertEquals($mazo->obtenerCantidadCartas(),5); 
    }

    public function testobtenrUnaCarta(){
        $cartas = array(1,2,3);
        $mazo = new Mazo($cartas);
        $carta = $mazo->sacarunacarta();
        $this->assertEquals($carta[$carta],1);
    }
}
