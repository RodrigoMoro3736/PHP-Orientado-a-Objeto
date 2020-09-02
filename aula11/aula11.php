<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 11 - PHP- CeV</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Visitante.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';

            $a1 = new Aluno("Maria", 16, "Feminino");
            $p1 = new Professor("Claudio", 55, "Masculino");
            $v1 = new Visitante("Fabiana", 26, "Feminino");
            $b1 = new Bolsista("João", 18, "Masculino");
            $t1 = new Tecnico("José", 35, "Masculino");

            $a1->setMatr(1111);
            $a1->setCurso("Informatica");
            $a1->pagarMensalidade();

            $p1->setEspecialidade("Física");
            $p1->setSalario(3687.99);
            $p1->receberAum(300.50);
            $p1->fazerAniv();

            $b1->setBolsa(true);
            $b1->setMatr(1122);
            $b1->setCurso("Biologia");
            $b1->renovarBolsa();
            $b1->pagarMensalidade();

            $t1->setMatr(1133);
            $t1->setCurso("Eletronica");
            $t1->pagarMensalidade();
            $t1->setRegistroProfissional(765345);
            $t1->praticar();

            print_r($a1);
            echo "<hr>";
            print_r($p1);
            echo "<hr>";
            print_r($v1);
            echo "<hr>";
            print_r($b1);
            echo "<hr>";
            print_r($t1);
        ?>
    </pre>
</body>
</html>