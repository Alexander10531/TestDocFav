<?php

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

require_once __DIR__ . '/../vendor/autoload.php'; 

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/../src/Entity'], 
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'dbname'   => 'test_database',
    'user'     => 'root',
    'password' => 'my-secret-pw',
    'host'     => 'database-test',
    'driver'   => 'pdo_mysql',
], $config);

$entityManager = new EntityManager($connection, $config);