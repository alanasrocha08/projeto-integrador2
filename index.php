<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Páginal Inicial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5..3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <link rel="shortcut icon" href="assets/jm_black.svg" type="image/x-icon" />

    <link rel="stylesheet" href="global.css">

</head>

<body>
    <!-- Inicio do header -->
    <header class="topo">
        <div class="limitador">
            <h1 class="titulo">
                <a href="index.php">CAFETERIA<span></span></a>
            </h1>
            <nav class="menu">
                <ul class="links-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="./pages/servicos.php">Serviços</a></li>
                    <li><a href="./pages/contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Final da header -->

    <main>
        <!-- Começo do site (main) -->
        <article class="hero">
            <img src="assets/foto-destaque.jpg" class="img-hero" />
            <div class="conteudo-hero">
                <h2>Bem vindo(a)!</h2>
                <p>Nós somos a nova cafeteria sem gluten</p>
            </div>
        </article>

        <!-- Sobre nós -->
        <article>
            <h2>Sobre nós</h2>
            <p>Somos uma cafeteria pensada especialmente para quem busca qualidade, sabor e segurança alimentar. Localizados no coração da Vila Mariana, um dos bairros mais charmosos e tradicionais de São Paulo, oferecemos um ambiente acolhedor onde todos podem saborear cafés especiais, doces e quitutes sem preocupação.</p>

            <p>Aqui, todo o nosso cardápio é 100% livre de glúten, garantindo tranquilidade para celíacos e para quem deseja uma alimentação mais saudável. Selecionamos ingredientes frescos e de procedência, e nossa cozinha é dedicada exclusivamente à produção sem contaminação cruzada, para que cada cliente possa aproveitar sua experiência com total confiança.</p>

            <p>Mais do que uma cafeteria, somos um espaço de encontro para amigos, famílias e apaixonados por café, onde a inclusão e o bem-estar vêm sempre em primeiro lugar. Venha nos visitar na Vila Mariana e descubra um novo jeito de apreciar o melhor do café e da confeitaria sem glúten em São Paulo!</p>
        </article>

        <!-- Carrossel de compras -->
        <article>
            <h2>Mais pedidos</h2>
            <h3>Nome do produto</h3>
            <h3>Nome do produto</h3>
            <h3>Nome do produto</h3>
        </article>

        <!-- Cards do Cardápio  -->
        <div>
            <section>
                <div>
                    <h2>CARDÁPIO</h2>
                    <p>BEBIDAS</p>
                    <p>SALGADOS</p>
                    <p>DOCES</p>
                </div>
            </section>
        </div>

        <?php include "./includes/rodape.php" ?>