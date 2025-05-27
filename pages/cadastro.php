<?php

use ProjetoIntegrador\Models\Usuario;
use ProjetoIntegrador\Services\UsuarioServico;

require_once "../vendor/autoload.php";

$usuarioServico = new UsuarioServico();

if (isset($_POST["cadastrar"])) {
  // Capturar/sanitizar os dados
  $nome = filter_input(
    INPUT_POST,
    'nome',
    FILTER_SANITIZE_SPECIAL_CHARS
  );

  // Capturar/sanitizar os dados
  $email = filter_input(
    INPUT_POST,
    'email',
    FILTER_SANITIZE_SPECIAL_CHARS
  );

  // Capturar/sanitizar os dados
  $senha = filter_input(
    INPUT_POST,
<<<<<<< Updated upstream
    'password',
    FILTER_SANITIZE_SPECIAL_CHARS
  );

=======
    'senha',
    FILTER_SANITIZE_SPECIAL_CHARS
  );
  
>>>>>>> Stashed changes
  $usuario = new Usuario($nome, $email, $senha);

  $usuarioServico->inserir($usuario);

<<<<<<< Updated upstream
  header("location:../index.php");
=======
  header("location:index.php");
>>>>>>> Stashed changes
  exit;
}

?>
<<<<<<< Updated upstream
<?php require_once "../includes/cabecalho.php" ?>

=======
<?php include "../includes/cabecalho.php" ?>
>>>>>>> Stashed changes
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
              <strong>Cadastre-se grátis</strong> e aproveite o melhor dos
              <strong>produtos sem glúten</strong>, feitos especialmente
              para quem vive <strong>sem glúten</strong>, mas com
              <strong>muito sabor</strong>.
            </p>
          </div>
          <form
            id="my-form"
<<<<<<< Updated upstream
            action=""
=======
            action="https://formspree.io/f/mqakebnj"
>>>>>>> Stashed changes
            method="post">
            <div class="form">
              <div class="nome">
                <input
                  required
                  type="text"
                  name="nome"
                  id="nome"
                  placeholder="Digite o nome completo"
                  aria-label="Digite o nome completo" />
              </div>
              <div class="email">
                <input
                  required
                  type="email"
                  name="email"
                  id="email"
                  placeholder="exemplo@exemplo.com"
                  aria-label="Digite o seu email" />
              </div>
              <div class="password">
                <input
                  required
                  type="password"
<<<<<<< Updated upstream
                  name="password"
=======
                  name="senha"
>>>>>>> Stashed changes
                  id="password"
                  placeholder="Digite sua senha"
                  aria-label="Digite a sua senha" />
              </div>
              <button
                id="my-form-button"
                class="btn-submit"
                type="submit"
<<<<<<< Updated upstream
                name="cadastrar"
                aria-label="Botão de concluir o cadastro">
=======
                aria-label="Botão de concluir o cadastro"
                name="cadastrar">
>>>>>>> Stashed changes
                Cadastrar <i class="fi fi-rr-paper-plane"></i>
              </button>
              <span id="my-form-status"></span>
            </div>
            <p><a href="./login.php">Já possui uma conta? Faça Login</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="js/main.js"></script>
</body>

<?php include "../includes/rodape.php"; ?>