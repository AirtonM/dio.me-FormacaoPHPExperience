<?php

    class ContaBancaria
    {
        public $banco;
        public $nomeTitular = "Fulano da Silva";
        public $numeroAgencia = 3467;
        public $numeroConta = 987456;
        public $saldo = 1000.00;
    }

    $conta = new ContaBancaria();

    var_dump($conta->saldo);

    $conta->saldo = 0;

    var_dump($conta->saldo);