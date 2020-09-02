<?php
    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $membros;

        public function Animal($pes, $ida, $mem) {
            $this->setPeso($pes);
            $this->setIdade($ida);
            $this->setMembros($mem);
        }
        public function status() {
            echo "<p>Peso: {$this->getPeso()}Kg.</p>";
            echo "<p>Idade: {$this->getIdade()} anos.</p>";
            echo "<p>Quantidade de membros: {$this->getMembros()}.</p>";
        }
        abstract public function locomover();
        abstract public function alimentar();
        abstract public function emitirSom();

        public function getPeso() {
                return $this->peso;
        }
        public function setPeso($peso) {
                $this->peso = $peso;
        }
        public function getIdade() {
                return $this->idade;
        }
        public function setIdade($idade) {
                $this->idade = $idade;
        }
        public function getMembros() {
                return $this->membros;
        }
        public function setMembros($membros) {
                $this->membros = $membros;
        }
    }
?>