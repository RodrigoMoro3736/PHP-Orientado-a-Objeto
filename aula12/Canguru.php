<?php
    require_once 'Mamifero.php';
    class Canguru extends Mamifero {
        public function usarBolsa() {
            echo "<p>Canguru usando sua bolsa.</p>";
        }
        public function locomover() {
            echo "<p>Se locomove pulando.</p>";
        }
    }
?>