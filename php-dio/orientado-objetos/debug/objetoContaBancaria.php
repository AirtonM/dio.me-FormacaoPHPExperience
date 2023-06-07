<?php

    require __DIR__ . '/../vendor/autoload.php';

    use App\ContaBancaria;

    // $conta = new ContaBancaria();
    //     var_dump($conta -> banco); // só mostra se for no public
    //     var_dump($conta -> exibirDadosDaConta());
    // $conta -> setBanco('Banco Bradesco');
    // $conta -> setNomeTitular('Airton L Marinho');
    // $conta -> setNumeroAgencia('6645-2');
    // $conta -> setNumeroConta('0006874-5');
    // $conta -> setSaldo(0);

    $conta = new ContaBancaria(
        'Banco Bradesco',
        'Airton L Marinho',
        '6952-1',
        '0006845-5',
        0
    );

    var_dump($conta -> exibirDadosDaConta());
