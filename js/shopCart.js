export function shopCart() {
  const buttonContainer = document.querySelector(".container-card");
  const spanCount = document.createElement("span");
  const cart = document.querySelector(".cart i");

  let count = 0;

  buttonContainer.addEventListener("click", (event) => {
    if (event.target.closest("button.add")) {
      count++;
      updateCardContent();
    }

    if (event.target.closest("button.remove")) {
      if (count > 0) {
        count--;
        updateCardContent();
      }
    }
    //funciona fudido
    console.log("Clicou em:", event.target);
  });

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
}
