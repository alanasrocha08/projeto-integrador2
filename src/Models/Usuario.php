<?php

namespace ProjetoIntegrador\Models;

final class Usuario 
{
    private ?int $id;
    private string $nome;
    private string $email;
    private string $senha;

    public function __construct(
        string $nome,
        string $email,
        string $senha,
        ?int $id = null
    ){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setId($id);
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getSenha(): string
    {
        return $this->senha;
    }
  
    public function getId(): int
    {
        return $this->id;
    }

    private function setNome(string $nome): void
    {
        $this->nome = $nome;
    } 

    private function setEmail(string $email): void 
    {
        $this->email = $email;
    }

    private function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    private function setId(?int $id): void
    {
        $this->id = $id;
    }
}