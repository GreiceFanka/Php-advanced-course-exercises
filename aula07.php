<?php 
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Métodos
    public function apresentar(){
        echo "<p>--------------------------------------</p>";
        echo "Lutador:\n" . $this->getNome()."<br>";
        echo "Nacionalidade:\n" . $this->getNacionalidade()."<br>";
        echo $this->getIdade() . "anos<br>";
        echo "Altura:\n" . $this->getAltura() . "metros<br>";
        echo "Pesando:\n" . $this->getPeso() . "kg<br>";
        echo "Ganhou:\n" . $this->getVitorias()."<br>";
        echo "Perdeu:\n" . $this->getDerrotas()."<br>";
        echo "Empatou:\n" . $this->getEmpates();
    }
    public function status(){
        echo "<p>--------------------------------------</p>";
        echo "<p>".$this->getNome() ."<br>é um peso " . $this->getCategoria()."<br>";
        echo "e já ganhou " .$this->getVitorias() . "\nvezes,<br>";
        echo "perdeu\n" . $this->getDerrotas() . "\nvezes e<br>";
        echo "empatou\n" . $this->getEmpates() . "\nvezes.";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    //Métodos especiais
    public function __construct($n,$na,$i,$al,$p,$vit,$der,$empa){
        $this->setNome($n);
        $this->setNacionalidade($na);
        $this->setIdade($i);
        $this->setAltura($al);
        $this->setPeso($p);
        $this->setVitorias($vit);
        $this->setDerrotas($der);
        $this->setEmpates($empa);
    }
    public function getNome(){
        return $this->nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function setAltura($al){
        $this->altura = $al;
    }
    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }
    public function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    public function setVitorias($vit){
        $this->vitorias = $vit;
    }
    public function setDerrotas($der){
        $this->derrotas = $der;
    }
    public function setEmpates($empa){
        $this->empates = $empa;
    }
}
?>