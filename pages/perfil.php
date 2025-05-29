<?php

require_once "../vendor/autoload.php";
require_once "../includes/cabecalho.php";

session_start();

$mensagemErro = "";
$mensagemSucesso = "";

// Simulando usuário logado:
$_SESSION['id'] = 1; //  Tirar isso quando for usar de verdade!

$idUsuario = $_SESSION['id'];

// Busca dados do usuário
$sql = "SELECT id, nome, email FROM usuario WHERE id = :id";

$pdo = new PDO('mysql:host=localhost;dbname=cafeteria-teste-pi', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $idUsuario, PDO::PARAM_INT);
$stmt->execute();
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$dados) {
    $mensagemErro = "Usuário não encontrado.";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['atualizar'])) {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($nome) || empty($email)) {
        $mensagemErro = "Nome e e-mail são obrigatórios.";
    } else {
        if (!empty($senha)) {
            $sql = "UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':id', $idUsuario, PDO::PARAM_INT);
        } else {
            $sql = "UPDATE usuario SET nome = :nome, email = :email WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id', $idUsuario, PDO::PARAM_INT);
        }

        if ($stmt->execute()) {
            $mensagemSucesso = "Dados atualizados com sucesso!";
            $dados['nome'] = $nome;
            $dados['email'] = $email;
        } else {
            $mensagemErro = "Erro ao atualizar.";
        }
    }
}
?>

<style>
  /* Espaçamento geral do container do formulário */
  .form-container {
    padding-top: 20px;
    padding-bottom: 40px;
    min-height: 80vh;
    display: flex;
    align-items: flex-start;
    justify-content: center;
  }

  .form-content-container {
    width: 100%;
    /* ocupa toda largura disponível */
    max-width: 400px;
    /* limite máximo para telas grandes */
    margin: 0 16px;

    box-sizing: border-box;
  }

  /* Título h2 */
  .form-content h2 {
    margin-top: 0;
    /* tira margem superior */
    margin-bottom: 32px;
    /* espaço abaixo do título */
    font-size: 2.2rem;
    font-weight: bold;
    text-align: center;
  }

  /* Labels */
  .form label {
    display: block;
    margin-bottom: 6px;
    margin-top: 18px;
    font-size: 1.1rem;
  }

  .form {
    width: 100%;
  }

  /* Botão */
  .btn-submit {
    width: 100%;
    padding: 12px 0;
    margin-top: 20px;
    background: #6b7b5c;
    /* cor do botão da cafeteria */
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: 0.2s;
  }

  .btn-submit:hover {
    background: #556646;
  }

  /* Mensagem de erro */
  .mensagem-erro {
    background: #f8d7da;
    color: #842029;
    border-radius: 6px;
    padding: 12px;
    margin-bottom: 20px;
    font-weight: 600;
    text-align: center;
  }

  .btn-excluir {
    width: 100%;
    padding: 12px 0;
    margin-top: 12px;
    background: rgb(182, 11, 5);
    /* vermelho */
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: 0.2s;
  }

  .btn-excluir:hover {
    background: rgb(126, 0, 0);
  }
</style>

<div class="form-container">
  <div class="limitador">
    <div class="form-align">
      <article class="form-content-container">

        <div class="form-content">
          <h2>Atualizar meus dados</h2>

          <?php if (!empty($mensagemErro)) : ?>
            <div class="mensagem-erro">
              <?= $mensagemErro ?>
            </div>
          <?php endif; ?>
        </div>

        <form class="form" action="" method="post" id="form-atualizar" name="form-atualizar">
          <input type="hidden" name="id" value="<?= $dados["id"] ?? '' ?>">

          <div class="nome">
            <label for="nome">Nome:</label>
            <input value="<?= $dados["nome"] ?? '' ?>" type="text" id="nome" name="nome" placeholder="Digite seu nome completo" aria-label="Nome">
          </div>

          <div class="email">
            <label for="email">E-mail:</label>
            <input value="<?= $dados["email"] ?? '' ?>" type="email" id="email" name="email" placeholder="exemplo@exemplo.com" aria-label="E-mail">
          </div>

          <div class="password">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar" aria-label="Senha">
          </div>

          <button class="btn-submit" name="atualizar" aria-label="Botão de atualizar dados">
            <i class="fi fi-rr-refresh"></i> Atualizar
          </button>

          <button class="btn-excluir" type="submit" name="excluir" aria-label="Botão de excluir conta" onclick="return confirm('Tem certeza que deseja excluir sua conta? Esta ação não poderá ser desfeita.')">
            <i class="fi fi-rr-trash"></i> Excluir Conta
          </button>
        </form>
      </article>
    </div>
  </div>
</div>

<?php include "../includes/rodape.php"; ?>