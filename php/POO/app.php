<?php

require __DIR__ . '/vendor/autoload.php';

use Risonaldo\CursoPooPhp\PessoaFisica;


$pessoaFisica = new PessoaFisica();

$pessoaFisica->setNome('Risonaldo');
$pessoaFisica->setSobrenome('Maciel');
$pessoaFisica->setEmail('risonaldomaciel@hotmail.com');
$pessoaFisica->setCpf('12345678910');
$pessoaFisica->setIdade(31);
$pessoaFisica->setTelefone('123456789');

dump($pessoaFisica);
