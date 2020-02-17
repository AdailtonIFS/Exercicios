<?php

    include_once '../model/desempenho.php';

    $first = isset($_POST['nota']) ? $_POST['nota'] : '';

    $desempenho = new Desempenho();

    $result = $desempenho->verificarDesempenho($first,$second);


    header("Location: http://localhost/Exercise/?pagina=desempenho&result= $result");
