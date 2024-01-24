<?php

require __DIR__ . '/vendor/autoload.php';

use Risonaldo\CursoPooPhp\PessoaFisica;
use Risonaldo\CursoPooPhp\PessoaJuridica;

$risonaldo = new PessoaFisica;

$risonaldo->name = "Risonaldo";
$risonaldo->age = 30;
$risonaldo->gender = "M";

$juridica = new PessoaJuridica;

$juridica->name = "Juridica";
$juridica->cnpj = "123456789123";

// if ($juridica instanceof PessoaFisica) {
//     dump("É pessoa Fisica");
// } else {
//     dump("É pessoa Juridica");
// }
