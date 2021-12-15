<?php
require_once 'interface09.php';
require_once 'pessoa.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //métodos
    public function detalhes(){
        echo "Livro: ".$this->getTitulo()."\nEscrito por ".$this->getAutor();
        echo "<br> Total de páginas : ".$this->getTotPaginas(). "\nAtual: ".$this->getPagAtual();
        echo "<br> Sendo lido por : ".$this->leitor->getNome();

    }
    //métodos especiais
    public function __construct($tit,$aut,$pag,$l){
        $this->setTitulo($tit);
        $this->setAutor($aut);
        $this->setTotPaginas($pag);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($l);
    }
    private function getTitulo(){
        return $this->titulo;
    }
    private function getAutor(){
        return $this->autor;
    }
    private function getTotPaginas(){
        return $this->totPaginas;
    }
    private function getPagAtual(){
        return $this->pagAtual;
    }
    private function getAberto(){
        return $this->aberto;
    }
    private function getLeitor(){
        return $this->leitor;
    }
    private function setTitulo($tit){
        $this->titulo = $tit;
    }
    private function setAutor($aut){
        $this->autor = $aut;
    }
    private function setTotPaginas($pag){
        $this->totPaginas = $pag;
    }
    private function setPagAtual($atual){
       $this->pagAtual = $atual;
    }
    private function setAberto($ab){
        $this->aberto = $ab;
    }
    private function setLeitor($l){
        $this->leitor = $l;
    }
    //métodos da interface
    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($p){
        if($p > $this->getTotPaginas()){
            $this->setPagAtual(0);
        }else{
            $this->setPagAtual($p);
        }
    }
    public function avancarPag(){
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag(){
        $this->setPagAtual($this->getPagAtual() - 1);
    }

}



?>