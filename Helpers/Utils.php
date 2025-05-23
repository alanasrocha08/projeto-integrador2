<?php

namespace ProjetoIntegrador\Helpers;

use Throwable;

final class Utils 
{

    private function __construct() {}

    public static function sanitizar(mixed $entrada, string $tipo = 'texto'): mixed
    {
        switch ($tipo) {
            case 'email':
                return trim(filter_var($entrada, FILTER_SANITIZE_EMAIL));
            case 'inteiro':
                return (int) filter_var($entrada, FILTER_SANITIZE_NUMBER_INT);
            case 'arquivo':
                // Verifica se é um upload válido vindo de $_FILES
                if (is_array($entrada) && isset($entrada['tmp_name']) && is_uploaded_file($entrada['tmp_name'])) {
                    return $entrada; // Tudo certo, deixa o método de upload validar o resto
                } else {
                    return null; // Rejeita qualquer tentativa suspeita
                }
            default:
                return trim(filter_var($entrada, FILTER_SANITIZE_SPECIAL_CHARS));
        }
    }

    // Verificando o id das páginas
     public static function verificarId(mixed $valor): void
    {
        if (!isset($valor) || !is_numeric($valor) || $valor <= 0) {
            // Se não for, redireciona para a página inicial
            header("Location: index.php");
            exit;
        }
    }

    public static function formataData(string $data): string
    {
        return date("d/m/Y H:i", strtotime($data));
    }

    public static function codificarSenha(string $senha): string
    {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    public static function verificarSenha(
        string $senhaFormulario,
        string $senhaBanco
    ): string {

        /* Usamos a função password_verify para COMPARAR
        as duas senhas: a digitada no formulário e a existente
        no banco de dados. */
        if (password_verify($senhaFormulario, $senhaBanco)) {
            /* Se forem IGUAIS, mantemos a senha já existente,
            sem qualquer modificação. */
            return $senhaBanco;
        } else {
            /* Se forem DIFERENTES, então a nova senha (ou seja,
            a que foi digitada no formulário) DEVE ser codificada. */
            return self::codificarSenha($senhaFormulario);
        }
    }

    public static function alertaErro(string $mensagem): void
    {
        $mensagemSanitizada = filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
        die("<script>alert('$mensagemSanitizada'); history.back(); </script>");
    }

    public static function registrarLog(Throwable $e): void
    {
        date_default_timezone_set('America/Sao_Paulo');

        $mensagem = "[" . date("Y-m-d H:i:s") . "]\n" .
            "Arquivo: " . $e->getFile() . "\n" .
            "Linha: " . $e->getLine() . "\n" .
            "Mensagem: " . $e->getMessage() . "\n\n";


        file_put_contents(__DIR__ . '/../../logs/erros.log', $mensagem, FILE_APPEND);
    }
}