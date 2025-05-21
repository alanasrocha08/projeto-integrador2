<?php

namespace ProjetoIntegrador\Service;

use Exception;
use PDO;
use ProjetoIntegrador\Database\ConexaoBD;
use ProjetoIntegrador\Models\Produto;
use Throwable;

final class ProdutoServico
{
    private PDO $conexao;

    public function  __construct()
    {
        $this->conexao = ConexaoBD::getConexao();
    }

    public function listarTodos(): array 
    {
        $sql = "SELECT * FROM produtos ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);
            consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $erro) {
            throw new Exception("Erro ao carregar os produtos:" .$erro->getMessage());
        }
    }

    public function inserir(Produto $produto): void 
    {
        $sql = "INSERT INTO produto(nome) VALUES(:nome)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $produto->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":descricao", $produto->getDescricao(), PDO::PARAM_STR);
            $consulta->bindValue(":preco", $produto->getPreco(), PDO::PARAM_STR);
            $consulta->bindValue(":categoria_id", $produto->getCategoriaId(), PDO::PARAM_STR);
            $consulta->execute();
        } catch (Throwable $erro) {
            throw new Exception("Erro ao inserir novo produto: " . $erro->getMessage());
        }
    }

    public function atualizar(Produto $produto): void {
        $sql = "UPDATE produto SET nome = :nome WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $produto->getId(), PDO::PARAM_INT);
            $consulta->bindValue(":nome", $produto->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":descricao", $produto->getDescricao(), PDO::PARAM_STR);
            $consulta->bindValue(":preco", $produto->getPreco(), PDO::PARAM_STR);
            $consulta->bindValue(":categoria_id", $produto->getCategoriaId(), PDO::PARAM_STR);
            $consulta->execute();
        } catch (Throwable $erro) {
            throw new Exception("Erro ao atualizar produto: " . $erro->getMessage());
        }
    }

    public function excluir(int $id): void {
        $sql = "DELETE FROM produto WHERE id = :id";

         try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Throwable $erro) {
        throw new Exception("Erro ao excluir produto: ".$erro->getMessage());
    }
    }
}