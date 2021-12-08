<?php

namespace App\Domain\Doador;

use App\Domain\Cpf;

interface DoadorRepository
{
    /**
     * @return array
     */
    public function findAll(): array;

    /**
     * @param Cpf $cpf
     * @return array
     */
    public function findByCpf(Cpf $cpf): array;

    /**
     * @param Doador $doador
     * @return array
     */
    public function registerDoador(Doador $doador): array;

}