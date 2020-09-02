<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nom, $nac, $ida, $alt, $pes, $vit, $der, $emp) {
            $this->setNome($nom);
            $this->setNacionalidade($nac);
            $this->setIdade($ida);
            $this->setAltura($alt);
            $this->setPeso($pes);
            $this->setVitorias($vit);
            $this->setDerrotas($der);
            $this->setEmpates($emp);
        }
        public function apresentar() {
            echo "<h3>Nome: " . $this->getNome() . "</h3>";
            echo "País: " . $this->getNacionalidade() . "<br/>";
            echo $this->getIdade() . " anos<br/>";
            echo "Altura: " . $this->getAltura() . "m<br/>";
            echo "Peso: " . $this->getPeso() . "Kg<br/>";
            echo "Categoria: " . $this->getCategoria() . "<br/>";
            echo $this->getVitorias() . " Vitórias<br/>";
            echo $this->getDerrotas() . " Derrotas<br/>";
            echo $this->getEmpates() . " Empates<br/>";
        }
        public function status() {
            echo "<h3>Nome: " . $this->getNome() . "</h3>";
            echo "Categoria: " . $this->getCategoria() . "<br/>";
            echo $this->getVitorias() . " Vitórias<br/>";
            echo $this->getDerrotas() . " Derrotas<br/>";
            echo $this->getEmpates() . " Empates<br/>";
        }
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        public function getNome() {
                return $this->nome;
        }
        public function setNome($nome) {
                $this->nome = $nome;
        }
        public function getNacionalidade() {
                return $this->nacionalidade;
        }
        public function setNacionalidade($nacionalidade) {
                $this->nacionalidade = $nacionalidade;
        }
        public function getIdade() {
                return $this->idade;
        }
        public function setIdade($idade) {
                $this->idade = $idade;
        }
        public function getAltura() {
                return $this->altura;
        }
        public function setAltura($altura) {
                $this->altura = $altura;
        }
        public function getPeso() {
                return $this->peso;
        }
        public function setPeso($peso) {
                $this->peso = $peso;
                $this->setCategoria();
        }
        public function getCategoria() {
                return $this->categoria;
        }
        private function setCategoria() {
                if ($this->getPeso() < 52.2) {
                    $this->categoria = "Inválido";
                } elseif ($this->getPeso() <= 70.3){
                    $this->categoria = "Leve";
                } elseif ($this->getPeso() <= 83.9) {
                    $this->categoria = "Médio";
                } elseif ($this->getPeso() <= 120.2) {
                    $this->categoria = "Pesado";
                } else {
                    $this->categoria = "Inválido";
                }
        }
        public function getVitorias() {
                return $this->vitorias;
        }
        public function setVitorias($vitorias) {
                $this->vitorias = $vitorias;
        }
        public function getDerrotas() {
                return $this->derrotas;
        }
        public function setDerrotas($derrotas) {
                $this->derrotas = $derrotas;
        }
        public function getEmpates() {
                return $this->empates;
        }
        public function setEmpates($empates) {
                $this->empates = $empates;
        }
    }
?>