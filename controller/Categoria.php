<?php
    
    require "model/CategoriaModel.php";
    require "controller/Controller.php";

    Class Categoria extends Controller{

    function __construct(){
        $this->model = new CategoriaModel();
    }
        
    function index(){
        $categorias=$this->model->buscarTodos();
        include 'view/template/cabecalho.php';
        include 'view/template/menu.php';
        include 'view/categoria/listagem.php';
        include 'view/template/rodape.php';

    }

    function add(){
        include 'view/template/cabecalho.php';
        include 'view/template/menu.php';
        include 'view/template/form.php';
        include 'view/template/rodape.php';


    }
    
    function excluir($id){
        $this->model->excluir($id);
        header('Location: ?c=categoria');

    }

}




    //$model->inserir("Produto de Limpeza");//
    //$model->excluir(1);//
    //$model->atualizar("Smartphone", 2);//
   
?>