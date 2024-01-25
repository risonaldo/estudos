<?php

require __DIR__ . '/vendor/autoload.php';

define('URL', 'http://localhost:8888');

use \App\Http\Router;
use \App\Controller\Pages\Home;

$obRouter = new Router(URL);

echo "<pre>";
print_r($obRouter);
echo "</pre>";

exit;
echo Home::getHome();
