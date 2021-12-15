<?php
require_once 'Animal.php';

class Ave extends Animal {
    private $corPena;

    // @sobrepor métodos
    public function locomover(){
        echo "Voando!";
    }
    public function alimentar(){
        echo "Comendo frutas!";
    }
    public function emitirSom(){
        echo "Som de ave!";
    }
    //Métodos
    public function fazerNinho(){
        echo "Construiu um ninho!";
    }
    //Métodos especiais
    public function getcorPena(){
        return $this->corPena;
    }
    public function setcorPena($cp){
        $this->corPena = $cp;
    }
}
?>