
    

        let cart = [
            { id: 1, quantity: 1 },
            { id: 5, quantity: 2 }
        ];

        const cartItemsList = document.getElementById('cartItemsList');
        const cartTotalDisplay = document.getElementById('cartTotal');
        const headerTotalDisplay = document.getElementById('headerTotal');
        const cartCountDisplay = document.getElementById('cartCount');
        const sidebarCart = document.getElementById('sidebarCart');
        const toggleCartBtn = document.getElementById('toggleCart');
        const menuToggleBtn = document.getElementById('menuToggle'); // NOVO
        const categoryOverlay = document.getElementById('categoryOverlay'); // NOVO

        // --- Funções de Carrinho ---

        function calculateTotal() {
           
            // Gerencia a visibilidade do botão de toggle do carrinho (Mobile)
            if (window.innerWidth <= 1024) {
                 toggleCartBtn.style.display = totalCount > 0 ? 'block' : 'none';
            }
        }

        function renderCart() {
         
            
            
        }


        // --- Funções de Layout e Responsividade ---

        // Toggle do menu lateral (carrinho)
        toggleCartBtn.addEventListener('click', function() {
            sidebarCart.classList.toggle('active');
            if (categoryOverlay.classList.contains('active')) {
                categoryOverlay.classList.remove('active'); // Fecha menu se carrinho abrir
            }
        });
        
        // Toggle do menu de categorias (Hambúrguer)
        menuToggleBtn.addEventListener('click', function() {
            categoryOverlay.classList.toggle('active');
            if (sidebarCart.classList.contains('active')) {
                sidebarCart.classList.remove('active'); // Fecha carrinho se menu abrir
            }
        });


        // Lógica de âncoras (Fecha o menu overlay após o clique no mobile)
        document.querySelectorAll('.anchor-link, .anchor-link-mobile').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Fecha o overlay (só afetará o mobile/tablet)
                categoryOverlay.classList.remove('active');
                
                // Lógica para rolagem suave e destaque
                document.querySelectorAll('.anchor-link').forEach(l => l.classList.remove('active'));
                
                // Encontra o link do desktop (se existir) e ativa
                const desktopLink = document.querySelector(`.category-links a[href="${this.getAttribute('href')}"]`);
                if (desktopLink) {
                    desktopLink.classList.add('active');
                } else {
                    // Se for mobile, usa o próprio link para o destaque visual
                    this.classList.add('active');
                }


                const targetElement = document.querySelector(this.getAttribute('href'));
                
                if (targetElement) {
                    const offset = 70; 
                    const bodyRect = document.body.getBoundingClientRect().top;
                    const elementRect = targetElement.getBoundingClientRect().top;
                    const elementPosition = elementRect - bodyRect;
                    const offsetPosition = elementPosition - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            });
        });

        // Garante a visibilidade correta dos elementos ao carregar/redimensionar
        function checkLayout() {
             if (window.innerWidth > 1024) {
                // Desktop: Carrinho visível, overlay e toggles escondidos
                document.body.style.paddingRight = 'var(--cart-width-full)';
                toggleCartBtn.style.display = 'none';
                menuToggleBtn.style.display = 'none';
                categoryOverlay.style.display = 'none';
             } else {
                // Mobile/Tablet: Carrinho escondido, toggles visíveis
                document.body.style.paddingRight = '0';
                toggleCartBtn.style.display = cart.length > 0 ? 'block' : 'none';
                menuToggleBtn.style.display = 'block';
                categoryOverlay.style.display = 'flex'; // Prepara o overlay para o toggle
             }
        }

        // Inicialização
        window.addEventListener('load', () => {
             renderCart();
             checkLayout();
        });
        window.addEventListener('resize', checkLayout);

