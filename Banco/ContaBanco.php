<?php
    class ContaBanco 
    {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos
        public function abrirConta($t)
        {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } elseif ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta()
        {
            if ($this->getSaldo() > 0) {
                echo "<p>ERROR! Conta com dinhero!</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>ERRO! Você está em Débito</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta de ".$this->getDono()." encerrada.</p>";
            }
            
        }

        public function depositar($v)
        {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$ $v realizado na conta de " .$this->getDono(). "</p>";
            } else {
                echo "<p>ERROR! Conta fechada!</p>";
            }
        }

        public function sacar($v)
        {
            if ($this->getStatus()) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de " .$this->getDono(). "</p>";
                } else {
                    echo "<p>ERRO! Saldo insuficiente</p>";                    
                }
            } else {
                echo "<p>ERROR! Essa conta não existe</p>";
            }   
        }

        public function pagarPacote()
        {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } else if ($this->getTipo() == "CP") {
                $v = 20;
            }
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de " .$this->getDono(). "</p>";
            } else {
                echo "<p>ERROR! Problemas com a conta</p>";
            }
        }

        // Métodos especiais
        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function getNumConta()
        {
            return $this->numConta;
        }

        public function setNumConta($numConta)
        {
            $this->numConta = $numConta;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function getDono()
        {
            return $this->dono;
        }

        public function setDono($dono)
        {
            $this->dono = $dono;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function setStatus($status)
        {
            $this->status = $status;
        }

    }
    