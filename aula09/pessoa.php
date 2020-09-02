<?php
    require_once 'livro.php';
    class pessoa {
        private $nome;
        private $idade;
        private $sexo;

        public function pessoa($nom, $ida, $sex) {
            $this->setNome($nom);
            $this->setIdade($ida);
            $this->setSexo($sex);
        }

        public function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
            echo "</br>Parabéns pelo seu aniversário " . $this->getNome() . "!!!</br>";
        }
        public function getNome() {
                return $this->nome;
        }
        public function setNome($nome) {
                $this->nome = $nome;
        }
        public function getIdade() {
                return $this->idade;
        }
        public function setIdade($idade) {
                $this->idade = $idade;
        }
        public function getSexo() {
                return $this->sexo;
        }
        public function setSexo($sexo) {
                $this->sexo = $sexo;
        }
    }
?>