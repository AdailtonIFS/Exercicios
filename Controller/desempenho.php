<?php

    include_once '../model/desempenho.php';

    $first = isset($_POST['nota']) ? $_POST['nota'] : '';

    $maior = new Maior();

    $result = $maior->verificarMaior($first,$second);


   header("Location: ../view/maior.php?result= $result");
