<?php

    Class Lanchonete{

        function pegarPratos($prato){

          $array = Array(
            $array['vegetariano'] = 180, 
            $array['peixe'] = 230,
            $array['frango'] = 250, 
            $array['carne'] = 350,
          );

            foreach ($array as $prato => $valor) {
                return $valor;
            }

        }
        function pegarBebidas($bebida){
            
          $array = Array(
            $array['cha'] = 20, 
            $array['sucolaranja'] = 70,
            $array['sucomelao'] = 100, 
            $array['refridiet'] = 65,
          );

            foreach ($array as $bebida => $valor) {
                return $valor;
            }

        }

        function pegarSobremesa($sobremesa){

          $array = Array(
            $array['abacaxi'] = 75, 
            $array['sorvetediet'] = 230,
            $array['mousediet'] = 250, 
            $array['mousechocolate'] = 350,
          );

          foreach ($array as $sobremesa => $valor) {
                return $valor;
          }

        }

    }