<?php

    function divisao($dividendo, $divisor){
        try{
            if($divisor ==0){

                throw new RangeException("O número não pode ser dividido por zedo");
            
            }
            
            $resultado = $dividendo / $divisor;

            echo "O resultado é: " . $resultado;

        } catch(Exception){ // PHP 8
        // catch(Exception $e){ // PHP 7 E ANTERIOR
            // echo $e -> getMessage();
            echo "O número não pode ser dividido por 0";
        } finally{

            echo "\nTratando exceções";

        }
    }

    divisao(10,0);