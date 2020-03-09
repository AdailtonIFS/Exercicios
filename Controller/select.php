<?php

    $cpu = isset($_POST['processador'])? $_POST['processador'] : '';

    if (!empty($cpu)) {
        if ($cpu == 'false') {
            header("Location: http://localhost/Exercise/?pagina=select&result=Escolha o seu processador");
        }else{
            header("Location: http://localhost/Exercise/?pagina=select&result= $cpu");
        }
    }