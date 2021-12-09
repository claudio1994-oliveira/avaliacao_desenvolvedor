<?php

namespace Claud\Avaliacao\Controller;

use Claud\Avaliacao\Entity\Compra;
use Claud\Avaliacao\Helper\RenderizadorDeHtmlTrait;
use Claud\Avaliacao\Infra\EntityManagerCreator;

class ListarCompras implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;
    private $repositorioDeCompras;
    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCompras =  $entityManager->getRepository(Compra::class);

    }
    
    public function processaRequisicao(): void
    {
        $compras = $this->repositorioDeCompras->findAll();

        echo $this->rederizaHtml('compras/listar-todos.php',['compras'=>$compras, 'titulo'=>'Listar Compras']);

    }


}