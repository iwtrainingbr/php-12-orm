<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Connection\DatabaseConnection;
use App\Model\Veiculo;
use App\Model\Marca;

$marca = new Marca();
$marca->nome = 'Honda';

$em = DatabaseConnection::getEntityManager();
$em->persist($marca);

$moto = new Veiculo();
$moto->marca = $marca;
$moto->modelo = 'Fazer';
$moto->placa = 'ABC-1212';
$moto->cor = 'Branca';
$moto->ano = 2020;


$em->persist($moto);

$em->flush();

