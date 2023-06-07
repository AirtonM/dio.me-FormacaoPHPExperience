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

    echo $conta -> obterSaldo(); // 0
    echo PHP_EOL;
    
    echo $conta -> depositar(50); // 50
    echo PHP_EOL;
    
    echo $conta -> obterSaldo(); // 50
    echo PHP_EOL;
    
    echo $conta -> sacar(30); // 30
    echo PHP_EOL;
    
    echo $conta -> obterSaldo(); // 20
    echo PHP_EOL;
