<?php

namespace App\Application\Doador;

use App\Domain\Cpf;
use App\Domain\Doador\DoadorRepository;
use App\Repository\Doador\DoadorRepositoryMemory;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class FindDoadorByCpf
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
    public function findByCpf(string $cpf): array
    {
        $cpf = new Cpf($cpf);

        return $this->doadorRepository->findByCpf($cpf);
    }
}