<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta criada com sucesso!";
    }

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }elseif($t == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "Conta com saldo positivo!";
        }elseif($this->getSaldo() < 0){
            echo "Conta com saldo negativo!";
        }else{
            $this->setStatus(false);
        }
    }
    public function depositar($valor){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$valor);
        }else{
            echo "Impossível depositar!Conta fechada!";
        }
    }
    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo()- $v);
            }else{
                echo "Saldo insuficiente!";
            }
        }else{
            echo "Impossível sacar";
        }
    }
    public function pagarMensal(){
        $valorMensal;
        if($this->getTipo() == "CC"){
            $valorMensal = 12;
        }elseif($this->getTipo() == "CP"){
            $valorMensal = 20;
        }
        if($this->getStatus()){
            if($this->getSaldo() > $valorMensal){
                $this->setSaldo($this->getSaldo() - $valorMensal);
            }else{
                echo "Saldo Insuficiênte para pagamento de mensalidade!";
            }
        }else{
            echo "Não é possível realizar o pagamento da mensalidade";
        }
    }

    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($num){
        $this->numConta = $num;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($prop){
        $this->dono = $prop;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($stat){
        $this->status = $stat;
    }
}


?>