<?php require_once "../includes/cabecalho.php"; ?>

<!-- Cards do Cardápio -->
<div class="cardapio-container">
  <div class="limitador">
    <section class="cardapio">
      <div class="conteudo-cardapio">
        <h2>Cardápio</h2>
      </div>
      <div class="card-cardapio-container">
        <a href="cardapio.php#bebidas" class="card-link" aria-label="Ver bebidas">
          <h3>Bebidas</h3>
          <img
            src="../assets/icons/drink.png"
            alt="Ícone de bebidas"
            loading="lazy" />
        </a>
        <a href="cardapio.php#salgados" class="card-link" aria-label="Ver salgados">
          <h3>Salgados</h3>
          <img
            src="../assets/icons/food.png"
            alt="Ícone de salgados"
            loading="lazy" />
        </a>
        <a href="cardapio.php#doces" class="card-link" aria-label="Ver doces">
          <h3>Doces</h3>
          <img
            src="../assets/icons/confectionery.png"
            alt="Ícone de doces"
            loading="lazy" />
        </a>
      </div>
    </section>
  </div>
</div>

<!-- Carrossel de Bebidas Quentes -->
<div class="container-carossel-de-compras" id="bebidas">
  <div class="limitador">
    <section class="carrosel-de-compras">
      <h2>Bebidas</h2>
      <div id="bebidas quentes"> 
      <h3>Bebidas quentes</h3>
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
              src="../assets/images/cafe-espresso.jpg"
              alt="Café expresso"
              width="358"
              height="396" />
            <h3>Café expresso</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover café expresso">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar café expresso">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
          <!-- Adicione outros produtos relevantes aqui -->
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
              src="../assets/images/chocolate-quente.jpg"
              alt="Chocolate quente"
              width="358"
              height="396" />
            <h3>Chocolate quente</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover chocolate quente">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar chocolate quente">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
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
              src="../assets/images/macchiato-caramelo.jpg"
              alt="Macciato Caramelo"
              width="358"
              height="396" />
            <h3>Macciato Caramelo</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover macciato-caramelo">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar macciato-caramelo">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>

<!-- Carrossel de Bebidas Geladas -->
<div class="container-carossel-de-compras" id="bebidas geladas">
  <div class="limitador">
    <section class="carrosel-de-compras">
      <h3>Bebidas geladas</h3>
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
              src="../assets/images/suco-laranja.jpg"
              alt="Suco de laranja"
              width="358"
              height="396" />
            <h3>Suco de laranja</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover suco de laranja">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar suco de laranja">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
          <!-- Adicione outros produtos relevantes aqui -->
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
              src="../assets/images/cafe-gelado.jpg"
              alt="Café gelado"
              width="358"
              height="396" />
            <h3>Café gelado</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover Café gelado">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar Café gelado">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
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
              src="../assets/images/milkshake-morango.jpg"
              alt="Suco de laranja"
              width="358"
              height="396" />
            <h3>Milkshake de morango</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover milkshake de morango">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar milkshake de morango">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Carrossel de Doces -->
<div class="container-carossel-de-compras" id="doces">
  <div class="limitador">
    <section class="carrosel-de-compras">
      <h2>Doces</h2>
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
              src="../assets/images/cookie-chocolate.jpg"
              alt="Cookie de chocolate"
              width="358"
              height="396" />
            <h3>Cookie de chocolate</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover cookie de chocolate">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar cookie de chocolate">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
          <div class="card-produto">
            <img
              src="../assets/images/torta-de-limao-siciliano.jpg"
              alt="Torta de limão Siciliano"
              width="358"
              height="396" />
            <h3>Torta Cecilia</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover Torta cecilia">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar Torta Cecilia">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
          <!-- Adicione outros produtos relevantes aqui -->
<div class="card-produto">
            <img
              src="../assets/images/carolina.jpg"
              alt="Carolina"
              width="358"
              height="396" />
            <h3>Carolina sem glúten</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover Carolina sem glúten">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar Carolina sem glúten">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>  

        </div>
      </div>
    </section>
  </div>
</div>

<!-- Carrossel de Salgados -->
<div class="container-carossel-de-compras" id="salgados">
  <div class="limitador">
    <section class="carrosel-de-compras">
      <h2>Salgados</h2>
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
              src="../assets/images/quiche-lorraine.jpg"
              alt="Quin=ceh Lorraine"
              width="358"
              height="396" />
            <h3>Quiche Lorraine</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover Quiche Lorraine">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar Quiche Lorraine">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
          <div class="card-produto">
            <img
              src="../assets/images/empada.jpg"
              alt="Empada de palmito"
              width="358"
              height="396" />
            <h3>Empada de palmito</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover Empada de palmito">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar Empada de palmito">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
          <div class="card-produto">
            <img
              src="../assets/images/croassant.jpg"
              alt="Croassant amanteigado"
              width="358"
              height="396" />
            <h3>Croassant amanteigado</h3>
            <div class="button-container">
              <button class="remove" aria-label="Remover Croassant amanteigado">
                <i class="fi fi-rr-minus"></i>
              </button>
              <p>Comprar</p>
              <button class="add" aria-label="Adicionar Croassant amanteigado">
                <i class="fi fi-rr-add"></i>
              </button>
            </div>
          </div>
          <!-- Adicione outros salgados conforme necessário -->
        </div>
      </div>
    </section>
  </div>
</div>

<?php include "../includes/rodape.php"; ?>