<?php 
    require_once 'Pessoa11.php';
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function pagarMensalidade(){
            echo "Pagando mensalidade do aluno ".$this->getNome()."<br>";
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setMatricula($matr){
            $this->matricula = $matr;
        }
        public function setCurso($c){
            $this->curso = $c;
        }
    }
?>