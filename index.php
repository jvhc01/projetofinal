<?php
 if(isset($_GET['c'])){
    $controller= ucfirst($_GET['c']);
    $path_controller= "controller/$controller.php";

    //verificando se o arquivo existe
    if(file_exists($path_controller)){
        require $path_controller;

        //verifica se foi enviada a variavel $_GET['m']
        //que contém o métofo do controlador 
        
          $metodo= $_GET['m'] ?? "index";

          //cria o objeto controlador 
          $obj= new $controller();

          //verifica se o controlador possui uma função
          if(is_callable(array($obj ,$metodo))){

            //excuta o metodo do controlador
            call_user_func_array(array($obj, $metodo), array());
          }
        
    
    }
 }

?>