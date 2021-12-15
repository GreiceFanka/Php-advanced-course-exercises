<?php
require_once 'Aluno11.php';
class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p> Bolsa Renovada!</p>";
    }
    //sobrepondo o método herdado de aluno
    public function pagarMensalidade(){
        echo "<p>".$this->getNome()." é bolsista por tanto tem desconto no pagamento</p>";
    }
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($b){
        $this->bolsa = $b;
    }
}
?>