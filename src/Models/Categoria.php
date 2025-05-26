<?php

namespace ProjetoIntegrador\Models;

final class Categoria
{
    private ?int $id;
    private string $nome;

    public function __construct(
        string $nome,
        ?int $id = null
    ){
        $this->setNome($nome);
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

    private function setId(?int $id): void
    {
        $this->id = $id;
    }
     private function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}