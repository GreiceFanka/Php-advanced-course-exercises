<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 POO</title>
</head>
<body>
    <?php 
    require_once 'aula03.php';
    $c1 = new Caneta;
    $c1->modelo = "BIC cristal";
    $c1->cor = "Azul";
    $c1->rabiscar();
    $c1->tampar();
    var_dump($c1);
    //$c1->cor="azul";
    //$c1->ponta=0.5;
    //$c1->tampada=false;
    //$c1->tampar();
   // $c1->rabiscar();
    //var_dump($c1);
    //echo "<br/>";
    //$c2 = new Caneta;
    //$c2->cor="verde";
    //$c2->carga=50;
    //$c2->tampar();
    //var_dump($c2);
    ?>
</body>
</html>