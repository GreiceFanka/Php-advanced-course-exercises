<?php 
require_once 'Animal.php';

class Mamifero extends Animal {
    private $corPelo;

   // @sobrepor métodos
    public function locomover(){
        echo "Correndo!";
    }
    public function alimentar(){
        echo "Mamando!";
    }
    public function emitirSom(){
        echo "Som de Mamífero";
    }
    //Métodos especiais
    public function getcorPelo(){
        return $this->corPelo;
    }
    public function setcorPelo($cp){
        $this->corPelo = $cp;
    }
}
?>