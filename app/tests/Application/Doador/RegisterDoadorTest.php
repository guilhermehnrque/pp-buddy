<?php

namespace App\Application\Doador;

use PHPUnit\Framework\TestCase;

class RegisterDoadorTest extends TestCase
{
    public function testDoadorRegister()
    {
        $doador = [
            'name' => 'Guilherme Henrique',
            'cpf' => '141.261.017-64',
            'email' => 'guilhermehnrque@gmail.com',
            'phoneNumber' => 996614547
        ];

        $register = new RegisterDoador();
        $response = $register->register($doador);

        $this->assertEquals($response['name'], $doador['name']);
        $this->assertEquals($response['cpf'], $doador['cpf']);
        $this->assertEquals($response['email'], $doador['email']);
        $this->assertEquals($response['phoneNumber'], $doador['phoneNumber']);
    }

    public function testDoadorRegisterInvalidCPF()
    {
        $doador = [
            'name' => 'Guilherme Henrique',
            'cpf' => '141.261.01764',
            'email' => 'guilhermehnrque@gmail.com',
            'phoneNumber' => 996614547
        ];

        $this->expectException(\InvalidArgumentException::class);
        $register = new RegisterDoador();
        $register->register($doador);
    }

}