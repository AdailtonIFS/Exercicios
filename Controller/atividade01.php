<?php
    include_once'../model/atividade01.php';

    $n1 = isset($_POST['n1']) ? $_POST['n1']: '';
    $n2 = isset($_POST['n2']) ? $_POST['n2']: '';
    $l1 = isset($_POST['l1']) ? $_POST['l1']: '';

    $atvd = new atvd();

    if(!empty($n1) && !empty($n2) && !empty($l1) ){
        if(strcasecmp($l1,'S')==0){

            $result = $atvd->soma($n1,$n2);
            header("Location: http://localhost/Exercise/?pagina=atividade01&result= $result");

        }
        else
            if(strcasecmp($l1,'B')==0){

            $result = $atvd->subtrai($n1,$n2);
            header("Location: http://localhost/Exercise/?pagina=atividade01&result= $result");

        }
        else
            if(strcasecmp($l1,'M')==0){

            $result = $atvd->multiplica($n1,$n2);
            header("Location: http://localhost/Exercise/?pagina=atividade01&result= $result");

        }
        else
            if(strcasecmp($l1,'D') == 0){

            $result = $atvd->divide($n1,$n2);
            header("Location: http://localhost/Exercise/?pagina=atividade01&result= $result");

        }
        else{
            header("Location: http://localhost/Exercise/?pagina=atividade01&result= Operação Inválida");
        }
    }  else{
        header("Location: http://localhost/Exercise/?pagina=atividade01&result= Escolha a Operação");
    }
