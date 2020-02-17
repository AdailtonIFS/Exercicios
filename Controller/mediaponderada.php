<?php

    include_once '../model/mediaponderada.php';

    $nota1 = isset($_POST['first']) ? $_POST['first'] : '';
    $nota2 = isset($_POST['second']) ? $_POST['second'] : '';
    $nota3 = isset($_POST['third']) ? $_POST['third'] : '';
  

    $media = new MediaPonderada($nota1,$nota2,$nota3);

    $result = $media->mediaponderada($nota1,$nota2,$nota3);

    header("Location: http://localhost/Exercise/?pagina=mediaponderada&result= $result");
