<?php include_once('header.php'); ?>

    <div class="principal">
    <?php
  

  $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

  switch($pagina){

      case 'home':
          include_once 'view/home.php';
          break;

      case 'fahrenheit':
          include_once 'view/fahrenheit.php';
          break;

      case 'maior':
          include_once 'view/maior.php';
          break;
      
      case 'mediaponderada':
          include_once 'view/mediaponderada.php';
          break;

      case 'desempenho':
          include_once 'view/desempenho.php';
          break;

        case 'refresh':
            include_once 'view/refresh.php';
            break;

        case 'radio':
            include_once 'view/radiobutton.php';
            break;

        case 'imc':
            include_once 'view/imc.php';
            break;
            
            case 'apart':
                include_once 'view/apartamento.php';
                break;

            case 'inss':
                include_once 'view/aposent.php';
                break;

            case 'verificarsala':
                include_once 'view/verificarsala.php';
                break;

            case 'caracter':
                include_once 'view/caracterEntities.php';
                break;

            case 'textopredefinido':
                include_once 'view/textopredefinido.php';
                break;

            case 'estilodetexto':
                include_once 'view/estilotexto.php';
                break;

            case 'predefinidoprática':
                include_once 'view/praticapredefinido.php';
                break;

            case 'formatarFonte':
                include_once 'view/formatarFonte.php';
                break;

            case 'formatarTexto':
                include_once 'view/formatarTexto.php';
                break;

            case 'estiloFTexto':
                include_once 'view/EstiloeFormataçãodeTexto.php';
                break;

            case 'select':
                include_once 'view/select.php';
                break;

            case 'lanchonete':
                include_once 'view/lanchonete.php';
                break;

            case 'checkbox':
                include_once 'view/checkbox.php';
                break;

            case 'cssemfontes':
                include_once 'view/cssemfontes.php';
                break;

            case 'cssemtexto':
                include_once 'view/cssemtexto.php';
                break;

            case 'cssmargem':
                include_once 'view/cssmargem.php';
                break;

            case 'cssbordas':
                include_once 'view/cssbordas.php';
                break;

            case 'cssbackground':
                include_once 'view/cssbackground.php';
                break;

            case 'csslista':
                include_once 'view/csslistas.php';
                break;

            case 'atividade01':
                include_once 'view/atividade01.php';
                break;

            case 'atividade02':
                include_once 'view/atividade02.php';
                break;

                
        
          default: 
          include_once 'view/home.php';
  }

    ?>
    </div>

<?php include_once('footer.php');?>