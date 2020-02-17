<?php

    class Maior
    {
        function verificarMaior($firstnumber, $secondnumber)
        {
            if(!empty($firstnumber) && !empty($secondnumber)){

            if ($firstnumber > $secondnumber){
                return "O maior número é ".$firstnumber;
            }
                else
                    if($secondnumber > $firstnumber){
                        return "O maior número é ". $secondnumber;
                    }
                        else{
                            return "Os números são iguais";
                        }
            }else{
                return "Preencha todos os campos";
            }

        }
    }