<?php
class Caneta {
    # Atributos:
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    # Getters, Setters e Construct
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setPonta($p) {
        $this->ponta = $p;
    }

    public function __construct() { // ´__construct` ou o mesmo nome da classe `Caneta´.
        /* Posso declarar os valores para serem preenchidos na criação
        do objeto na pagina principal:
                    public function __construct($m, $c, $p) {
                        $this->modelo = $m;
                        $this->cor = $c;
                        $this->ponta = $p
                    }
        Lá na página principal ficaria assim:
                    $c1 = new Caneta("BIC", "Azul", 0.7);
                    */
        $this->modelo = "BIC";
        $this->cor = "Azul";
        $this->ponta = 0.7;
        $this->carga = 100;
        $this->tampar();
    }

    #Métodos:
    public function escrever() {
        if ($this->tampada == true) {
            echo "<p>Não posso escrever!</p>";
        } else {
            echo "<p>Estou escrevendo...</p>";
        }
    }

    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }

    public function pintar() {
        if ($this->tampada == true) {
            echo "<p>Não posso pintar!</p>";
        } else {
            echo "<p>Estou pintando...</p>";
        }
    }

    private function tampar() {
        $this->tampada = true;
    }

    private function destampar() {
        $this->tampada = false;
    }

}
# set = metodo para modificar, inserir um dado no objeto (tem que declarar variavel entre () e não tem return)
# get = metodo para acessar o dado do objeto (não declara variavel entre () e tem return)
# construct = metodo para deixar os valores padrões já declarados (pode ser usado __construct ou o mesmo nome da classe)
?>