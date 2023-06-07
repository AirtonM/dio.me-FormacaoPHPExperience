<?php

    // Entregador de delivery ganha 80 reais por dia porém ainda tem as gorjetas dos clientes
    $valorDia = 80;
    $entrega = 5;
    $quantidade = 12;
    $gorjetas = $entrega * $quantidade;
    $diaria = $valorDia + $gorjetas;
    
    echo "<h1>";
    echo "Segunda-feira: $diaria";
    echo "</h1>";