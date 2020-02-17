<?php

    class Fahrenheit
    {
        function converterFahrenheit($f)
        {
          $C = ($f - 32) * (5 / 9);

          return "Temperatura em Fahrenheit <br>".$C."°F";

        }
    }