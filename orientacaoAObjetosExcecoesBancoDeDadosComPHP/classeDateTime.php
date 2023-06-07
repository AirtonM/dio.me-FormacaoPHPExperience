<?php

    // _____Saidá de data básica_____
    // echo date('d/m/Y') . PHP_EOL;

    // _____Data de hoje com timezone e localidade_____
    // $data = new DateTime();
    // var_dump($data);

    // _____Formatando DateTime();_____
    // echo $data->format('d-m-y H:i:s') . PHP_EOL;

    // _____Maniulando datas e horas_____

    /*
    ->  P   representação de periodo: vem antes de dia, mês, ano e semana
        Y   anos
        M   meses
        D   dias
        W   semanas
    ->  T   representação de tempo: vem antes de hora, minuto e segundo
        H   horas
        M   minutos
        S   segundos 
    */ 

    // _____Utilizando DateInterval para manipular data e hora_____
    
    // Data sem alteração
    $data = new DateTime();
    var_dump($data); 
    
    // Adiciona um periodo de 5 minutos
    $intervalo = new DateInterval('PT5M');  
    $data->add($intervalo);
    var_dump($data);

    // Remove um determinado tempo
    $intervalo = new DateInterval('P5Y10M5DT10H50M10S');  
    $data->sub($intervalo);
    var_dump($data);