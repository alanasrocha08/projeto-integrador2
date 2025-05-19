<?php
$caminho = basename($_SERVER["REQUEST_URI"]);

switch ($caminho) {
  case "index.php":
    $titulo = "Página Inicial";
    break;

  case "cadastro.php":
    $titulo = "Cadastros";
    break;

  case "cardapio.php":
    $titulo = "Cardápio";
    break;

  case "contato.php":
    $titulo = "Contato";
    break;

  case "servicos.php":
    $titulo = "Servicos";
    break;
  default:
    $titulo = "";
    break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $titulo ?></title>

  <link rel="stylesheet" href="../css/global.css">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />

  <link rel="shortcut icon" href="assets/jm_black.svg" type="image/x-icon" />
</head>

<body>
  <header>
    <div class="limitador">
      <div class="header">
        <h1 class="titulo"><a href="index.php"></a>Cafeteria</h1>
        <nav>
          <button
            type="button"
            class="btn-menu"
            aria-label="Abrir menu da navegação">
            <i class="fi fi-rr-menu-burger" id="icon-menu"></i>
          </button>
          <ul class="links-menu">
            <li>
              <a href="./index.php"><i class="fi fi-rr-home"></i>Home</a>
            </li>
            <li>
              <a href="#"><i class="fi fi-rr-envelope-open"></i>Contato</a>
            </li>
            <a href="./pages/login.php"><i class="fi fi-rr-user"></i>Login </a>
            </li>
          </ul>
          <a href="" class="cart"><i class="fi fi-rr-shopping-cart"></i></a>
        </nav>
      </div>
    </div>
  </header>


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
              action="https://formspree.io/f/mqakebnj"
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
                  aria-label="Botão de login">
                  Entrar <i class="fi fi-rr-paper-plane"></i>
                </button>
                <span id="my-form-status"></span>
              </div>

              <p>
                <a href="cadastro.html">Não possui uma conta? Cadastre-se</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

      <footer>
      <div class="limitador">
        <div class="footer">
          <div class="info">
            <div class="endereco">
              <div class="endereco-info">
                <h2>Unidade Vila Mariana</h2>
                <p>Rua não sei o lá, 123</p>
              </div>
              <div class="horarios">
                <h2>Horários</h2>
                <ul class="lista-horarios">
                  <li>
                    <p>08:00 às 22:00</p>
                    <p><strong>Segunda a Sexta</strong></p>
                  </li>

                  <li>
                    <p>10:00 às 22:00</p>
                    <p><strong>Sábados</strong></p>
                  </li>
                </ul>
              </div>
            </div>

            <div class="img-info">
              <img
                src="../assets/images/pic_coffee.png"
                alt="Interior da cafeteria com decoração aconchegante"
                loading="lazy"
              />
            </div>

            <div class="contato">
              <div class="whatsapp-info">
                <h2>WhatsApp</h2>
                <p><a href="tel:+5511981075141">(11) 98107-5141</a></p>
              </div>
              <div class="email-info">
                <h2>E-mail</h2>
                <p>
                  <a href="mailto:teste@teste.com">teste@teste.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="module" src="js/main.js"></script>
    <script src="../js/carrossel.js"></script>
  </body>
</html>