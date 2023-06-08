<?php

    /*
        Crie uma função chamada divisao() que deverá receber dois números. Na função, verifique se algum dos números passados por parâmetro é igual à 0, caso positivo, lance uma exceção. Em seguida, escreva um algoritmo responsável por executar a função divisao() forçando-a lançar a exceção (passando 0 em algum parâmetro e realize o tratamento e captura através do Try Catch 
            $a = 10;
            $b = 2;
            echo intdiv($a, $b);
    */  

    function divisao(int $a, int $b){
        // Verifica se algum número é igual a 0
        if($a == 0 || $b == 0){
            // Mensagem de Erro
            throw new Exception("\nValores devem ser diferente de 0.\n");
        }
        // Caso seja diferente de 0 realiza a divisão
        return $a / $b;
    }

    // Definição dos valores
    $a = 1;
    $b = 0;

    // Realiza a verificação e tratamento da mensagem de erro
    try{
        // Joga a divisão para uma variável e logo em seguida imprime caso passe pelo if
        $resultado = divisao($a,$b);
        echo "\nO resultado da divisão é: " . $resultado . "\n";
    } catch(Exception $e){
        // Imprime mensagem de erro
        echo $e->getMessage();
        die();
    }


