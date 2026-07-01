document.addEventListener("DOMContentLoaded", () => {
    const formBusca = document.getElementById("formBusca");
    if (formBusca) {
      formBusca.addEventListener("submit", (e) => {
        e.preventDefault(); 
        const nome = document.getElementById("buscaNome").value.toLowerCase();
        const porte = document.getElementById("buscaPorte").value;
        const animais = document.querySelectorAll(".card"); 
        animais.forEach((animal) => {
          const matchNome = animal.dataset.nome.toLowerCase().includes(nome);
          const matchEspecie = animal.dataset.especie.toLowerCase().includes(nome);
          const matchPorte = porte === "" || animal.dataset.porte === porte;
          if ((matchNome || matchEspecie) && matchPorte) {
            animal.style.display = "inline-block";
          } else {
            animal.style.display = "none";
          }
        });
      });
    }
    const formAdocao = document.getElementById("formAdocao");
    if (formAdocao) {
      formAdocao.addEventListener("submit", (e) => {
        e.preventDefault(); 
        const nome = document.getElementById("nome").value.trim();
        const email = document.getElementById("email").value.trim();
        const telefone = document.getElementById("telefone").value.trim(); 
        if (nome && email && telefone) {
          document.getElementById("mensagem").innerText =
            " Solicitação enviada com sucesso! Entraremos em contato em breve.";
          formAdocao.reset();
        } else {
          document.getElementById("mensagem").innerText =
            " Por favor, preencha todos os campos.";
        }
      });
    }
  });
  