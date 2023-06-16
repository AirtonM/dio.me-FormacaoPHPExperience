<?php

    /*
     * Crie uma classe chamada "Blog com as seguintes funcionalidades(métodos): Listagem, inclusão, edição e exclusão de posts.
     * A conexão com a base de dados pod ser realizada no método de construtor de classe.
     * Crie um arquivo responsável por tratar as oprações e realizar de fato a chamata para cada operação (método) da classe de persistência.
     */

     require "blog.php";

     $blog = new Blog();

     switch ($_GET['operacao']){
        case 'list':
            echo "<h3>Blog</h3>";

            foreach ($blog->list() as $key => $value){
                echo "Id: " . $value["id"] . "\nConteúdo: " . $value["conteudo"] . "<hr>";
            }
            break;

            case 'insert':
                $status = $blog->insert('Conteúdo do Blog Teste 01');
                if (!$status){
                    echo "Não foi possível executar a operação";
                    return false;
                }
                echo "Registro executado com sucesso";
                break;

            case 'update':
                $status = $blog->update('Conteúdo Alterado 01', 2);
                if (!$status){
                    echo "Não foi possível executar a operação";
                    return false;
                }
                echo "Registro atualizado com sucesso";
                break;
                    
            case 'delete';
                $status = $blog->delete(2);
                if (!$status){
                    echo "Não foi possível executar a operação";
                    return false;
                }
                echo "Registro deletado com sucesso";
                break;
     }

     