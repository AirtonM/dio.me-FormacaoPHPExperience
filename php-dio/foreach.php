<?php

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $qtd_elementos_array = count($arr);

    echo "Mostrando Valores Impares: \n";
    foreach ($arr as $indice => $value) {

        if ($value % 2 == 0){
            continue;
        }

        echo "Valor do Índice: " . $indice . " - Valor: " . $value . "\n";
    }