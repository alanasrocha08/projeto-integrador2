//menu.js
export function menuHamburguer() {
  const btnMenu = document.querySelector(".btn-menu");
  const btnMenuIcon = document.querySelector("#icon-menu");
  const menu = document.querySelector(".links-menu");

  btnMenu.addEventListener("click", () => {
    menu.classList.toggle("ativo");
    btnMenuIcon.classList.replace("fi-rr-menu-burger", "fi-rr-cross");

    if (!menu.classList.contains("ativo")) {
      btnMenuIcon.classList.replace("fi-rr-cross", "fi-rr-menu-burger");
      return;
    }
  });
}
