<?php

namespace App\Application\Doador;

use PHPUnit\Framework\TestCase;

class FindAllDoadorTest extends TestCase
{
    public function testFindAllDoadores()
    {
        $doador = new FindAllDoador();
        $response = $doador->findAll();

        $this->assertIsArray($response);
        var_dump($response);
    }

}