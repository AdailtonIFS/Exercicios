<?php

    include_once '../model/fah.php';

    $f = isset($_POST['f']) ? $_POST['f'] : '';

    $fah = new Fahrenheit();

    $result = $fah->converterFahrenheit($f);

    header("Location: http://localhost/Exercise/?pagina=fahrenheit&result= $result");

