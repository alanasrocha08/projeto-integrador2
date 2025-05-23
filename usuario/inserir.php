<?php

use ProjetoIntegrador\Models\Usuario;
use ProjetoIntegrador\Service\UsuarioServico;

require_once "../vendor/autoload.php";

$usuarioServico = new UsuarioServico();

if (isset($_POST["inserir"])) {
    // Capturar/sanitizar os dados
    $nome = filter_input(
        INPUT_POST,
        'nome',
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    if (isset($_POST["inserir"]))
    // Capturar/sanitizar os dados
    $email = filter_input(
        INPUT_POST,
        'email',
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    if (isset($_POST["inserir"])) {
    // Capturar/sanitizar os dados
    $senha = filter_input(
        INPUT_POST,
        'senha',
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    if (isset($_POST["inserir"])) {
    // Capturar/sanitizar os dados
    $datadecadastro = filter_input(
        INPUT_POST,
        'data de cadastro',
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    }

    }
    $usuario = new Usuario($nome, $email, $senha, $datadecadastro);
    $usuarioServico->inserir($usuario);

    header("location:visualizar.php");
    exit;
}

?>
