<?php

declare(strict_types=1);

namespace Risonaldo\CursoPooPhp;

class PessoaFisica
{
    private string $nome;
    private string $sobrenome;
    private string $email;
    private string $telefone;
    private string $cpf;
    private int $idade;

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function setSobreNome(string $sobrenome): void
    {
        $this->sobrenome = $sobrenome;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }
}
