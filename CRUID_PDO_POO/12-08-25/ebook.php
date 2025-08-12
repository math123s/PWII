<?php 

class Ebook {
    private $id;
    private $titulo;
    private $descrição;
    private $isbn;
    private $data_publicacao;  
    private $preco;  
    private $idioma;  
    private $foto;  
    
    //essas informações $tipo tem que usar o this
    public function __construct($titulo, $descricao, $isbn, $data_publicacao, $preco, $idioma, $foto){
        $this-> titulo = $titulo;
        $this-> descricao = $descricao;
        $this-> isbn = $isbn;
        $this-> data_publicacao = $data_publicacao;
        $this-> preco = $preco;
        $this-> idioma = $idioma;
        $this-> foto = $foto;

        
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