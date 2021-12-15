<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 Herança</title>
</head>
<body>
    <pre>
    <?php 
        /*require_once 'Visitante.php';
        $v1 = new Visitante();
        $v1->setNome("Juvenal");
        $v1->setIdade(33);
        $v1->setSexo("M");
        print_r($v1);*/
        require_once 'Aluno11.php';
        require_once 'Bolsista.php';
        $a1 = new Aluno();
        $a1->setNome("Josefina");
        $a1->setIdade(23);
        $a1->setMatricula(22453655);
        $a1->setSexo("F");
        $a1->setCurso("Física");
        $a1->pagarMensalidade();
        print_r($a1);
        $b1 = new Bolsista();
        $b1->setBolsa(12.5);
        $b1->setNome("Maria");
        $b1->setIdade(31);
        $b1->setMatricula(2298977655);
        $b1->setSexo("F");
        $b1->setCurso("Administração");
        $b1->renovarBolsa();
        $b1->pagarMensalidade();
        print_r($b1);
    ?>
    </pre>    
</body>
</html>