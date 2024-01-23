<?php

require __DIR__ . '/vendor/autoload.php';

use Risonaldo\CursoPooPhp\PessoaFisica;


$pessoaFisica = new PessoaFisica(
    'Risonaldo',
    'Maciel',
    'risonaldomaciel@hotmail.com',
    '123456789',
    '12345678910',
    31
);

dump($pessoaFisica->getInformacao());
