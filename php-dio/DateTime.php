<?php
    
    // echo date('d/m/y' . PHP_EOL); // Data Hoje

    $data = new DateTime(); // Objeto DateTime

    var_dump($data); // Imprime a data

    echo $data -> format('d-m-y') . PHP_EOL; // Formatação de Data

    echo $data -> format('d-m-y H:i:s') . PHP_EOL; // Formatação de Data e Hora

    $intervalo = new DateInterval('PT5M'); // Adiciona um intevalo de 5 minutos
    
    $data -> add($intervalo); // Adicionando intervalo a variável $data

    var_dump($data); // Imprime a data

