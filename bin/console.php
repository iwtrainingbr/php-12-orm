<?php

//php composer.phar dump
require dirname(__DIR__).'/vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
use App\Connection\DatabaseConnection;

use Dotenv\Dotenv;

//carregando as variaveis de ambiente (.env)
Dotenv::createImmutable(dirname(__DIR__))->load();

ConsoleRunner::run(
    new SingleManagerProvider(DatabaseConnection::getEntityManager())
);
