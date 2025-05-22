<?php

namespace ProjetoIntegrador\Services;

use Exception;
use PDO;
use ProjetoIntegrador\Database\ConexaoBD;
use Throwable;
use ProjetoIntegrador\Models\Categoria;

final class CategoriaServico
{
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = ConexaoBD::getConexao();
    }
    public function listarTodos(): array
    {
        $sql = "SELECT * FROM categoria ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            //Utils::registrarLog($e);
            throw new Exception("Erro ao listar categorias: ");
        }
    } 

    public function buscarPorId(int $id): ?array
    {
        $sql = "SELECT * FROM categoria WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC) ?: null;
        } catch (Throwable $erro) {
            //Utils::registrarLog($e);
            throw new Exception("Erro ao buscar categoria por ID: ");
        }
    }

    public function inserir(Categoria $categoria): void
    {
        $sql = "INSERT INTO categoria(nome) VALUES(:nome)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $categoria->getNome(), PDO::PARAM_STR);
            $consulta->execute();
        } catch (Throwable $e) {
            //Utils::registrarLog($e);
            throw new Exception("Erro ao inserir categoria: ");
        }
    }
    public function atualizar(Categoria $categoria): void
    {
        $sql = "UPDATE categoria SET nome = :nome WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $categoria->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":id", $categoria->getId(), PDO::PARAM_INT);
            $consulta->execute();
        } catch (Throwable $e) {
            //Utils::registrarLog($e);
            throw new Exception("Erro ao atualizar categoria: ");
        }
    }

    public function excluir(int $id): void
    {
        $sql = "DELETE FROM categoria WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $id, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Throwable $e) {
            //Utils::registrarLog($e);
            throw new Exception("Erro ao excluir categoria: ");
        }
    }
}