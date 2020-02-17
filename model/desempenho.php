<?php

    class Desempenho
    {
        function verificarDesempenho($nota)
        {
            
            if ($nota >= 0 && $nota <= 49) {
                return "O desempenho está Insuficiente";
            } else 
                    if ($nota >= 50 && $nota <= 64) {
                        return "O desempenho está Regular";
                    } else 
                        if($nota >= 65 && $nota <= 84){
                            return "O desempenho está Bom";
                            }else 
                                if($nota >= 85 && $nota <= 100){
                                    return "O desempenho está Ótimo";
                                }else{
                                    return "Nota inválida";
                                }
          
        }
    }