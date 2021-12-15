<?php
require_once 'Pessoa.php';

class Professor extends Pessoa {
    private $especialidade;
    private $salario;
//métodos
    public function receberAumento($aum){
       $this->setSalario($this->getSalario() + $aum);
    }
//métodos especiais
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
}

?>