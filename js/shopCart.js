export function shopCart() {
  const buttonContainer = document.querySelector(".container-card");
  const spanCount = document.createElement("span");
  const cart = document.querySelector(".cart i");
  const listaCarrinho = document.getElementById("lista-carrinho");

  let count = 0;
  // Novo: Array para guardar os produtos do carrinho
  let carrinho = [];

  buttonContainer.addEventListener("click", (event) => {
    // Adicionar produto
    if (event.target.closest("button.add")) {
      const card = event.target.closest(".card"); // ou o seletor do seu produto
      const nome = card.querySelector(".nome-produto").textContent;
      const id = card.getAttribute("data-id"); // se tiver um data-id no card
      adicionarProdutoAoCarrinho({ id, nome });
      count++;
      updateCardContent();
      atualizarCarrinhoNaPagina();
    }

    // Remover produto
    if (event.target.closest("button.remove")) {
      const card = event.target.closest(".card");
      const id = card.getAttribute("data-id");
      removerProdutoDoCarrinho(id);
      if (count > 0) count--;
      updateCardContent();
      atualizarCarrinhoNaPagina();
    }
    //funciona fudido
    console.log("Clicou em:", event.target);
  });

  function adicionarProdutoAoCarrinho(produto) {
    // Verifica se já existe no carrinho
    const idx = carrinho.findIndex(item => item.id === produto.id);
    if (idx > -1) {
      carrinho[idx].quantidade += 1;
    } else {
      carrinho.push({ ...produto, quantidade: 1 });
    }
  }

  function removerProdutoDoCarrinho(id) {
    const idx = carrinho.findIndex(item => item.id === id);
    if (idx > -1) {
      if (carrinho[idx].quantidade > 1) {
        carrinho[idx].quantidade -= 1;
      } else {
        carrinho.splice(idx, 1);
      }
    }
  }

  function updateCardContent() {
    if (count <= 0) {
      if (cart.contains(spanCount)) {
        cart.removeChild(spanCount);
      }
    } else {
      spanCount.textContent = count;
      if (!cart.contains(spanCount)) {
        cart.appendChild(spanCount);
      }
    }
  }

  // NOVO Atualiza a lista de produtos na área do carrinho
  function atualizarCarrinhoNaPagina() {
    listaCarrinho.innerHTML = "";
    if (carrinho.length === 0) {
      listaCarrinho.innerHTML = "<li>Seu carrinho está vazio.</li>";
    } else {
      carrinho.forEach(item => {
        const li = document.createElement("li");
        li.textContent = `${item.nome} - ${item.quantidade}x`;
        listaCarrinho.appendChild(li);
      });
    }
  }
}
