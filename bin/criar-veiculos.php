<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Connection\DatabaseConnection;
use App\Model\Marca;
use Dotenv\Dotenv;
use Faker\Factory;
use App\Model\Veiculo;

Dotenv::createImmutable(dirname(__DIR__))->load();

$faker = Factory::create('pt_BR');

$orm = DatabaseConnection::getEntityManager();

$marcas = $orm->getRepository(Marca::class)->findAll();

for ($i = 1; $i <= 1000; $i++) {
    $veiculo = new Veiculo();
    $veiculo->modelo = $faker->word;
    $veiculo->placa = $faker->unique()->numerify('???-####');
    $veiculo->cor = $faker->colorName();
    $veiculo->ano = $faker->year();
    $veiculo->marca = $marcas[rand(0, 6)];

    $orm->persist($veiculo);
}

$orm->flush();