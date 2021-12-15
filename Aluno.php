<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    //Métodos
    public function cancelarMatricula(){
        echo "Sua matrícula será cancelada em breve!";
    }
    //Métodos especiais
    public function getMatricula(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
}
?>