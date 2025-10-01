<?php

Class Caneta{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function Caneta($m, $c,$p) { //OU __construct
          $this->cor = $c;
          $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;}

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){ 
        $this->modelo = $modelo;}
    
}