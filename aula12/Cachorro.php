<?php
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero {
        public function enterrarOsso() {
            echo "<p>Cachorro enterrou o osso.</p>";
        }
        public function abanarRabo() {
            echo "<p>Cachorro abanou o rabo.</p>";
        }
    }
?>