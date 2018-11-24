<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $carta1 = new Carta("rojo",1,"poker");
        $carta2= new Carta("rojo",2,"poker");
        $carta3 = new Carta("rojo",3,"poker");
        $carta4 = new Carta("rojo",4,"poker");
        $cartas = array($carta1,$carta2,$carta3,$carta4);
        $mazo = new Mazo($cartas);
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $carta1 = new Carta("rojo",1,"poker");
        $carta2= new Carta("rojo",2,"poker");
        $carta3 = new Carta("rojo",3,"poker");
        $carta4 = new Carta("rojo",4,"poker");
        $carta5 = new Carta("rojo",5,"poker");
        $carta6 = new Carta("rojo",6,"poker");
        $carta7 = new Carta("rojo",7,"poker");
        $carta8 = new Carta("rojo",8,"poker");
        $carta9 = new Carta("rojo",9,"poker");
        $cartas = array($carta1,$carta2,$carta3,$carta4);
        $mazo = new Mazo($cartas);
        $this->assertNotEquals($mazo->mezclar(),$cartas);
    }
    
    public function testCantcartas(){
        $carta1 = new Carta("rojo",1,"poker");
        $carta2= new Carta("rojo",2,"poker");
        $carta3 = new Carta("rojo",3,"poker");
        $carta4 = new Carta("rojo",4,"poker");
        $cartas = array($carta1,$carta2,$carta3,$carta4);
        $mazo = new Mazo($cartas);
        $this->assertEquals($mazo->obtenerCantidadCartas(),4);
    }
    
    public function testNoEstaVacio(){
        $carta1 = new Carta("rojo",1,"poker");
        $carta2= new Carta("rojo",2,"poker");
        $carta3 = new Carta("rojo",3,"poker");
        $carta4 = new Carta("rojo",4,"poker");
        $cartas = array($carta1,$carta2,$carta3,$carta4);
        $mazo = new Mazo($cartas);
        $this->assertNotEquals($mazo->obtenerCantidadCartas(),0);
    }
    public function testEstaVacio(){
        $cartas = array();
        $mazo = new Mazo($cartas);
        $this->assertEquals($mazo->obtenerCantidadCartas(),0);
    }

    public function testCortar(){
        $carta1 = new Carta("rojo",1,"poker");
        $carta2= new Carta("rojo",2,"poker");
        $carta3 = new Carta("rojo",3,"poker");
        $carta4 = new Carta("rojo",4,"poker");
        $cartas = array($carta1,$carta2,$carta3,$carta4);
        $mazo = new Mazo($cartas);
        $mazo->cortar();
        $this->assertNotEquals($mazo->obtenerCartas(),$cartas);
        $this->assertEquals($mazo->obtenerCantidadCartas(),4);
    }    

    public function testAgregarUnaCarta(){
        $carta1 = new Carta("rojo",1,"poker");
        $carta2= new Carta("rojo",2,"poker");
        $carta3 = new Carta("rojo",3,"poker");
        $carta4 = new Carta("rojo",4,"poker");
        $cartas = array($carta1,$carta2,$carta3,$carta4);
        $mazo = new Mazo($cartas);
        $carta = array (new Carta("rojo",9,"poker"));
        $mazo -> agregarcartas($carta);
        $this->assertEquals($mazo->obtenerCantidadCartas(),5); 
    }

    public function testobtenrUnaCarta(){
        $carta1 = new Carta("rojo",1,"poker");
        $cartas = array($carta1);
        $mazo = new Mazo($cartas);
        $carta = $mazo->sacarunacarta();
        $this->assertEquals($cartas[$carta],new Carta("rojo",1,"poker"));
    }
}
