<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício aula 09</title>
</head>
<body>
    <pre>
    <?php
    require_once 'pessoa09.php';
    require_once 'livro.php';
    $p = array();
    $l = array();
    $p[0] = new Pessoa("Pedro",22,"M");
    $p[1] = new Pessoa("Maria",31,"F");
    
    $l[0] = new Livro("PHP básico","José da Silva",300,$p[0]);
    $l[1] = new Livro("POO com PHP","Maria de Souza",500,$p[0]);
    $l[2] = new Livro("PHP avançado","Ana Paula",800,$p[1]);
    $l[0]->abrir();
    $l[0]->folhear(80);
    $l[0]->avancarPag();
    $l[0]->detalhes();
    ?>
    </pre>
</body>
</html>