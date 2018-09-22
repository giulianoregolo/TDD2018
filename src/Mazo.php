<?php

namespace TDD;

class Mazo {
   
  protected $CartasdelMazo;
   
  protected $cantidadcartas;
  
  public function __construct($cartas){
     $this->CartasdelMazo = $cartas; 
     $this->cantidadcartas= count($cartas);
  }
  
  public function mezclar() {
    $this->CartasdelMazo = shuffle($this->CartasdelMazo);
    return $this->CartasdelMazo;
  }
  
  public function obtenerCantidadCartas(){
    return $this->cantidadcartas;
  }
  
  public function obtenerCartas(){
    return $this->CartasdelMazo;
  }
  public function cortar(){
    

    return $this->CartasdelMazo;
  }
  
  public function agregarcartas($carta){
    $this->CartasdelMazo = array_merge($carta,$this->CartasdelMazo);
    return $this->CartasdelMazo;
  }

}
