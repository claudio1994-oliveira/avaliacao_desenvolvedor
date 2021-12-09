<?php

namespace Claud\Avaliacao\Controller;

use Claud\Avaliacao\Helper\RenderizadorDeHtmlTrait;

class Home implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;
    public function processaRequisicao(): void
    {
        echo $this->rederizaHtml('compras/home.php', ['titulo'=> "Home" ]);
    }
}