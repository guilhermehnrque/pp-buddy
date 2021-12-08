<?php

namespace Unit\Domain\Doador;

use App\Domain\Cpf;
use App\Domain\Doador\Doador;
use PHPUnit\Framework\TestCase;

class DoadorTest extends TestCase
{
    public function testDoadorToArray()
    {
        $doador = new Doador(
            name: 'Guilherme Henrique',
            cpf: new Cpf('141.261.017-64'),
            email: 'guilhermehnrque@gmail.com',
            phoneNumber: 996614547
        );

        $this->assertIsArray($doador->toArray());
    }
}