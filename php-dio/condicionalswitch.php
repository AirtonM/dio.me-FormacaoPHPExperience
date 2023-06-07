<?php
    $sorteio = rand(0,5);
    echo "Valor Sorteado: " , $sorteio;

    switch($sorteio){
        case 0:
            echo " Você ganhou 2 pontos";
            break;
        case 1:
            echo " Você ganhou 1 pontos";
            break;
        case 2:
            echo " Você ganhou 3 pontos";
            break;
        default:
            echo " => Jogue Novamente";
            break;
    }