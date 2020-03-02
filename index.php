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
            
          default: 
          include_once 'view/home.php';
  }

    ?>
    </div>

<?php include_once('footer.php');?>