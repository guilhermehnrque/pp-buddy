<?php

namespace App\Domain;

/**
 *
 */
class Cpf
{
    /**
     * @var string
     */
    private string $cpf;

    /**
     * @param string $cpf
     */
    public function __construct(string $cpf)
    {
        $this->setCpf($cpf);
    }

    /**
     * @param string $cpf
     * @return void
     */
    private function setCpf(string $cpf): void
    {
        $pattern = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];

        if (filter_var($cpf, FILTER_VALIDATE_REGEXP, $pattern) === false) {
            throw new \InvalidArgumentException('CPF no formato inválido');
        }

        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->cpf;
    }
}
