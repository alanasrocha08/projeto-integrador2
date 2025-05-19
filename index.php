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

  <link rel="stylesheet" href="./css/global.css">

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
    <div class="hero">
      <div class="conteudo-hero">
        <section class="conteudo">
          <h2>Bem vindo(a)!</h2>
          <p>Nós somos a nova cafeteria sem glúten</p>
        </section>
      </div>
    </div>

    <!-- Sobre nós -->
    <div class="limitador">
      <div class="section-sobre" id="sobre">
        <section class="sobre">
          <h2>Sobre nós</h2>
          <div class="sobre-container">
            <div class="sobre-img">
              <img
                src="./assets/images/foto-destaque.jpg"
                alt="Xícara de café"
                loading="lazy" />
            </div>
            <div class="sobre-conteudo">
              <p>
                Somos uma <strong>cafeteria</strong> pensada especialmente
                para quem busca <strong>qualidade</strong>,
                <strong>sabor</strong> e <strong>segurança alimentar</strong>.
                Localizados no coração da <strong>Vila Mariana</strong>, um
                dos bairros mais charmosos e tradicionais de
                <strong>São Paulo</strong>, oferecemos um
                <strong>ambiente acolhedor</strong> onde todos podem saborear
                <strong>cafés especiais</strong>, <strong>doces</strong> e
                <strong>quitutes</strong> sem preocupação.
              </p>

              <p>
                Aqui, todo o nosso cardápio é
                <strong>100% livre de glúten</strong>, garantindo
                tranquilidade para <strong>celíacos</strong> e para quem
                deseja uma <strong>alimentação mais saudável</strong>.
                Selecionamos <strong>ingredientes frescos</strong> e de
                <strong>procedência</strong>, e nossa cozinha é dedicada
                exclusivamente à produção
                <strong>sem contaminação cruzada</strong>, para que cada
                cliente possa aproveitar sua experiência com
                <strong>total confiança</strong>.
              </p>

              <p>
                Mais do que uma cafeteria, somos um
                <strong>espaço de encontro</strong> para
                <strong>amigos</strong>, <strong>famílias</strong> e
                <strong>apaixonados por café</strong>, onde a
                <strong>inclusão</strong> e o <strong>bem-estar</strong> vêm
                sempre em primeiro lugar. Venha nos visitar na
                <strong>Vila Mariana</strong> e descubra um novo jeito de
                apreciar o <strong>melhor do café</strong> e da
                <strong>confeitaria sem glúten</strong> em
                <strong>São Paulo</strong>!
              </p>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- Carrossel de compras -->
    <div class="container-carossel-de-compras" id="carrosel">
      <div class="limitador">
        <section class="carrosel-de-compras">
          <h2>Mais pedidos</h2>
          <div class="container-card-slider">
            <button
              type="button"
              class="slider-btn prev"
              aria-label="Voltar no carrossel">
              <i class="fi fi-rr-angle-left"></i>
            </button>
            <div class="container-card">
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
              <div class="card-produto">
                <img
                  src="assets/images/foto-destaque.jpg"
                  alt=""
                  width="358px"
                  height="396px" />
                <h3>Nome do produto</h3>
                <div class="button-container">
                  <button class="remove" aria-label="Botão de remover">
                    <i class="fi fi-rr-minus"></i>
                  </button>

                  <p>Comprar</p>

                  <button class="add" aria-label="Botão de adicionar">
                    <i class="fi fi-rr-add"></i>
                  </button>
                </div>
              </div>
            </div>
            <button
              type="button"
              class="slider-btn next"
              aria-label="Avançar no carrosel">
              <i class="fi fi-rr-angle-right"></i>
            </button>
          </div>
        </section>
      </div>
    </div>

    <!-- Cards do Cardápio  -->
    <div class="cardapio-container">
      <div class="limitador">
        <section class="cardapio">
          <div class="conteudo-cardapio">
            <h2>Cardápio</h2>
            <p>
              Selecione um item do cardápio e descubra a variedade de
              alimentos e bebidas livre de glúten!
            </p>
          </div>

          <div class="card-cardapio-container">
            <a href="" class="card-link">
              <h3>Bebidas</h3>
              <img
                src="assets/icons/drink.png"
                alt="Icone de bebidas"
                loading="lazy" />
            </a>

            <a href="" class="card-link">
              <h3>Salgados</h3>
              <img
                src="assets/icons/food.png"
                alt="Icone de salgados"
                loading="lazy" />
            </a>

            <a href="" class="card-link">
              <h3>Doces</h3>
              <img
                src="assets/icons/confectionery.png"
                alt="Icone de doce"
                loading="lazy" />
            </a>
          </div>
        </section>
      </div>
    </div>
  </main>

  <?php include "includes/rodape.php" ?>