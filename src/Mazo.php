<?php

namespace TDD;

class Mazo {
   
  protected $CartasdelMazo;
   
  protected $cantidadcartas;
  
  public function __construct($cartas){
     $cont=0;
   while($cont > $Cant){
      $this->CartasdelMazo[$cont] = $cartas[$cont]; 
   
   }   
     $this->cantidadcartas= $cont;
  }
  
  public function mezclar() {
    return TRUE;
  }
  
  public function obtenerCantidadCartas(){
  return $this->cantidadcartas;
  }
  
  
}
