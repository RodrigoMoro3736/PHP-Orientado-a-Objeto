<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 07 - PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Aula07Class.php';
            require_once 'luta.php';
            $prettyBoy = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
            $putscript = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $snapshadow = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $deadCode = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
            $ufocobol = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $nerdaard = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $uec01 = new luta();
            $uec01->marcarLuta($ufocobol, $nerdaard);
            $uec01->lutar();
            $ufocobol->status();
            $nerdaard->status();

        ?>
    </pre>
</body>
</html>