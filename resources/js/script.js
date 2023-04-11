// Seleciona todos os botões e divs
const botoes = document.querySelectorAll(".btn-drop");
const divs = document.querySelectorAll(".div-drop");

// Itera sobre os botões e adiciona um ouvinte de eventos de clique a cada um
botoes.forEach(function(botao, indice) {
  botao.addEventListener("click", function() {
    // Verifica se a div está visível ou não
    if (divs[indice].style.display === "none") {
      // Se estiver oculta, exibe a div
      divs[indice].style.display = "block";
    } else {
      // Se estiver visível, oculta a div
      divs[indice].style.display = "none";
    }
  });
});

