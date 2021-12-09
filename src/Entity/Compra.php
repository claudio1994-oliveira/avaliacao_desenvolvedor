<?php

namespace Claud\Avaliacao\Entity;
/**
 * @Entity
 */
class Compra
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $comprador;
    /**
     * @Column(type="string")
     */
    private $descricao;
    /**
     * @Column(type="float")
     */
    private $precoUnit;
    /**
     * @Column(type="integer")
     */
    private $qtd;
    /**
     * @Column(type="string")
     */
    private $endereco;
    /**
     * @Column(type="string")
     */
    private $fornecedor;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getComprador()
    {
        return $this->comprador;
    }

    /**
     * @param mixed $comprador
     */
    public function setComprador($comprador): void
    {
        $this->comprador = $comprador;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getPrecoUnit()
    {
        return $this->precoUnit;
    }

    /**
     * @param mixed $precoUnit
     */
    public function setPrecoUnit($precoUnit): void
    {
        $this->precoUnit = $precoUnit;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->qtd;
    }

    /**
     * @param mixed $qtd
     */
    public function setQuantidade($qtd): void
    {
        $this->qtd = $qtd;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * @param mixed $fornecedor
     */
    public function setFornecedor($fornecedor): void
    {
        $this->fornecedor = $fornecedor;
    }

}