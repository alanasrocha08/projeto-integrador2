
<!DOCTYPE html>
<html lang="pt-br">
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
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $titulo ?></title>

    <link rel="stylesheet" href="../global.css">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5..3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
 
    <link rel="shortcut icon" href="assets/jm_black.svg" type="image/x-icon" />
</head>
 
<body>
    <header class="topo">
        <div class="limitador">
            <h1 class="titulo">
                <a href="../index.php">CAFETERIA<span></span></a>
            </h1>
            <nav class="menu">
                <ul class="links-menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>