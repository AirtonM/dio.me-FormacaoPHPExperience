<?php
    echo "For de 1 a 10: ";
    for( $a = 1 ; $a <= 10; $a++ ){
        echo $a . " ";
    }
    echo "\n";

    $arrayNumeros = [3,5,6,1,2];
    echo "Número do array: ";
    var_dump($arrayNumeros[0]);

    $qtd_elementos_arrayNumeros = count($arrayNumeros);  
    echo "Quantidade de números no array: ";
    var_dump($qtd_elementos_arrayNumeros);

    echo "Números no array: ";
    for ($b=0; $b < $qtd_elementos_arrayNumeros; $b++) { 
        echo $arrayNumeros[$b] . " ";
    }

    $arr = [1, 5, 3, 0];
    $qtd_elementos_array = count($arr);

    // $c = 0;
    // $posicaoAtual = 1;
    echo "\nOrganizador de Array: \n";
    for ($c=0; $c < $qtd_elementos_array -1; $c++) { 
        for ($posicaoAtual = 0; $posicaoAtual < $qtd_elementos_array -$c -1; $posicaoAtual++){

            $proximaPosicao = $posicaoAtual + 1;

            if ($arr[$proximaPosicao] < $arr[$posicaoAtual]){

                $auxiliar = $arr[$posicaoAtual];
                $arr[$posicaoAtual] = $arr[$proximaPosicao];
                $arr[$proximaPosicao] = $auxiliar;
            }
        }
    }
    print_r($arr) . "\n";