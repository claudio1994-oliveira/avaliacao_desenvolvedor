<?php

require_once __DIR__ . '/vendor/autoload.php';
// Configuração para exibição do console do Doctrine

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    (new Claud\Avaliacao\Infra\EntitymanagerCreator())->getEntityManager()
);
