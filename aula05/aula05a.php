<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta Banco</title>
</head>
<body>
    <h2>Criar conta no Banco!</h2>
    <pre>
    <?php
        require_once "Aula05Class.php";

        $jubileu = new ContaBanco();
        $jubileu->setDono("Jubileu");
        $jubileu->abrirConta("CC");
        $jubileu->setNumConta(111);
        $jubileu->depositar(300);
        $jubileu->pagarMensal();
        $jubileu->sacar(338);
        $jubileu->fecharConta();

        print_r($jubileu);

        $creuza = new Contabanco();
        $creuza->setDono("Creuza");
        $creuza->abrirConta("CP");
        $creuza->setNumConta(222);
        $creuza->depositar(500);
        $creuza->sacar(100);
        $creuza->pagarMensal();
        $creuza->sacar(530);
        $creuza->fecharConta();
        
        echo "<br/>";
        print_r($creuza);
    ?>
    </pre>
</body>
</html>