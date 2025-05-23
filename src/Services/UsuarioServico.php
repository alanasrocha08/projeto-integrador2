<?php

namespace ProjetoIntegrador\Service;

use Exception;
use PDO;
use ProjetoIntegrador\Database\ConexaoBD;
use ProjetoIntegrador\Models\Usuario;
use Throwable;


final class UsuarioServico 
{
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = ConexaoBD::getConexao();
    }
    PUBLIC function listarTodos(): array
    {
        $sql = "SELECT * FROM usuarios ORDER BY nome";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Throwable $erro) {
            // Utils::registrarLog($erro);
            throw new Exception("Erro ao carregar os usarios:" . $erro->getMessage());
        }
    }
    public function inserir(Usuario $usuario): void 
    {
        $sql = "INSERT INTO usuario(nome) VALUES(:nome)";

        try {

            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":email", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":senha", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":data_de_cadastro", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->execute();
        } catch (Throwable $erro) {
            throw new Exception("Erro ao inserir novo usuario:" . $erro->getMessage());
        }
    }
    public function buscarPorId(int $id): ?array
    {
        $sql = "SELECT * FROM usuarios WHERE id = :id";

         try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $id, PDO::PARAM_INT);
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_ASSOC) ?: null;

        } catch (Throwable  $erro) {
            throw new Exception("Erro ao carregar usuario: " . $erro->getMessage());
        }
    }
    public function atualizar(Usuario $usuario):void {
        $sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $usuario->getId(), PDO::PARAM_INT);
            $consulta->bindValue(":nome", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":email", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":senha", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->bindValue(":data_de_cadastro", $usuario->getNome(), PDO::PARAM_STR);
            $consulta->execute();
        } catch (Throwable $erro) {
        throw new Exception("Erro ao atualizar usuario: " .$erro->getMessage());
        }
    }
    public function excluir(int $id): void {
        $sql = "DELETE FROM usuarios WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $id, PDO::PARAM_INT);
            $consulta->execute();
        }catch (Throwable $erro) {
        throw new Exception("Erro ao excluir usuario: ".$erro->getMessage());
        }
    }
}
