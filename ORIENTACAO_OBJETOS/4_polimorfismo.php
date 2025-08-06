<?php

    //forma comum não herda nenhuma caracteristica de ninguém
    class Forma{
        public function desenhar(){
            echo 'Desenhando uma forma';
        }
    }

    //O circulo ja herda algo da forma 
    class Circulo extends Forma{
        public function desenhar(){
            echo 'Desenhando um círculo <br>';
        }
    }

    //O quadrado herda algo também,mas dessa vez herda da forma e n do circulo
    class Quadrado extends Forma{
        public function desenhar(){
            echo 'Desenhando um quadrado<br>';
        }
    }

    $circulo = new Circulo();
    $quadrado = new Quadrado();


    $circulo->desenhar();
    $quadrado->desenhar();

?>