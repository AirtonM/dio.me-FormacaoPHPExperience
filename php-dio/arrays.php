<?php

    $carros = ['Ferrari', 'BMW', 'Mercedes'];
    
    $endereco = [
        'cep' => '68746-045',
        'numero' => '15',
        'cidade' => 'Castanhal',
        'estado' => 'Pará',
    ];
    
    $enderecoPessoas = [
        'pessoa1' => array(
            'cep' => '12345-678',
            'cidade' => 'Salvador',
        ),
        'pessoa2' => array(
            'cep' => '98765-432',
            'cidade' => 'Rio Branco',
        ),
    ];

    print_r('Carro nº 2: ' . $carros[1] . '.');
    echo "\n\nCarros: ";

    print_r($carros);
    echo "\nEndereço: ";

    print_r($endereco);
    echo "\n";

    print_r('A cidade é: ' . $endereco['cidade'] . '.');
    echo "\n\nEndereço das Pessoas: ";

    print_r($enderecoPessoas);
    echo "\nPessoa 1: ";

    print_r($enderecoPessoas['pessoa1']);
    echo "\nCidade da pessoa 2: ";

    print_r($enderecoPessoas['pessoa2']['cidade']);
    echo "\n";