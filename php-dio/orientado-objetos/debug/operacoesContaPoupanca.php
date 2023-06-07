<?php

    require __DIR__ . '/../vendor/autoload.php';

    use App\ContasTipo\ContaPoupanca;
    use App\Contratos\DadosContaBancariaInterface;
    use App\Contratos\OperacoesContaBancariaInterface;

    // $conta = new ContaBancaria();
    //     var_dump($conta -> banco); // só mostra se for no public
    //     var_dump($conta -> exibirDadosDaConta());
    // $conta -> setBanco('Banco Bradesco');
    // $conta -> setNomeTitular('Airton L Marinho');
    // $conta -> setNumeroAgencia('6645-2');
    // $conta -> setNumeroConta('0006874-5');
    // $conta -> setSaldo(0);
    function executarOperacoes(OperacoesContaBancariaInterface $conta) : void
    {
        echo $conta -> obterSaldo();
        echo PHP_EOL;

        echo $conta -> depositar(50);
        echo PHP_EOL;

        echo $conta -> obterSaldo();
        echo PHP_EOL;

        echo $conta -> sacar(30);
        echo PHP_EOL;

        echo $conta -> obterSaldo();
        echo PHP_EOL;
    }
    function exibirDados(DadosContaBancariaInterface $conta) : void
    {
        echo "Banco: " . $conta->getBanco();
        echo PHP_EOL;
       
        echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
        echo PHP_EOL;
        
        echo "Titular: " . $conta->getNomeTitular();
        echo PHP_EOL;

        echo "_____________________________________________________";
        echo PHP_EOL;
    }
    $conta = new ContaPoupanca(
        'Banco Bradesco',
        'Airton L Marinho',
        '6952-1',
        '0006845-5',
        0
    );

    exibirDados($conta);
    executarOperacoes($conta);

    // echo $conta -> obterSaldo(); // -25
    // echo PHP_EOL;
    
    // echo $conta -> depositar(50); // 25
    // echo PHP_EOL;
    
    // echo $conta -> obterSaldo(); // 25
    // echo PHP_EOL;
    
    // echo $conta -> sacar(30); // -5
    // echo PHP_EOL;
    
    // echo $conta -> obterSaldo(); // -5
    // echo PHP_EOL;
