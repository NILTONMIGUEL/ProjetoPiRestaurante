// 1. Funcionalidade de Toggle do Menu de Navegação (Responsividade)
document.getElementById('menu-toggle').addEventListener('click', function() {
    const nav = document.querySelector('.nav');
    nav.classList.toggle('active');
});

const container = document.querySelector(".carousel-track");
const items = container.querySelectorAll(".menu-card");

// Clona todos os itens e adiciona ao final
items.forEach(item => {
  const itemDuplicado = item.cloneNode(true); // 'true' para clonar o conteúdo também
  container.appendChild(itemDuplicado);
});

// O CSS fará o resto do trabalho de animação.
