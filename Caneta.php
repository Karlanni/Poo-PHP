<?php

class Caneta {

    public $modelo;
    private $cor;   
    private $ponta;
    private $tampada;

   /* public function __construct() {

        $this->cor = "azul";
        $this->tampar();
    }*/

    public function Caneta($m, $c, $p) { //Método construtor. Ele pode ter o mesmo nome da calsse

        //$this->setModelo(); ou
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
        
    }

    public function tampar() {

        $this->tampada = true;
    }
   
    public function getModelo() {
        
        return $this->modelo;
    }

    public function setModelo($m) {

        $this->modelo = $m;
    }

    public function getPonta() {

        return $this->ponta;
    }

    public function setPonta($p) {

        $this->ponta =  $p;
        
    }
}


