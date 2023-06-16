<?php

    require "produto.php";

    $produto = new Produto();

    switch ($_GET['operacao']){
        case 'list':
            
            echo "<h3>Produtos: </h3>";

            foreach ($produto->list() as $key => $value){
                echo "Id: " . $value["id"] . "\nDescrição: " . $value["descricao"] . "<hr>";
            }
            break;
        
        case 'insert':
            $status = $produto->insert('Produto Teste 01');
            if (!$status){
                echo "Não foi possível executar a operação";
                return false;
            }
            echo "Registro executado com sucesso";
            break;

        case 'update':
            $status = $produto->update('Produto Alterado 01', 1);
            if (!$status){
                echo "Não foi possível executar a operação";
                return false;
            }
            echo "Registro atualizado com sucesso";
            break;
        
        case 'delete';
            $status = $produto->delete(1);
            if (!$status){
                echo "Não foi possível executar a operação";
                return false;
            }
            echo "Registro deletado com sucesso";
            break;
    }