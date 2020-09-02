<?php
    require_once 'pessoa.php';
    require_once 'publicacao.php';
    class livro implements publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function livro($tit, $aut, $tot, $lei) {
            $this->setTitulo($tit);
            $this->setAutor($aut);
            $this->setTotPaginas($tot);
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($lei);
        }

        public function detalhes() {
            echo "</br>Titulo: " . $this->getTitulo() . "</br>";
            echo "Autor: " . $this->getAutor() . "</br>";
            echo $this->getTotPaginas() . " páginas</br>";
            echo "Sendo lido por: " . $this->getLeitor()->getNome() . "</br>";
            echo "Página atual: " . $this->getPagAtual() . "</br>";
        }
        public function abrir() {
            if ($this->getAberto() == false) {
                $this->setAberto(true);
                echo "</br>O livro " . $this->getTitulo() . " foi aberto!</br>";
            } else {
                echo "</br>O livro já está aberto!</br>";
            }
        }
        public function fechar() {
            if ($this->getAberto()) {
                $this->setAberto(false);
                echo "</br>O livro " . $this->getTitulo() . " foi fechado</br>";
            } else {
                echo "</br>O livro já está fechado!</br>";
            }
        }
        public function folhear($f) {
            if ($f > $this->getTotPaginas()) {
                $this->setPagAtual(0);
            } else {
                $this->setPagAtual($f);
            }
        }
        public function avancarPag() {
            if (($this->getPagAtual() + 1) < $this->getTotPaginas()) {
                $this->setPagAtual($this->getPagAtual() + 1);
            } else {
                echo "<p>Impossivel avançar página!</p>";
            }
        }
        public function voltarPag() {
            if (($this->getPagAtual() - 1) > 0) {
                $this->setPagAtual($this->getPagAtual() - 1);
            } else {
                echo "<p>Impossivel voltar página!</p>";
            }
        }

        public function getTitulo() {
                return $this->titulo;
        }
        public function setTitulo($titulo) {
                $this->titulo = $titulo;
        }
        public function getAutor() {
                return $this->autor;
        }
        public function setAutor($autor) {
                $this->autor = $autor;
        }
        public function getTotPaginas() {
                return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas) {
                $this->totPaginas = $totPaginas;
        }
        public function getPagAtual() {
                return $this->pagAtual;
        }
        public function setPagAtual($pagAtual) {
                $this->pagAtual = $pagAtual;
        }
        public function getAberto() {
                return $this->aberto;
        }
        public function setAberto($aberto) {
                $this->aberto = $aberto;
        }
        public function getLeitor() {
                return $this->leitor;
        }
        public function setLeitor($leitor) {
                $this->leitor = $leitor;
        }
    }
?>