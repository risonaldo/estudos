<?php

declare(strict_types=1);

namespace Risonaldo\CursoPooPhp;

class PessoaFisica
{
    const OBJECT_TYPE = 'Ser humano';

    private static string $nome;
    private string $sobrenome;
    private string $email;
    private string $telefone;
    private string $cpf;
    private int $idade;

    public function __construct(
        string $nome,
        string $sobrenome,
        string $email,
        string $telefone,
        string $cpf,
        int $idade
    ) {
        self::$nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

    public static function getInformacao(): string
    {
        return self::$nome . " - " . self::OBJECT_TYPE;
    }
}
