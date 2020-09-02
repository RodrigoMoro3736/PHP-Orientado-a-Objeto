<?php
    require_once 'Aula07Class.php';
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rouds;
        private $aprovada;

        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
                echo "<p>Luta aprovada e marcada!</p>";
            } else {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
                echo "<p>Luta não aprovada</p>";
            }
        }
        public function lutar() {
            if ($this->getAprovada()) {
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0, 2);
                switch ($vencedor) {
                    case 0:
                        echo "<p>Empatou!</p>";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1:
                        echo "<p>Ganhador: " . $this->getDesafiado()->getNome() . "</p>";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 2:
                        echo "<p>Ganhador: " . $this->getDesafiante()->getNome() . "</p>";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                        break;
                }
            } else {
                echo "<p>A luta não pode acontecer!</p>";
            }
        }

        public function getDesafiado() {
                return $this->desafiado;
        }
        public function setDesafiado($desafiado) {
                $this->desafiado = $desafiado;
        }
        public function getDesafiante() {
                return $this->desafiante;
        }
        public function setDesafiante($desafiante) {
                $this->desafiante = $desafiante;
        }
        public function getRouds() {
                return $this->rouds;
        }
        public function setRouds($rouds) {
                $this->rouds = $rouds;
        }
        public function getAprovada() {
                return $this->aprovada;
        }
        public function setAprovada($aprovada) {
                $this->aprovada = $aprovada;
        }
    }
?>