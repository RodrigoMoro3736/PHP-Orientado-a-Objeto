<?php
    require_once 'Animal.php';
    class Reptil extends Animal {
        private $corEscama;

        public function locomover() {
            echo "<p>Se locomove rastejando.</p>";
        }
        public function alimentar() {
            echo "<p>Come vegetais.</p>";
        }
        public function emitirSom() {
            echo "<p>Faz som de reptil.</p>";
        }

        public function getCorEscama() {
                return $this->corEscama;
        }
        public function setCorEscama($corEscama) {
                $this->corEscama = $corEscama;
        }
    }
?>