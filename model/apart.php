<?php 

class apart
{
    function calcularaluguel($animal)
    {
        $aluguel = 350;
      if($animal == "Cao") {
          $aluguel = $aluguel+50;
        return "O valor final do seu aluguel é: R$".$aluguel;
      }
      else
        if($animal == "Gato"){
            $aluguel = $aluguel+30;
        return "O valor final do seu aluguel é: R$".$aluguel;
        }
        else 
            if($animal == "Papagaio"){
                $aluguel = $aluguel+12;
                return "O valor final do seu aluguel é: R$".$aluguel;
        }
    }
}