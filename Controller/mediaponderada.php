<?php

    include_once '../model/mediaponderada.php';

    $nota1 = isset($_POST['first']) ? $_POST['first'] : '';
    $nota2 = isset($_POST['second']) ? $_POST['second'] : '';
    $nota3 = isset($_POST['third']) ? $_POST['third'] : '';
    echo $nota1;
    echo $nota2;
    echo $nota3;


    $media = new MediaPonderada($nota1,$nota2,$nota3);

    $result = $media->mediaponderada($nota1,$nota2,$nota3);

    header("Location: ../view/mediaponderada.php?result= $result");