<?php 

class aposent
{
    function verificarDisponibilidade($sexo,$idade,$anos)
    {
      if($sexo = "Masculino"){
         if($idade >= 65 && $anos >= 10  || $idade >= 63 && $anos == 15){
            return "Pode se aposentar";
         }
         else{
             return "Não pode se aposentar";
         }
        }
    else 
        if($sexo == "Feminino"){
            if($idade >= 63 && $anos >= 10  || $idade >= 61 && $anos >= 15){
                return "Pode se aposentar";
            }
             else{
                return "Não pode se aposentar";
            }
        }
    }
}