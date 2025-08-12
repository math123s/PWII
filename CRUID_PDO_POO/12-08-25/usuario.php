<?php 

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo// admin || comum
    
    
    //essas informações $tipo tem que usar o this
    public function __construct($nome, $email, $senha, $tipo){
        $this-> nome = $nome;
        $this-> emial = $email;
        $this-> senha = $senha;
        $this-> tipo = $tipo
    }
}   

//serve para guardar as informações em uma linha 
    public function inserir(){
        
        public function buscar($id){

        }
    
        public function buscarTodos(){

        }

        public function atualizar($id){

        }

        public function login(){

        }

        public function logout(){

        }
    }
?>