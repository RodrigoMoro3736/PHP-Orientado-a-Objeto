<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 12 - PHP - CeV</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';

            $m = new Mamifero(15, 4, 4);
            $r = new Reptil(98, 14, 4);
            $p = new Peixe(0.6, 1, 0);
            $a = new Ave(0.1, 17, 2);
            $c1 = new Canguru(120, 5, 2);
            $c2 = new Cachorro(7, 3, 4);
            $c3 = new Cobra(2, 5, 0);
            $t = new Tartaruga(3, 35, 4);
            $g = new Goldfish(0.1, 1, 0);
            $a2 = new Arara(0.5, 5, 2);

            echo "<h3>Mamifero:</h3>";
            $m->status();
            $m->setCorPelo("Preto");
            echo "<p>Cor do pelo: {$m->getCorPelo()}.</p>";
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();
            echo "<hr></br>";

            echo "<h3>Reptil:</h3>";
            $r->status();
            $r->setCorEscama("Verde");
            echo "<p>Cor da escama: {$r->getCorEscama()}.</p>";
            $r->locomover();
            $r->alimentar();
            $r->emitirSom();
            echo "<hr></br>";

            echo "<h3>Peixe:</h3>";
            $p->status();
            $p->setCorEscama("Cinza");
            echo "<p>Cor da escama: {$p->getCorEscama()}.</p>";
            $p->soltarBolha();
            $p->locomover();
            $p->alimentar();
            $p->emitirSom();
            echo "<hr></br>";
            
            echo "<h3>Ave:</h3>";
            $a->status();
            $a->setCorPena("Amarelo");
            echo "<p>Cor das penas: {$a->getCorPena()}.</p>";
            $a->fazerNinho();
            $a->locomover();
            $a->alimentar();
            $a->emitirSom();
            echo "<hr></br>";

            echo "<h3>Canguru:</h3>";
            $c1->status();
            $c1->usarBolsa();
            $c1->locomover();
            $c1->setCorPelo("Marrom");
            echo "<p>Cor do pelo: {$c1->getCorPelo()}.</p>";
            $c1->alimentar();
            $c1->emitirSom();
            echo "<hr></br>";

            echo "<h3>Cachorro:</h3>";
            $c2->status();
            $c2->enterrarOsso();
            $c2->abanarRabo();
            $c2->setCorPelo("Bege");
            echo "<p>Cor do pelo: {$c2->getCorPelo()}.</p>";
            $c2->locomover();
            $c2->alimentar();
            $c2->emitirSom();
            echo "<hr></br>";

            echo "<h3>Cobra:</h3>";
            $c3->status();
            $c3->setCorEscama("Verde");
            echo "<p>Cor da escama: {$c3->getCorEscama()}.</p>";
            $c3->locomover();
            $c3->alimentar();
            $c3->emitirSom();
            echo "<hr></br>";

            echo "<h3>Tartaruga:</h3>";
            $t->status();
            $t->setCorEscama("Verde");
            echo "<p>Cor do casco: {$t->getCorEscama()}.</p>";
            $t->locomover();
            $t->alimentar();
            $t->emitirSom();
            echo "<hr></br>";

            echo "<h3>Goldfish:</h3>";
            $g->status();
            $g->setCorEscama("Amarelo");
            echo "<p>Cor da escama: {$c3->getCorEscama()}.</p>";
            $g->locomover();
            $g->alimentar();
            $g->emitirSom();
            echo "<hr></br>";

            echo "<h3>Arara:</h3>";
            $a2->status();
            $a2->setCorPena("Verde");
            echo "<p>Cor da pena: {$c3->getCorEscama()}.</p>";
            $a2->locomover();
            $a2->alimentar();
            $a2->emitirSom();
            echo "<hr></br>";
        ?>
    </pre>    
</body>
</html>