<?php

    declare(strict_types=1);

    $pdo = null;

    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=exemplo', 'root', '');
    } catch (Exception $e) {
        echo $e-> getMessage();
    }

    // var_dump($pdo);
    return $pdo;