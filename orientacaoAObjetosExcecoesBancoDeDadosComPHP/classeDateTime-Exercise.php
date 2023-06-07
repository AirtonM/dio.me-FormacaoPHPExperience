<?php

    /*
        Crie uma data com a classe DateTime com a 
        data e horas atuais. Em seguida, subtraia
        5 dias, 10 horas e 50 minutos dessa data 
        e exiba o resultado no seguinte formato:
            dia/mês/ano - horas:minutos:segundos
    */
    
    // Data sem alteração
    $data = new DateTime();
    echo 'Data sem remoção: '. $data->format('d/m/y - h:i:s') . PHP_EOL;
    
    // Removendo 5 dias, 10 horas e 50 minutos
    $intervalo = new DateInterval('P5DT10H50M');
    $data->sub($intervalo);

    echo 'Data com remoção: '. $data->format('d/m/y - h:i:s') . PHP_EOL;