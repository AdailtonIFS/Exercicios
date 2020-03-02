<?php 

class Imc
{
    function calcularimc($altura, $sexo)
    {
      if($sexo == "Masculino") {
          return (72.6 * $altura) - 58;
      }
      else
        if($sexo == "Feminino"){
            return (62.1 * $altura) - 44.7;
        }
    }
}