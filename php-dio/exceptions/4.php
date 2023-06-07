<?php

    function validarUsuario(array $usuario)
    {
        if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']) )
        {
           throw new Exception("\n\nCampos obrigatórios não foram preenchidos!\n\n");
        }
        
        return true;
    }

    $usuario = [
        'codigo' => 1,
        'nome' => '',
        'idade' => 57,
    ];

    try {
        $status = validarUsuario($usuario);
    } catch (Exception $e) {
        echo $e -> getMessage();
        die();
    }

    echo "\n____Executando____";