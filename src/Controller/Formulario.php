<?php

namespace Claud\Avaliacao\Controller;

use Claud\Avaliacao\Helper\RenderizadorDeHtmlTrait;

class Formulario implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;
    public function processaRequisicao(): void
    {
        echo $this->rederizaHtml('formulario/formulario.php', ['titulo'=> "Inserir Valores"
            ]);
    }
}