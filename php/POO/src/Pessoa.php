<?php

declare(strict_types=1);

namespace Risonaldo\CursoPooPhp;

abstract class Pessoa
{
    public $name;

    public function showName(): void
    {
        echo $this->name . PHP_EOL;
    }
}
