document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-sidebar');
    const close = document.getElementById('close');

    // Função para alternar o estado do menu
    function toggleSidebar() {
        // No CSS, a classe 'collapsed' ou 'active' gerencia o tamanho
        if (window.innerWidth > 992) {
            // Em telas grandes, alterna entre full e icon
            sidebar.classList.toggle('collapsed');
        } else {
            // Em telas pequenas, alterna entre visível e escondido (usando a classe 'active' para mobile)
            sidebar.classList.toggle('active');

            // Se for mobile, adiciona/remove um overlay de clique no conteúdo principal se necessário
            // mainContent.classList.toggle('overlay-active');
        }
    }

    // Evento de clique no botão do header
    toggleBtn.addEventListener('click', toggleSidebar);

    // Adiciona o comportamento de recolher/expandir no hover apenas em telas grandes
    if (window.innerWidth > 992) {
        sidebar.addEventListener('mouseenter', () => {
             // Só expande se estiver recolhido (opcional)
             if (sidebar.classList.contains('collapsed')) {
                sidebar.classList.remove('collapsed');
             }
        });
        sidebar.addEventListener('mouseleave', () => {
             // Só recolhe se não estiver no estado original (opcional)
             if (!sidebar.classList.contains('collapsed')) {
                 // Deixe o usuário clicar para manter o estado
             }
        });
    }
    // Inicializa o menu como minimizado em telas menores, mas com o toggle funcional
    if (window.innerWidth <= 992) {
        //sidebar.classList.add('collapsed');
        close.addEventListener('click',()=>{
            if(sidebar.classList.contains('active')){
                sidebar.classList.remove('active');
                
            }
            else{
                //sidebar.classList.toggle('active')
            }
            
        });
    }
});
