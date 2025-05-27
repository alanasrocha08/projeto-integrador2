<?php

require_once "../vendor/autoload.php";

use ProjetoIntegrador\Auth\ControleDeAcesso;
use ProjetoIntegrador\Helpers\Utils;
use ProjetoIntegrador\Services\UsuarioServico as ServicesUsuarioServico;

/* Mensagens relacionadas ao processo de login/logout */

if (isset($_GET["campos_obrigatorios"])) {
  $feedback = "Preencha e-mail e senha!";
} elseif (isset($_GET['dados_incorretos'])) {
  $feedback = "Algo de errado não está certo!";
} elseif (isset($_GET['logout'])) {
  $feedback = "Você saiu do sistema!";
} elseif (isset($_GET['acesso_proibido'])) {
  $feedback = "Você deve logar primeiro";
}

if (isset($_POST['entrar'])) {

  $email = Utils::sanitizar($_POST['email'], 'email');
  $senha = ($_POST['password']); // não precisa sanitizar pois será codificada/verifivada

  header("location:../index.php");
  exit; 
  // Verificando campos obrigatórios
  if (empty($email) || empty($senha)) {
    header("Location: login.php?campos_obrigatorios");
    exit;
  }

  /* Processo de busca do usuário pelo e-mail e login na área administrativa */

  try {
    // Buscar o usuario atraves do email informado
    $usuarioServico = new ServicesUsuarioServico();
    $usuario = $usuarioServico->buscarPorEmail($email);

    if (!$usuario) {
      header("location:login.php?dados_incorretos");
      exit;
    }

    // se o usuario for encontrado, verifica a senha digitada
    if ($usuario && password_verify($senha, $usuario['senha'])) {
      // Estamos tudo ok (usuario e senha), passamos
      // para o metodo login os dados da pessoa que esta logado
      ControleDeAcesso::login($usuario['id'], $usuario['nome'], $usuario['tipo']);
      header("location:cardapio.php");
      exit;
    } else {
      // Caso contráio (senha errada), mantenha a pessoa em login
      header("locatin:login.php?dados-incorretos");
      exit;
    }
  } catch (Throwable $erro) {
    Utils::registrarLog($erro);
    header("location:..login.php?erro");
    exit;
  }
}
?>

<?php require_once "../includes/cabecalho.php" ?>
<!-- Começo conteúdo principal (main) -->
<main id="main-content">
  <div class="form-container">
    <div class="limitador">
      <div class="form-align">
        <div class="form-content-container">
          <div class="form-content">
            <h2>Formulário Cooffee</h2>
            <p>
              Você que encara o <strong>glúten</strong> como inimigo número
              um: <strong>seu lugar é aqui</strong>!
              <strong>Faça login</strong> agora e aproveite o melhor dos
              <strong>produtos sem glúten</strong>, feitos especialmente
              para quem vive <strong>sem glúten</strong>, mas com
              <strong>muito sabor</strong>.
            </p>
          </div>
          <form
            id="my-form"
            action=""
            method="post">
            <div class="form">
              <div class="email">
                <input
                  required
                  type="email"
                  name="email"
                  id="email"
                  placeholder="exemplo@exemplo.com"
                  aria-label="Digite seu email" />
              </div>
              <div class="password">
                <input
                  required
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Digite sua senha"
                  aria-label="Digite sua senha" />
              </div>
              <button
                id="my-form-button"
                class="btn-submit"
                type="submit"
                name="entrar"
                aria-label="Botão de login">
                Entrar <i class="fi fi-rr-paper-plane"></i>
              </button>
              <span id="my-form-status"></span>
            </div>

            <p>
              <a href="cadastro.php">Não possui uma conta? Cadastre-se</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include "../includes/rodape.php";?>