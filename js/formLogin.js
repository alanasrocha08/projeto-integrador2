const formLogin = document.querySelector("#form-login");
const statusForm = document.querySelector("#my-form-status");

const email = document.querySelector("#email");
const password = document.querySelector("#password");

formLogin.addEventListener("submit", async (event) => {
  event.preventDefault();

  const emailValue = email.value;
  const passwordValue = password.value;

  try {
    const response = await fetch("http://localhost:3000/api/users/login", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        email: emailValue,
        password: passwordValue,
      }),
    });

    const data = await response.json();

    if (response.ok) {
      statusForm.textContent = data.message || "Login Realizado com successo!";
      statusForm.style.color = "green";
      window.location.href = "dashboard.html";
    } else {
      statusForm.textContent = data.message || "Erro ao fazer login!";
      statusForm.style.color = "red";
    }
  } catch (error) {
    console.log(error);
    statusForm.textContent = "Ops, falha ao fazer login. Tente novamente";
    statusForm.style.color = "red";
  }
});
