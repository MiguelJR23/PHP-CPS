window.addEventListener("scroll", () => {
  const header = document.querySelector(".header");
  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.getElementById("formVisita");
    formulario.addEventListener("submit", function(event) {

        document.querySelectorAll(".erro").forEach(function(elemento){
            elemento.textContent = "";
        });

        const nome = document.getElementById("nome").value.trim();
        const idade = Number(document.getElementById("idade").value);
        const cpf = document.getElementById("cpf").value.replace(/\D/g, "");
        const telefone = document.getElementById("telefone").value.replace(/\D/g, "");
        const email = document.getElementById("email").value.trim();

        if(nome.length < 3){
            document.getElementById("erroNome").textContent =
            "Pelo menos 3 letras, não use apelidos";
            event.preventDefault();
            return;
        }

        if(idade < 14 || idade > 120){
            document.getElementById("erroIdade").textContent =
            "No mínimo 14 anos";
            event.preventDefault();
            return;
        }

        if(cpf.length !== 11){
            document.getElementById("erroCpf").textContent =
            "CPF deve possuir 11 números.";
            event.preventDefault();
            return;
        }

        if(telefone.length !== 10 && telefone.length !== 11){
            document.getElementById("erroTelefone").textContent =
            "Telefone inválido, não esqueça o DDD";
            event.preventDefault();
            return;
        }

        if(!email.includes("@") || !email.includes(".")){
            document.getElementById("erroEmail").textContent =
            "Digite um email válido, não esqueça o @ e o domínio";
            event.preventDefault();
            return;
        }
    });
});