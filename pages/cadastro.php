<?php include "../includes/cabecalho.php"; ?>

        <!-- começo do formulário -->
        <form id="my-form" action="https://formspree.io/f/mqakebnj" method="post">
            <div class="input">
      
              <div class="nome">
                <label for="nome">Nome:</label>
                <input class="text-nome" required type="text" name="nome" id="nome" placeholder="Digite o nome completo" />
              </div>
      
            <div class="email">
                <label for="email">E-mail:</label>
                <input class="text-email" required type="email" name="email" id="email" placeholder="exemplo@exemplo.com" />
            </div>
            
      
            </div>
            <button id="my-form-button" class="botao" type="submit">ENVIAR</button>
            <p id="my-form-status"></p>
          </form>

          <?php include "../includes/rodape.php"; ?>
        