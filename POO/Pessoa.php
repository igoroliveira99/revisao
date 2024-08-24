<?php

declare(strict_type=1);

class Pessoa
{
    private string $nome;
    private string $email;
    private int $idade;
    private float $salario;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}