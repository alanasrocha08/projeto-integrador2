const form = document.querySelector("#form-register");

const nome = document.querySelector("#nome");
const email = document.querySelector("#email");
const password = document.querySelector("#password");

const statusForm = document.querySelector("#my-form-status");

form.addEventListener("submit", async (event) => {
  event.preventDefault();
  // console.log(nome.value);

  const nomeValue = nome.value;
  const emailValue = email.value;
  const passwordValue = password.value;

  try {
    const response = await fetch("http://localhost:3000/api/users/cadastro", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        name: nomeValue,
        email: emailValue,
        password: passwordValue,
      }),
    });

    const data = await response.json();
    statusForm.textContent = data.message;
  } catch (error) {
    statusForm.textContent = "Ops, erro ao cadastrar usuário. Tente novamente!";
    console.log(error);
  }
});
