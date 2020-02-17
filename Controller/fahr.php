<?php

    include_once '../model/fah.php';

    $f = isset($_POST['F']) ? $_POST['F'] : '';

    $fah = new Fahrenheit();

    $result = $fah->converterFahrenheit($f);

    header("Location: ../view/fahrenheit.php?result= $result");

