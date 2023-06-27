<?php

namespace Claud\Avaliacao\Controller;

use Claud\Avaliacao\Entity\Compra;
use Claud\Avaliacao\Helper\FlashMessageTrait;
use Claud\Avaliacao\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;

    private $entityManeger;
    public function __construct()
    {
        $this->entityManeger = (new EntityManagerCreator())
            ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

        $fields = $this->preparaStream($arquivo_tmp);


        if (count($fields) === 0 || $fields == "") {
            $tipo = "danger";
            $this->defineMensagem($tipo, 'Não existe nenhum dado no arquivo. Por favor verifique e envie novamente.');
            header("Location: /novo", true, 302);
            return;
        }

        foreach ($fields as $linhas) {
            // percorro a linha pegandos os itens
            $comprador = $linhas[0];
            $descricao =  $linhas[1];
            $precoUnit =  $linhas[2];
            $qtd =  $linhas[3];
            $endereco =  $linhas[4];
            $fornecedor =  $linhas[5];

            $compra = new Compra();
            $compra->setComprador($comprador);
            $compra->setDescricao($descricao);
            $compra->setPrecoUnit($precoUnit);
            $compra->setQuantidade($qtd);
            $compra->setEndereco($endereco);
            $compra->setFornecedor($fornecedor);
            // Insere os dados no Banco
            $this->entityManeger->persist($compra);
            $this->entityManeger->flush();

            $this->defineMensagem("success", "Dados da compra inseridos com sucesso!");
        }

        header("Location: /novo", true, 302);
    }

    private function preparaStream($arquivo)
    {
        $file = fopen($arquivo, 'r');
        $fields = [];
        $count = -1;
        // Percorrendo o arquivo e separando o campos (fields)
        while (!feof($file)) {
            $linha = fgets($file);
            $fields[++$count] = explode("\t", $linha);
        }
        // eliminando os indices da primeira coluna
        array_shift($fields);

        return $fields;
    }
}
