<?php

namespace App\Domain\Doador;

use App\Domain\Cpf;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class Doador
{
    private string $name;
    private Cpf $cpf;
    private string $email;
    private int $phoneNumber;

    /**
     * @param string $name
     * @param Cpf $cpf
     * @param string $email
     * @param int $phoneNumber
     */
    public function __construct(
        string $name,
        Cpf $cpf,
        string $email,
        int $phoneNumber
    )
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    #[Pure] #[ArrayShape([
            'name' => "string",
            'cpf' => "string",
            'email' => "string",
            'phoneNumber' => "int"]
    )]
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'cpf' => $this->getCpf(),
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber
        ];
    }

}