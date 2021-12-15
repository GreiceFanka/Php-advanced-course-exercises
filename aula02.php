<?php 
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar(){
            if($this->tampada){
                echo "Não posso rabiscar!";
            }else{
                echo "Estou rabiscando!";
            }
        }
        function tampar(){
            $this->tampada = true;
        }
        function destampar(){
            $this->tampada = false;
        }
    }
    ?>