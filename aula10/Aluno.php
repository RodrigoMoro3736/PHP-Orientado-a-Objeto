<?php
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        private $matr;
        private $curso;

        public function cancelarMatr() {
                if ($this->getMatr()) {
                        $this->setMatr(false);
                } else {
                        echo "<p>Erro! A matricula de {$this->getNome()} já está cancelada!</p>";
                }
        }
        
        public function getMatr() {
                return $this->matr;
        }
        public function setMatr($matr) {
                $this->matr = $matr;
        }
        public function getCurso() {
                return $this->curso;
        }
        public function setCurso($curso) {
                $this->curso = $curso;
        }
    }
?>