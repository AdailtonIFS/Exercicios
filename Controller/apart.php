<?php
    include_once'../model/apart.php';
    $nome = isset($_POST['nome']) ? $_POST['nome']: '';
    $animal = isset($_POST['animal']) ? $_POST['animal']: '';
    $numero = isset($_POST['numeroapart']) ? $_POST['numeroapart']: '';

    $apart = new apart();

    if(!empty($nome) && !empty($animal) && !empty($numero)){
        $result = $apart->calcularaluguel($animal);
        
       header("Location: http://localhost/Exercise/?pagina=apart&result=$result");
    }else{
        header("Location: http://localhost/Exercise/?pagina=apart&result=Preencha todos os campos");
    }
