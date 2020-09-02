<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 09 - PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once 'pessoa.php';
            require_once 'livro.php';

            $rodrigo = new pessoa("Rodrigo", 29, "Masculino");
            $livro1 = new livro("ACDC", "Angus Young", 400, $rodrigo);

            $livro1->abrir();
            $livro1->folhear(250);
            $livro1->voltarPag();
            $livro1->detalhes();
        ?>
    </pre>
</body>
</html>