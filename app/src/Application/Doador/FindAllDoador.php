<?php

namespace App\Application\Doador;

use App\Domain\Doador\DoadorRepository;
use App\Repository\Doador\DoadorRepositoryMemory;
use JetBrains\PhpStorm\Pure;

class FindAllDoador
{
    private DoadorRepository $doadorRepository;

    #[Pure]
    public function __construct()
    {
        $this->doadorRepository = new DoadorRepositoryMemory();
    }

    public function findAll(): array
    {
        return $this->doadorRepository->findAll();
    }
}