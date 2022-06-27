<?php

    require "model/CategoriaModel.php";

    Class Categoria{
        
        function __construct()
        {
           $this-> model = new CategoriaModel();
        }
        function index(){
            var_dump($this->model->buscarTodos(2));

        }
        function inserir(){
            echo "testando função inserir";
        }

    }


    //$model->inserir("Produto de Limpeza");//
    //$model->excluir(1);//
    //$model->atualizar("Smartphone", 2);//
   
?>