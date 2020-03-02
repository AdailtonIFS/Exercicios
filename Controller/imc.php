<?php
    include_once'../model/imc.php';
    $altura = isset($_POST['altura']) ? $_POST['altura']: '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo']: '';

    $imc = new Imc();

    if(!empty($altura) && !empty($sexo)){
        $result = $imc->calcularimc($altura,$sexo);

       header("Location: http://localhost/Exercise/?pagina=imc&result= $result");
    }
