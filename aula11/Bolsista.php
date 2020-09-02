<?php
    require_once 'Aluno.php';
    class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa de {$this->getNome()} renovada!</p>";
        }
        public function pagarMensalidade() {
            echo "<p>Mensalidade de bolsista de {$this->getNome()} paga!</p>";
        }
        public function getBolsa() {
                return $this->bolsa;
        } 
        public function setBolsa($bolsa) {
                $this->bolsa = $bolsa;
        }
    }
?>