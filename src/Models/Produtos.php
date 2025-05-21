<?php

namespace ProjetoIntegrador\Models;

final class Produto
{
    private ?int $id;
    private string $nome;
    private string $descricao;
    private float $preco;
    private int $categoriaId;

    public function __construct(
        string $nome,
        string $descricao,
        float $preco,
        int $categoriaId,
        ?int $id = null
    ){
        $this->setNome($nome);
        $this->setDescricao($descricao);
        $this->setPreco($preco);
        $this->setCategoriaId($categoriaId);
        $this->setId($id);
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getDescricao(): ?string
    {
        return $this->descricao;
    }
    public function getPreco(): float
    {
        return $this->preco;
    }
     public function getCategoriaId(): int
    {
        return $this->categoriaId;
    }

    private function setId(?int $id): void
    {
        $this->id = $id;
    }

    private function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    private function setDescricao(?string $descricao): void
    {
        $this->descricao = $descricao;
    }

    private function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }
     public function setCategoriaId(int $categoriaId): void
    {
       $this->categoriaId = $categoriaId;
    }
}