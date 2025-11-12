// 1. Funcionalidade de Toggle do Menu de Navegação (Responsividade)
document.getElementById('menu-toggle').addEventListener('click', function() {
    const nav = document.querySelector('.nav');
    nav.classList.toggle('active');
});

// 2. Funcionalidade do Carrossel do Cardápio
const carouselTrack = document.getElementById('carousel-track');
const menuCards = document.querySelectorAll('.menu-card');
const cardWidth = menuCards[0] ? menuCards[0].offsetWidth + 30 : 330; // Largura do card + margem
let currentIndex = 0;

function moveCarousel(direction) {
    const visibleCards = Math.floor(carouselTrack.parentElement.offsetWidth / cardWidth);
    const totalCards = menuCards.length;

    // Calcula o novo índice
    currentIndex += direction;

    // Lógica para loop ou limites
    if (currentIndex > totalCards - visibleCards) {
        currentIndex = 0; // Volta para o início (loop)
    } else if (currentIndex < 0) {
        currentIndex = totalCards - visibleCards; // Volta para o fim (loop)
    }

    // Aplica a translação
    const offset = -currentIndex * cardWidth;
    carouselTrack.style.transform = `translateX(${offset}px)`;
}

// Inicializa o carrossel (para garantir que os botões funcionem mesmo se o JS carregar depois do HTML)
window.onload = () => {
    // Adiciona o listener de redimensionamento para ajustar o carrossel em telas menores
    window.addEventListener('resize', () => {
        // Reseta o índice e a posição ao redimensionar
        currentIndex = 0;
        carouselTrack.style.transform = `translateX(0px)`;
    });
};

// Auto-play opcional para o carrossel (Descomente para ativar)
/*
setInterval(() => {
    moveCarousel(1);
}, 5000); // Passa o slide a cada 5 segundos
*/