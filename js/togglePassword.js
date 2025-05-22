const btnHidePassword = document.querySelector(".btn-hide-password");
const inputPassword = document.querySelector(".password input");
const btnIcon = document.querySelector(".btn-hide-password i");

btnHidePassword.addEventListener("click", () => {
  let inputPasswordType = inputPassword.getAttribute("type");
  inputPassword.focus();

  inputPassword.setAttribute(
    "type",
    inputPasswordType === "password" ? "text" : "password"
  );

  btnIcon.classList.replace(
    inputPasswordType === "password" ? "fi-rr-eye" : "fi-rr-eye-crossed",
    inputPasswordType === "password" ? "fi-rr-eye-crossed" : "fi-rr-eye"
  );
});
