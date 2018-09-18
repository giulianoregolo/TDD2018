<?php

namespace TDD;

class Mazo {
   
  protected $cantidadcartas;
  
  public function __construct($Cant){
   $this->cantidadcartas = $Cant;
  }
  
  public function mezclar() {
    return TRUE;
  }
  
  public function obtenerCantidadCartas(){
  return $this->cantidadcartas;
  }
  
}
