<?php

    include_once '../model/maior.php';

    $first = isset($_POST['firstnumber']) ? $_POST['firstnumber'] : '';
    $second = isset($_POST['secondnumber']) ? $_POST['secondnumber'] : '';

    $maior = new Maior();

    $result = $maior->verificarMaior($first,$second);


   header("Location: http://localhost/Exercise/?pagina=maior&result= $result");
