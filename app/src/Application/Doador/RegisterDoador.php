<?php

namespace App\Application\Doador;

use App\Domain\Cpf;
use App\Domain\Doador\Doador;
use App\Domain\Doador\DoadorRepository;
use App\Repository\Doador\DoadorRepositoryMemory;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class RegisterDoador
{
    private DoadorRepository $doadorRepository;

    #[Pure]
    public function __construct()
    {
        $this->doadorRepository = new DoadorRepositoryMemory();
    }

    #[ArrayShape([
        'name' => "string",
        'cpf' => "string",
        'email' => "string",
        'phoneNumber' => "int"]
    )]
    public function register(array $payload): array
    {
        $doador = new Doador(
            name: $payload['name'],
            cpf: new Cpf($payload['cpf']),
            email: $payload['email'],
            phoneNumber: $payload['phoneNumber']
        );

        return $this->doadorRepository->registerDoador($doador);
    }
}