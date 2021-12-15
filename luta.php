<?php 
require_once 'aula07.php';
class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;
//métodos
    public function marcarLuta($l1,$l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->setAprovado(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovado(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar(){
        if($this->getAprovado()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo "<p> Empate! </p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                case 1:
                    echo "<p>".$this->desafiado->getNome()."\nvenceu";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                case 2:
                    echo "<p>".$this->desafiante->getNome()."\nvenceu"; 
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();  
                break;
            }
        }else{
            echo "<p>Luta não pode acontecer!</p>";
        }

    }
//métodos especiais
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function getAprovado(){
        return $this->aprovado;
    }
    public function setDesafiado($dd){
        $this->desafiado = $dd;
    }
    public function setDesafiante($des){
        $this->desafiante = $des;
    }
    public function setRounds($r){
        $this->rounds = $r;
    }
    public function setAprovado($aprov){
        $this->aprovado = $aprov;
    }
}



?>