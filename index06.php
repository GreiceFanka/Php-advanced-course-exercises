<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula encapsulamento</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'aula06.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->abrirMenu(); 
    
    ?>
    </pre>    
</body>
</html>