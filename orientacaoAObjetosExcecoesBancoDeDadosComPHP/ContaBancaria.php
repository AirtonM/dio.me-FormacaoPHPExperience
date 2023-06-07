<?php
    
    declare(strict_types=1);

    class ContaBancaria
    {
        private $banco;
        private $nomeTitular;
        private $numeroAgencia;
        private $numeroConta;
        private $saldo;

        public function __construct
        ( 
            string $banco, 
            string $nomeTitular, 
            string $numeroAgencia, 
            string $numeroConta, 
            float $saldo
        )
        {
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }
        public function obterSaldo()
        {
            return 'Seu saldo atual é: ' . $this->saldo;
        }
        public function depositar(float $valor){
            return 'Depósito de R$: ' . $this->saldo += $valor;
        }
        public function sacar(float $valor)
        {
            return 'Saque de R$: ' . $this->saldo -= $valor;
        }
    }

    $conta = new ContaBancaria(
        'Banco Bradesco',
        'Fulano da Silva',
        '8542',
        '75629-987',
        0
    );

    echo $conta->obterSaldo() . "\n";

    echo $conta->depositar(500.00) . "\n";

    echo $conta->obterSaldo() . "\n";

    echo $conta->sacar(200.00) . "\n";

    echo $conta->obterSaldo() . "\n";