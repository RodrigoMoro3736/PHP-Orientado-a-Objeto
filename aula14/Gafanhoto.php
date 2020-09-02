<?php
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        public function Gafanhoto($nom, $ida, $sex, $log) {
            parent::Pessoa($nom, $ida, $sex);
            $this->setLogin($log);
            $this->setTotAssistido(0);
        }

        public function viuMaisUm() {
            $this->setTotAssistido($this->getTotAssistido() + 1);
        }
        
        public function getLogin() {
                return $this->login;
        }
        public function setLogin($login) {
                $this->login = $login;
        }
        public function getTotAssistido() {
                return $this->totAssistido;
        }
        public function setTotAssistido($totAssistido) {
                $this->totAssistido = $totAssistido;
        }
    }
?>