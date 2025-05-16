<?php

namespace ProjetoIntegrador\Models;

final class Usuario 
{
    private ?int $id;
    private string $nome;
    private string $email;
    private string $senha;
    private string $dataDeCadastro;

    public function __construct(
        string $nome,
        string $email,
        string $senha,
        string $DataDeCadastro,
        ?int $id = null
    ){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setDataDeCadastro($DataDeCadastro);
        $this->setId($id);
    }

    public function getNome(): string
    {
        return $this->nome;
    }