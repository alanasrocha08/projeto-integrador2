<?php

namespace ProjetoIntegrador\Helpers;

use InvalidArgumentException;
use Microblog\Enums\TipoUsuario;

final class Validacoes 
{
    private function __construct() {}

    public static function validarNome(string $nome): void
    {
        if (empty($nome)) {
            throw new InvalidArgumentException("Este campo é obrigatório.");
        }
    }

    public static function validarEmail(string $email): void
    {
        if (empty($email)) {
            throw new InvalidArgumentException("Email não pode ser vazio.");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email inválido.");
        }
    }

    public static function validarSenha(string $senha): void
    {
        if (empty($senha)) {
            throw new InvalidArgumentException("Senha não pode ser vazia.");
        }
    }

    public static function validarTipo(string $tipo): void
    {
        if (empty($tipo)) {
            throw new InvalidArgumentException("Selecione um tipo de usuário.");
        }

        if (!TipoUsuario::tryFrom($tipo)) {
            throw new InvalidArgumentException("Tipo de usuário inválido.");
        }
    }
}
