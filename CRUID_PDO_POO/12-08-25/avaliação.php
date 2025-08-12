<?php 

class Usuario {
    private $id;
    private $nota;
    private $data;
    private $comentario;
    
    
    
    //essas informações $tipo tem que usar o this
    public function __construct($nome, $comentario, $data){
        $this-> nome = $nome;
        $this-> comentario = $comentario
        $this-> data = $data
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