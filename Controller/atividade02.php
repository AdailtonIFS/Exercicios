<?php
    include_once'../model/atividade02.php';

    $nome = isset($_POST['n']) ? $_POST['n']: '';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo']: '';
    $peso = isset($_POST['p']) ? $_POST['p']: '';
    $altura = isset($_POST['a']) ? $_POST['a']: '';

    $atvd = new atvd2();

    if(!empty($nome) && !empty($sexo) && !empty($peso) && !empty($altura)){
        $result = $atvd -> calcularIMC($sexo,$altura,$nome,$peso);

        header("Location: http://localhost/Exercise/?pagina=atividade02&result= $result");

    }
