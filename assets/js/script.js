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

        const nome = document.getElementById("nome").value.trim();
        const idade = Number(document.getElementById("idade").value);
        const cpf = document.getElementById("cpf").value.replace(/\D/g, "");
        const telefone = document.getElementById("telefone").value.replace(/\D/g, "");
        const email = document.getElementById("email").value.trim();

        if(nome.length < 3){
            alert("Nome inválido.");
            event.preventDefault();
            return;
        }
        if(idade < 18 || idade > 120){
            alert("Idade inválida.");
            event.preventDefault();
            return;
        }
        if(cpf.length !== 11){
            alert("CPF deve possuir 11 números.");
            event.preventDefault();
            return;
        }
        if(telefone.length !== 10 && telefone.length !== 11){
            alert("Telefone inválido.");
            event.preventDefault();
            return;
        }
        if(!email.includes("@") || !email.includes(".")){
            alert("Email inválido.");
            event.preventDefault();
            return;
        }
        console.log("Formulário validado com sucesso!");
    });
});