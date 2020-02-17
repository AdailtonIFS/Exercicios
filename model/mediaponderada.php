<?php

    class MediaPonderada
    {
        function mediaponderada($nota1, $nota2,$nota3)
        {   
            if (!empty($nota1) && !empty($nota2) && !empty($nota3)){
                return "A média ponderada é ".$media = ((($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10);
            }else{
                return "Preencha todos os campos";
            }
        }
    }