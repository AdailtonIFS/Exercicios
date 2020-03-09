<?php

    include_once'../model/lanchonete.php';

    $prato = isset($_POST['prato'])?$_POST['prato']:'';
    $sobremesa = isset($_POST['sobremesa'])?$_POST['sobremesa']:'';
    $bebida = isset($_POST['bebida'])?$_POST['bebida']:'';

    
    if (!empty($prato) && !empty($sobremesa) && !empty($bebida)) {

        if($prato != "false" && $prato != "false" && $prato != "false" )
        $lanch = new Lanchonete();

        $cal =  $lanch -> pegarPratos($prato);
        $cal += $lanch -> pegarBebidas($bebida);
        $cal +=  $lanch -> pegarSobremesa($sobremesa);
       
        header("Location: http://localhost/Exercise/?pagina=lanchonete&result= Você consumirá $cal calorias");
    }
    else{

    }
