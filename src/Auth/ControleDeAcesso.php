<?php
namespace ProjetoIntegrador\Auth;

final class ControleDeAcesso {

    private function __construct() {}

    private static function iniciarSessao(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function exigirLogin(): void
    {
        self::iniciarSessao();

        if (!isset($_SESSION['id'])) {
            session_destroy();
            header("Location: ../login.php?acesso_proibido");
            exit;
        }
    }

    public static function login(int $id, string $nome): void
    {
        self::iniciarSessao();

        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
       
    }

    public static function logout(): void
    {
        self::iniciarSessao();
        session_destroy();
        header("Location: ../login.php?logout");
        exit;
    }

    public static function exigirAdmin(): void
    {
        self::iniciarSessao();

        if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== 'admin') {
            header("Location: ../login.php?acesso_proibido");
            exit;
        }
    }

    public static function verificaAcesso()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (!isset($_SESSION['id'])) {
            header("location: login.php?acesso_proibido");
            exit;
        }
    }
}
