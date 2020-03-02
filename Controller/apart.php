<?php
    include_once'../model/aposent.php';
    $nome = isset($_POST['nome']) ? $_POST['nome']: '';
    $animal = isset($_POST['animal']) ? $_POST['animal']: '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo']: '';

    $aposent = new aposent();

    if(!empty($nome) && !empty($animal) && !empty($numero)){
        $result = $apart->calcularaluguel($animal);

       header("Location: http://localhost/Exercise/?pagina=apart&result=$result");
    }else{
        header("Location: http://localhost/Exercise/?pagina=apart&result=Preencha todos os campos");
    }
