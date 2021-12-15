<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício aula 05</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'aula05.php';
    $p1 = new ContaBanco;
    $p2 = new ContaBanco;

    $p1 -> abrirConta("CC");
    $p1 -> setDono("Jubileu");
    $p2 -> abrirConta("CP");
    $p2 -> setDono("Creuza");
    $p1->depositar(300);
    $p2->depositar(500);
    $p2->sacar(1000);
    print_r($p1);
    print_r($p2);
    
    ?>
    </pre>
</body>
</html>