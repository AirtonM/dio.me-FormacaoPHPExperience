<?php

    require_once "vendor/autoload.php";
    use Wead\DigitalCep\Search;

    $busca = new Search;

    $resultado = $busca -> getAddressFromZipcode('67206047');

    print_r($resultado);