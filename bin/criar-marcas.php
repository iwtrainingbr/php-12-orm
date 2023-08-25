<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Connection\DatabaseConnection;
use App\Model\Marca;
use Dotenv\Dotenv;

$marcas = [
    'Chevrolet',
    'Fiat',
    'Ford',
    'Yamaha',
    'Jeep',
    'BMW',
    'VolksWagen',
];

Dotenv::createImmutable(dirname(__DIR__))->load();

$orm = DatabaseConnection::getEntityManager();

foreach ($marcas as $cada) {
    $novaMarca = new Marca();
    $novaMarca->nome = $cada;

    $orm->persist($novaMarca);
}

$orm->flush();