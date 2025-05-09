let btn_menu = document.querySelector(".menu-aparecer")

let menu = document.querySelector(".menu")

btn_menu.addEventListener('click', () => {
    menu.classList.toggle("menu-abrir")
})