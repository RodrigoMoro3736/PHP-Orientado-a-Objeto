<?php
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        public function mudarTrabalho($set) {
                if ($this->getTrabalhando()) {
                        $this->setSetor($set);
                } else {
                        echo "<p>Erro! O(a) funcionario(a) {$this->getNome()} não está trabalhando!</p>";
                }
        }

        public function getSetor() {
                return $this->setor;
        }
        public function setSetor($setor) {
                $this->setor = $setor;
        }
        public function getTrabalhando() {
                return $this->trabalhando;
        }
        public function setTrabalhando($trabalhando) {
                $this->trabalhando = $trabalhando;
        }
    }
?>