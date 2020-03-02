<?php
    include_once'../model/verificarsala.php';
    $nome = isset($_POST['nome']) ? $_POST['nome']: '';
    $curso = isset($_POST['curso']) ? $_POST['curso']: '';

    $verificar = new Sala();

    if(!empty($nome) && !empty($curso)){
        echo $result = $verificar->verificarSala($nome,$curso);

       //header("Location: http://localhost/Exercise/?pagina=apart&result=$result");
    }else{
        //header("Location: http://localhost/Exercise/?pagina=apart&result=Preencha todos os campos");
    }
