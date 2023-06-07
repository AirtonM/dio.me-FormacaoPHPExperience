<?php

    $nota = 4;

    if ( $nota >=7 ) {
        echo "Aluno Aprovado";
    } else if( ($nota < 7) && ($nota >= 4)){
        echo "Aluno em Recuperação";
    } else {
        echo "Aluno Reprovado";
    }