<?php

namespace App\Application\Doador;

use App\Domain\Doador\DoadorException;
use PHPUnit\Framework\TestCase;

class FindDoadorByCpfTest extends TestCase
{
    public function testDoadorFindByCpf()
    {
        $doador = new FindDoadorByCpf();
        $response = $doador->findByCpf(cpf: '000.000.000-00');

        $this->assertIsArray($response);
    }

    public function testDoadorFindByCpfNotFound()
    {
        $doador = new FindDoadorByCpf();

        $this->expectException(DoadorException::class);
        $doador->findByCpf(cpf: '100.000.000-00');
    }

}