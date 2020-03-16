<?php

Class atvd2
{
    function calcularIMC($sexo,$altura,$nome,$peso){
        if($sexo == 'M'){
    
           $imc = $peso/$altura*$altura;

           if($imc < 20.7){
                return "Abaixo do peso";
           }
           else
                if($imc >= 20.7 && $imc < 26.4 ){
                    return "No peso normal";
            }
           else
                if($imc >= 26.4 && $imc <= 27.8 ){
                    return "Marginalmente acima do peso";
            }
           else
                if($imc >= 27.8 && $imc <= 31.1 ){
                    return "Acima do peso ideal";
            }
           else
                if($imc > 31.1 ){
                    return "Obeso";
            }
        }

        if($sexo == 'F'){
    
           $imc = $peso/$altura*$altura;

           if($imc < 19.1){
                return "Abaixo do peso";
           }
           else
                if($imc >= 19.1 && $imc < 25.8){
                    return "No peso normal";
            }
           else
                if($imc >= 25.8 && $imc <= 27.3){
                    return "Marginalmente acima do peso";
            }
           else
                if($imc >= 27.3 && $imc <= 32.3 ){
                    return "Acima do peso ideal";
            }
           else
                if($imc > 32.3 ){
                    return "Obeso";
            }
        }
    }
}