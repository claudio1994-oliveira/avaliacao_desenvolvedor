<?php

namespace Claud\Avaliacao\Helper;

trait RenderizadorDeHtmlTrait
{
    public function rederizaHtml(string $caminhoTemplate, array $dados): string
    {
        extract($dados);
        ob_start();
        require __DIR__ . '/../../view/' . $caminhoTemplate;
        $html = ob_get_clean();
        return $html;
    }

}