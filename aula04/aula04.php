<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'aula04Class.php';
            $c1 = new Caneta();
            # $c1->setModelo("BIC");
            # $c1->setPonta(0.5);
            # echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
            print_r($c1);
        ?>
    </pre>
</body>
</html>