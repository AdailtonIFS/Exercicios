<?php 

class Sala
{
    function verificarSala($nome,$curso)
    {
       if($curso == "Informatica"){
            return "Sala 22";
       }
       else
        if($curso == "Alimentos"){
            return "Sala 21";
        }
        else
            if($curso == "Agropecuaria"){
                $letra = substr($nome,1);
                return $letra;
            }
    }
}