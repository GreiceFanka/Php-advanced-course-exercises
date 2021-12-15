<?php 
require_once 'Animal.php';

class Peixe extends Animal {
    private $corEscama;

    // @sobrepor métodos
    public function locomover(){
        echo "Nadando!";
    }
    public function alimentar(){
        echo "Comendo substâncias!";
    }
    public function emitirSom(){
        echo "Peixe não faz som!";
    }
    //Métodos
    public function soltarBolhas(){
        echo "Soltou uma bolha!";
    }
    //Métodos especiais
    public function getcorEscama(){
        return $this->corEscama;
    }
    public function setcorEscama($c){
        $this->corEscama = $c;
    }
}
?>