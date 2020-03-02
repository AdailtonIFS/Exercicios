<?php
    include_once'../model/aposent.php';
    $idade = isset($_POST['idade']) ? $_POST['idade']: 0;
    $anos = isset($_POST['anos']) ? $_POST['anos']: '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo']: '';

    $aposent = new aposent();

    if(!empty($idade) && !empty($anos) && !empty($sexo)){
        $result = $aposent->verificarDisponibilidade($sexo, $idade,$anos);
        
       header("Location: http://localhost/Exercise/?pagina=inss&result=$result");
    }else{
        header("Location: http://localhost/Exercise/?pagina=inss&result=Preencha todos os campos");
    }
