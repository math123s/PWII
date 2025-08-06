<?php

class Pessoa(){
    public $nome;
    public $email;
}

// extends - pega as informações do public
class Aluno extends Pessoa{
    public $rm;
}

class Professor extends Pessoa{
    public $formacao;
    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }
}

//Metodo construtor - Método chamado quando você cria uma instancia

//forma mais completa sem abreviação
    $aluno = new Aluno();
    $aluno->nome = 'Seleide';
    $aluno->email = 'se@hotmail.com';

    //forma mais simples
    $professor = new Professor('Carlitos', 'ca@hotmail.com', 'ADS');
?>