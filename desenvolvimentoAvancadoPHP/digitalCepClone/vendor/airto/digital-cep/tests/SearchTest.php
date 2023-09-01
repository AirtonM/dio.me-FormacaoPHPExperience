<?php

use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;

class SearchTest extends TestCase{
    public function testGetAddressFromZipCodeDefaultUsage(){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipCode('68746045');
        $esperado = 
        [
            "cep" => "68746-045",
            "logradouro" => "Travessa Galvão Bueno",
            "complemento" => "",
            "bairro" => "Jaderlândia",
            "localidade" => "Castanhal",
            "uf" => "PA",
            "ibge" => "1502400",
            "gia" => "",
            "ddd" => "91",
            "siafi" => "0447",
        ];

        $this->assertEquals($esperado, $resultado);
   }
}