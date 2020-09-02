<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function Video($tit) {
            $this->setTitulo($tit);
            $this->setAvaliacao(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        public function like() {
            $this->setCurtidas($this->getCurtidas() + 1);
        }
        public function pause() {
            if ($this->getReproduzindo()) {
                $this->setReproduzindo(false);
            }
        }
        public function play() {
            if ($this->getReproduzindo() == false) {
                $this->setReproduzindo(true);
            }
        }

        public function getReproduzindo() {
                return $this->reproduzindo;
        }
        public function setReproduzindo($reproduzindo) {
                $this->reproduzindo = $reproduzindo;
        }
        public function getCurtidas() {
                return $this->curtidas;
        }
        public function setCurtidas($curtidas) {
                $this->curtidas = $curtidas;
        }
        public function getViews() {
                return $this->views;
        }
        public function setViews($views) {
                $this->views = $views;
        }
        public function getAvaliacao() {
                return $this->avaliacao;
        }
        public function setAvaliacao($avaliacao) {
                $media = ($this->avaliacao + $avaliacao) / $this->views;
                $this->avaliacao = $media;
        }
        public function getTitulo() {
                return $this->titulo;
        }
        public function setTitulo($titulo) {
                $this->titulo = $titulo;
        }
    }
?>