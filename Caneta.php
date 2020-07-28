<?php

class Caneta {

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampa;

    function rabiscar () {

        if ($this->tampada == true) {

            echo "<p>Erro! Não posso rabiscar...</p>";

        } else {

            echo "<p>Estou rabiscando...</p>";
        }

    }

    function tampar() {

        $this->tampada = true;

    }

    function destampar() {

        $this->tampada = false;

    }
}


