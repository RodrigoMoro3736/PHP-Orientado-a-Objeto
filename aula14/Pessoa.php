<?php
    abstract class Pessoa {
        private $nome;
        private $idade;
        private $sexo;
        private $experiencia;

        public function Pessoa($nom, $ida, $sex) {
            $this->setNome($nom);
            $this->setIdade($ida);
            $this->setSexo($sex);
            $this->setExperiencia(0);
        }

        private function ganharExp() {
                $this->setExperiencia($this->getExperiencia() + 1);
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
        public function getExperiencia() {
                return $this->experiencia;
        }
        public function setExperiencia($experiencia) {
                $this->experiencia = $experiencia;
        }
    }
?>