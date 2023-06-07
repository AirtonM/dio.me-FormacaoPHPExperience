<?php

    declare(strict_types=1);

    class ContaBancaria
    {
        // public - private - protected
        private  $banco;
        private  $nomeTitular;
        private  $numeroAgencia;
        private  $numeroConta;
        private  $saldo;

        public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
        {
            $this -> banco = $banco;
            $this -> nomeTitular = $nomeTitular;
            $this -> numeroAgencia = $numeroAgencia;
            $this -> numeroConta = $numeroConta;
            $this -> saldo = $saldo;   
        }

        public function obterSaldo ()
        {
            return "Seu saldo é: " . $this-> saldo;
        }

        public function depositar($valor)
        {
            $this -> saldo += $valor;
            return "Depósito de R$: " . $valor . " realizado\n";
        }

        public function sacar($valor)
        {
            $this -> saldo -= $valor;
            return "Saque de R$: " . $valor . " realizado\n";
        }
    }
    
    $conta = new ContaBancaria(
        'Banco Bradesco',
        'Airton L Marinho',
        '0000',
        '123456-7',
        0,
    );

    echo $conta -> obterSaldo() . "\n";
    
    $conta -> depositar(300.00);

    echo $conta -> obterSaldo() . "\n";

    $conta -> sacar(150.00);
    
    echo $conta -> obterSaldo() . "\n";

