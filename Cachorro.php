<?php 
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    //PHP não dá suporte a sobrecarga de métodos, por tanto a solução aplicada foi criar diferentes funções
    public function reagirFrase($frase){
        if($frase == "Comida" || $frase == "Olá"){
            echo "<p> Abanar e Latir! </p>";
        }else{
            echo "<p> Rosnar </p>";
        }
    }
    public function reagirHora($hora){
        if($hora < 12){
            echo "<p> Abanar </p>";
        }elseif($hora >= 18){
            echo "<p> Ignorar </p>";
        }else{
            echo "<p> Abanar e Latir </p>";
        }
    }
    public function reagirDono($dono){
        if($dono){
            echo "<p> Abanar </p>";
        }else{
            echo "<p> Rosnar e Latir </p>";
        }
    }
    public function reagirIdade($idade,$peso){
        if ($idade < 5){
            if($peso < 10){
                echo "<p> Abanar </p>";
            }else{
                echo "<p> Latir </p>";
            }
        }else{
            if($peso < 10){
                echo "<p> Rosnar </p>";
            }else{
                echo "<p> Ignorar</p>";
            }

        }
    }
}
?>