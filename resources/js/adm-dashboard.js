document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const toggleDesktop = document.getElementById('sidebar-toggle-desktop');
    const toggleMobile = document.getElementById('menu-toggle-mobile');

    // 1. Toggle Desktop (Colapsar/Expandir para ícones)
    if (toggleDesktop) {
        toggleDesktop.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
        });
    }

    // 2. Toggle Mobile (Abrir/Fechar Menu)
    if (toggleMobile) {
        toggleMobile.addEventListener('click', function() {
            // Abre/Fecha o menu mobile
            sidebar.classList.toggle('open-mobile');
        });
    }
    
    // 3. Fechar o menu mobile ao clicar em um link (melhora a UX)
    document.querySelectorAll('.sidebar-link').forEach(link => {
        link.addEventListener('click', () => {
            // Verifica se a tela é mobile (largura menor ou igual a 768px)
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('open-mobile');
            }
        });
    });
});