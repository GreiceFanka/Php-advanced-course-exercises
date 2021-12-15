<?php 
abstract class Animal {
    private $peso;
    private $idade;
    private $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function getPeso(){
        return $this->peso;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getMembros(){
        return $this->membros;
    }
    public function setPeso($s){
        $this->peso = $s;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function setMembros($m){
        $this->membros = $m;
    }
}
?>