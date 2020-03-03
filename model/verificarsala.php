<?php 

class Sala
{
    function verificarSala($nome,$curso)
    {
        if( preg_match('/\d+/', $nome)>0 ){
            return 'Nome inválido';

        }else{

            if($curso == "Informatica"){
                return "Sala 22";
            }else
                if($curso == "Alimentos"){
                return "Sala 21";
                }   
                    else
                        if($curso == "Agropecuaria"){

                            $letra = substr($nome,0,1);

                            $arrayAaB = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
                            
                        
                             for($i = 0; $i < 26; $i++){

                                 if(strcasecmp($arrayAaB[$i],$letra) == 0){
                            
                                     if($i >= 0 && $i <= 10){
                                         return "Sala 11";
                                        break;
                                     }
                                     else
                                         if($i > 10 && $i <= 13){
                                        return "Sala 12";
                                    break;

                                         }
                                         else
                                             if($i > 13 && $i < 26){
                                             return "Sala 13";
                                            break;

                                        }
                                }
                            }
                        }
            }
        }
    }
