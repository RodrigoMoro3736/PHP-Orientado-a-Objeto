<?php
    require_once 'Animal.php';
    class Mamifero extends Animal {
        private $corPelo;

        public function locomover() {
            echo "<p>Se locomove correndo.</p>";
        }
        public function alimentar() {
            echo "<p>Se alimenta mamando.</p>";
        }
        public function emitirSom() {
            echo "<p>faz som de mamifero.</p>";
        }

        public function getCorPelo() {
                return $this->corPelo;
        }
        public function setCorPelo($corPelo) {
                $this->corPelo = $corPelo;
        }
    }
?>