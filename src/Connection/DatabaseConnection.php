<?php

declare(strict_types=1);

namespace App\Connection;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class DatabaseConnection
{
    public static function getEntityManager(): EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [dirname(__DIR__)."/Model"],
            isDevMode: true,
        );

        $connection = DriverManager::getConnection([
            'driver' => 'pdo_mysql',
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASS'], 
        ], $config);

        return new EntityManager($connection, $config);
    }
}
