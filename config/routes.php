<?php

use Claud\Avaliacao\Controller\Formulario;
use Claud\Avaliacao\Controller\Home;
use Claud\Avaliacao\Controller\ListarCompras;
use Claud\Avaliacao\Controller\Persistencia;


return array(
    '/listar-todos' => ListarCompras::class,
    '/novo' => Formulario::class,
    '/salvar-dados' => Persistencia::class,
    '/home' => Home::class,
);

