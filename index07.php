<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 POO</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'aula07.php';
    require_once 'luta.php';
    $l = array();
    $l[0] = new Lutador("Pretty Boy","França",30,1.75,68.9,11,2,1);
    $l[1] = new Lutador("Putscript", "Brasil",29,1.68,57.8,14,2,3);
    $l[2] = new Lutador("SnapShadow", "EUA",35,1.65,80.9,12,2,1);
    $l[3] = new Lutador("Dead Code", "Austrália",28,1.93,81.6,13,0,2);
    $l[4] = new Lutador("UFO Cobol", "Brasil",37,1.70,119.3,15,4,3);
    $l[5] = new Lutador("Nerdaart", "EUA",30,1.81,105.7,12,2,4);

    $uec01 = new Luta();
    $uec01->marcarLuta($l[4],$l[5]);
    $uec01->lutar();
   // $l[0]->status();
    //$l[1]->status();
    ?>
    </pre>
</body>
</html>