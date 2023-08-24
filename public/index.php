<?php

//php composer.phar dump
require dirname(__DIR__).'/vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
use App\Connection\DatabaseConnection;

ConsoleRunner::run(
    new SingleManagerProvider(DatabaseConnection::getEntityManager())
);

//php public/index.php