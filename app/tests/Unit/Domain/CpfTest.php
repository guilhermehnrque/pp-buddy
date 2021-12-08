<?php

namespace App\tests\Domain;

use App\Domain\Cpf;
use PHPUnit\Framework\TestCase;

class CpfTest extends TestCase
{
    public function testCpfWithoutDots()
    {
        $this->expectException(\InvalidArgumentException::class);

        new Cpf('14126101764');
    }

    public function testCpfValid()
    {
        $cpfBase = '141.261.017-64';

        $cpf = new Cpf('141.261.017-64');
        $this->assertEquals($cpfBase, $cpf);
    }
}