<?php include "../includes/cabecalho.php"?>
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
                action="https://formspree.io/f/mqakebnj"
                method="post"
              >
                <div class="form">
                  <div class="email">
                    <input
                      required
                      type="email"
                      name="email"
                      id="email"
                      placeholder="exemplo@exemplo.com"
                      aria-label="Digite seu email"
                    />
                  </div>
                  <div class="password">
                    <input
                      required
                      type="password"
                      name="password"
                      id="password"
                      placeholder="Digite sua senha"
                      aria-label="Digite sua senha"
                    />
                  </div>
                  <button
                    id="my-form-button"
                    class="btn-submit"
                    type="submit"
                    aria-label="Botão de login"
                  >
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
  </body>
</html>