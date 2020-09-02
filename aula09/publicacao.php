<?php
    interface publicacao {
        public function abrir();
        public function fechar();
        public function folhear($f);
        public function avancarPag();
        public function voltarPag();
    }
?>