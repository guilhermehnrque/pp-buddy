<?php

namespace App\Infrastructure\Doador;

use App\Domain\Cpf;
use App\Domain\Doador\Doador;
use App\Domain\Doador\DoadorException;
use App\Domain\Doador\DoadorRepository;
use JetBrains\PhpStorm\ArrayShape;

class DoadorRepositoryMemory implements DoadorRepository
{
    /**
     * @var array
     */
    private array $doadores = [
        [
            "name" => 'teste',
            "cpf" => '000.000.000-00',
            "email" => 'teste@teste.com',
            "phoneNumber" => 996614547
        ],
    ];
    /**
     * @return array
     */
    public function findAll(): array
    {
        return $this->doadores;
    }

    /**
     * @param Doador $doador
     * @return array
     */
    #[ArrayShape(['name' => "string", 'cpf' => "string", 'email' => "string", 'phoneNumber' => "int"])]
    public function registerDoador(Doador $doador): array
    {
        $this->doadores[] = $doador->toArray();
        return $doador->toArray();
    }

    /**
     * @param Cpf $cpf
     * @return array
     */
    public function findByCpf(Cpf $cpf): array
    {
        $filtrados = array_filter(
            $this->doadores,
            fn(array $doador) => $doador['cpf'] == (string)$cpf
        );

        if(count($filtrados) === 0){
            throw new DoadorException('Doador não encontrador.');
        }

        return $filtrados;
    }
}