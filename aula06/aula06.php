<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 06</title>
</head>
<body>
    <pre>
        <h1>Projeto controle remoto</h1>
        <?php
            require_once 'Aula06Class.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->play();
            $c->abrirMenu();
        ?>
    </pre>
</body>
</html>