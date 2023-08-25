<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Connection\DatabaseConnection;
use Dotenv\Dotenv;
use Faker\Factory;
use App\Model\Cliente;

Dotenv::createImmutable(dirname(__DIR__))->load();

$faker = Factory::create('pt_BR');

$orm = DatabaseConnection::getEntityManager();

for ($i = 1; $i <= 1000; $i++) {
    $cliente = new Cliente();
    $cliente->nome = $faker->name;
    $cliente->email = $faker->unique()->email;

    $orm->persist($cliente);
}

$orm->flush();