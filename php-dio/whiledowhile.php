<?php

    $frutas = ["banana","maça","pera","uva"];
    $contador = count($frutas);
    $a = 0;
    $b = 0;
    $c = 0;

    echo "____________________________________________________________________\n";    
    echo "\nMostra todas as frutas: \n";
    while ($a < $contador) {
        echo $frutas[$a] . "\n";
        $a++;
    } 
    echo "____________________________________________________________________\n";    
    echo "\nPara no 'pera': \n";
    while ($b < $contador) {

        if ( $frutas[$b] == "pera"){
            break;
        }
        echo $frutas[$b] . "\n";
        $b++;
    } 

    echo "____________________________________________________________________\n";
    $c = 3;
    echo "\nUsando 'do' e 'while' e utilizando o '$c': \n";
    do {

        echo $frutas[$c] . "\n";
        $c++;
    } while ($c < $contador);
