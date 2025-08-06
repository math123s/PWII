<?php
    // Pascal Case (classe com a primeira letra maiúscula)
    class Pessoa{
        // public - A váriavel está acessível externamente
        // private - A váriavel está acessível internamente na classe
        // protected - Está acessível somente através de herança
        public $nome;
        public $idade;
        private $tamanho;
        protected $olhos;

        public function Apresentar(){
            echo "A pessoa $this->nome diz Olá!";
            echo "<br>";
            echo "A idade  da $this->idade.";
            echo "<br>";
            echo "O tamanho é  esse $this->tamanho";
            echo "<br>";
            echo "O olho é da cor $this->olhos!!!";
            echo "<br>";
        }
    }

   

    // Instância
    $aluno = new Pessoa();
    $aluno->nome = "Gengivildo";
    $aluno->idade = 20;
    $aluno->tamanho = 1.78m; 
    $aluno->olhos = "azuis"; // Não é possivel acessar uma variavel privada ou protegida fora da classe

    $aluno2 = new Pessoa();
    $aluno2->nome = "Testonildo";
    $aluno2->idade = 18;
    $aluno2->tamanho = 2.30m;
    $aluno2->olhos = "verdes";

    print_r($aluno);
    print_r($aluno->Apresentar());
    print_r($aluno2);
    print_r($aluno2->Apresentar());
?>