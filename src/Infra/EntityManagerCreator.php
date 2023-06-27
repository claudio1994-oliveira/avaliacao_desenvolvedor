<?php

namespace Claud\Avaliacao\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public function getEntityManager(): EntityManagerInterface
    {
        $paths = [__DIR__ . '/../Entity'];
        $isDevMode = false;
        /*
         * Caso Precise testar com um Banco Sqlite
        $connectionParams = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . $_ENV['PATH']
        );*/

        $connectionParams = array(
            'dbname' => $_ENV['DBNAME'],
            'user' => $_ENV['USER'],
            'password' => $_ENV['PASSWORD'],
            'host' => $_ENV['HOST'],
            'driver' => 'pdo_mysql',
        );

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode,
            null,
            null,
            false
        );
        return EntityManager::create($connectionParams, $config);
    }
}
