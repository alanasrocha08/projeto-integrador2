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

  case "login.php":
    $titulo = "Login";
    break;

  case "perfil.php":
    $titulo = "perfil";
    break;

  case "carrinho.php":
    $titulo = "carrinho";
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
  <title><?= $titulo ?>></title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="shortcut icon" href="assets/jm_black.svg" type="image/x-icon" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />
  <link rel="stylesheet" href="../css/global.css">
</head>

<body>
 
<header>
  <div class="limitador">
    <div class="header">
      <h1 class="titulo"><a href="../index.php">Cooffee <img src="../assets/icons/logo_cooffee.svg" alt=""></a></h1>
      <nav>
        <button type="button" class="btn-menu" aria-label="Abrir menu da navegação">
          <i class="fi fi-rr-menu-burger" id="icon-menu"></i>
        </button>

        <ul class="links-menu">
          <li>
            <a href="../index.php"><i class="fi fi-rr-home"></i>Home</a>
          </li>
          <li>
            <a href="../pages/cardapio.php"><i class="fi fi-rr-restaurant"></i>Cardápio</a>
          </li>
              <a href="../pages/login.php"><i class="fi fi-rr-user"></i>Login</a>
            </li>
            <li>
              <a href="../pages/perfil.php"><i class="fi fi-rr-user"></i>Pefil</a>
            </li>
            <li>
              <a href="../pages/cadastro.php"><i class="fi fi-rr-user-add"></i>Cadastre-se</a>
            </li>
        </ul>

        <a href="../pages/carrinho.php" class="cart"><i class="fi fi-rr-shopping-cart"></i></a>
      </nav>
    </div>
  </div>
</header>
