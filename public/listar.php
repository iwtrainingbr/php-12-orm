<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Connection\DatabaseConnection;
use App\Model\Veiculo;

$em = DatabaseConnection::getEntityManager();

$repository = $em->getRepository(Veiculo::class);

var_dump(
    $repository->findAll()
);

// $x = $repository->find(1);
// $em->remove($x);
// $em->flush();

// DELETE FROM Veiculo WHERE id='1'