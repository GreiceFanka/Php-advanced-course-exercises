<?php 
require_once 'Animal.php';

class Reptil extends Animal {
    private $corEscama;

    // @sobrepor métodos
      public function locomover(){
        echo "Rastejando!";
    }
    public function alimentar(){
        echo "Comendo vegetais!";
    }
    public function emitirSom(){
        echo "Som de Réptil";
    }
    //Métodos especiais
    public function getcorEscama(){
        return $this->corEscama;
    }
    public function setcorEscama($ce){
        $this->corEscama = $ce;
    }
}
?>