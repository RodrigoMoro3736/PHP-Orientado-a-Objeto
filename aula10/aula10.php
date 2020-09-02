<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 10 - PHP- CeV</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa("Pedro", 34, "Masculino");
            $p2 = new Aluno("Maria", 15, "Feminino");
            $p3 = new Professor("Claudio", 55, "Masculino");
            $p4 = new Funcionario("Fabiana", 26, "Feminino");

            $p1->fazerAniv();
            $p2->setMatr(true);
            $p2->setCurso("Informatica");
            $p3->setEspecialidade("Ciencias");
            $p3->setSalario(2500.75);
            $p4->setSetor("Estoque");
            $p4->setTrabalhando(true);

            $p2->cancelarMatr();
            $p3->receberAum(550.20);
            $p4->mudarTrabalho("Compras");
            
            print_r($p1);
            echo "<hr>";
            print_r($p2);
            echo "<hr>";
            print_r($p3);
            echo "<hr>";
            print_r($p4);
        ?>
    </pre>
</body>
</html>