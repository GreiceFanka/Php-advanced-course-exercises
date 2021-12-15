<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Polimorfismo</title>
</head>
<body>
    <?php 
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Canguru.php';
    require_once 'Tartaruga.php';
    require_once 'Goldenfish.php';
    require_once 'Cobra.php';
    require_once 'Arara.php';
    require_once 'Cachorro.php';


    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $c = new Canguru();
    $t = new Tartaruga();
    $k = new Cachorro();
    
    $k->reagirFrase("Olá");
    $k->reagirFrase("Vai apanhar!");
    $k->reagirHora(11);
    $k->reagirHora(21);
    $k->reagirDono(true);
    $k->reagirIdade(2,12.5);

?>    
</body>
</html>