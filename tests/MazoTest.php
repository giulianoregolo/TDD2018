<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo($CantidadCartas);
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo($CantidadCartas);
        $this->assertTrue($mazo->mezclar());
    }
    
    public function testCantcartas(){
        $CantidadCartas = 40;
        $mazo = new Mazo($CantidadCartas);
        $this->assertEquals($mazo->obtenerCantidadCartas(),40);
    }

}
