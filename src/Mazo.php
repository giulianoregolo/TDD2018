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
    shuffle($this->CartasdelMazo);
    return $this->CartasdelMazo;
  }
  
  public function obtenerCantidadCartas(){
    return $this->cantidadcartas;
  }
  
  public function obtenerCartas(){
    return $this->CartasdelMazo;
  }
  public function cortar(){
    $random = rand(0,$this->cantidadcartas);    
    $pedazodemazo = array_slice($this->CartasdelMazo,0,$random);
    $this->CartasdelMazo = array_merge($pedazodemazo,$this->CartasdelMazo);
    return $this->CartasdelMazo;
  }
  
  public function agregarcartas($carta){
    $this->CartasdelMazo = array_merge($carta,$this->CartasdelMazo);
    $this->cantidadcartas ++;
    return $this->CartasdelMazo;
  }

  public function sacarunacarta(){
    $carta = array_rand($this->CartasdelMazo);
    return $carta;
  }

}
