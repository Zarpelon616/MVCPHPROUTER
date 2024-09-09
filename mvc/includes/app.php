<?php
require __DIR__ . '/../vendor/autoload.php'; 

use \App\Controllers\Pages\Home;
use App\Utils\Views; 
use WilliamCosta\DatabaseManager\Database;
use \WilliamCosta\DotEnv\Environment;

//CARREGAR AS VARIAVEIS DE AMBIENTE
Environment::load(__DIR__.'/../'); 
Database::config(
    getenv('DB_HOST'),
    getenv('DB_NAME'),
    getenv('DB_USER'),
    getenv('DB_PASS'),
    getenv('DB_PORT'),
);
//DEFINE AS CONFIGURAÇÕES DO BANCO DE DADOS 
define('URL',getenv('URL'));
//DEFINE O VALOR PADRÃO DAS VARIAVEIS.

Views::init([
   'URL'=>URL
]);