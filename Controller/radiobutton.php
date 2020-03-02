<?php

    $sistema = isset($_POST['sistema']) ? $_POST['sistema'] : '';

    if (!empty($sistema)){
        header("Location: http://localhost/Exercise/?pagina=radio&result=$sistema");
    }
    
    ?>