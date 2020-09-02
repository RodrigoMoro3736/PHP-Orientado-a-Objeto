<?php
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
                $this->setSaldo(0);
                $this->setStatus(false);
            }

        public function abrirConta($t) {
                echo "<p>Conta tipo `$t` Aberta para $this->dono!</p>";
                $this->setStatus(true);
                $this->setTipo($t);
                if ($t == "CC") {
                        $this->setSaldo(50);
                        echo "<p>Foi adicionado R$50,00 na sua conta</p>";
                } elseif ($t == "CP") {
                        $this->setSaldo(150);
                        echo "<p>Foi adicionado R$150,00 na sua conta</p>";
                }
        }

        public function fecharConta() {
                if ($this->getSaldo() > 0) {
                        echo "<p>Conta ainda com dinheiro. Saque antes de fechá-la!</p>";
                } elseif ($this->getSaldo() < 0) {
                        echo "<p>Conta em débito. Impossivel fechá-la</p>";
                } else {
                        $this->setStatus(false);
                        echo "<p>Conta de fechada com sucesso!</p>";
                }
        }

        public function depositar($d) {
                if ($this->getStatus()) {
                        $this->setSaldo($this->getSaldo() + $d);
                        echo "<p>Foi depositado R$$d,00 na sua conta!</p>";
                } else {
                        echo "<p>Conta fechada. Impossivel depositar!</p>";
                }
                
        }

        public function sacar($s) {
                if ($this->getStatus() && $this->getSaldo() >= $s) {
                        $this->setSaldo($this->getSaldo() - $s);
                        echo "<p>Foi sacado R$$s,00 da sua conta!</p>";
                } else {
                        echo "<p>Impossivel sacar!</p>";
                }
                }

        public function pagarMensal() {
                if ($this->getStatus()) {
                        if ($this->getTipo() == "CC") {
                                $this->setSaldo($this->getSaldo() - 12);
                                echo "<p>Você pagou R$12,00 da mensalidade!</p>";
                        } elseif ($this->getTipo() == "CP") {
                                $this->setSaldo($this->getSaldo() - 20);
                                echo "<p>Você pagou R$20,00 da mensalidade!</p>";
                        }
                } else {
                        echo "<p>Impossivel pagar mensalidade!</p>";
                }
                }

        public function getNumConta() {
                return $this->numConta;
        }

        public function setNumConta($numConta) {
                $this->numConta = $numConta;
        }

        public function getTipo() {
                return $this->tipo;
        }

        public function setTipo($tipo) {
                $this->tipo = $tipo;
        }

        public function getDono() {
                return $this->dono;
        }

        public function setDono($dono) {
                $this->dono = $dono;
        }

        public function getSaldo() {
                return $this->saldo;
        }

        public function setSaldo($saldo) {
                $this->saldo = $saldo;
        }

        public function getStatus() {
                return $this->status;
        }

        public function setStatus($status) {
                $this->status = $status;
        }
    }
?>