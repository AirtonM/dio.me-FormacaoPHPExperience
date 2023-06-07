<?php   

    declare(strict_types=1);
    
    class Venda
    {
        private $data;
        private $produto;
        private $quantidade;
        private $valorTotal;

        public function __construct($data, $produto, $quantidade, $valorTotal)
        {
            $this -> data = $data;
            $this -> produto = $produto;
            $this -> quantidade = $quantidade;
            $this -> valorTotal = $valorTotal;
        }
    }
    
    $venda = new Venda(
        '10-10-2022',
        'Vibrador',
        3,
        324.99,
    );

    var_dump($venda);