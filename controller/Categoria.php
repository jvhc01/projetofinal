<?php
    
    require "model/CategoriaModel.php";
    require "controller/Controller.php";

    Class Categoria extends Controller{
        
        function __construct()
        {
           $this-> model = new CategoriaModel();
        }
        function index(){
            $categorias=($this->model->buscarTodos(2));
            $this->load_template ("categoria/listagem.php", $categorias);
            

        }
        function inserir(){
           
        }

    }


    //$model->inserir("Produto de Limpeza");//
    //$model->excluir(1);//
    //$model->atualizar("Smartphone", 2);//
   
?>