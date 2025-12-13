<div class="page-content">

    <div class="content-header">
        <h2 style="color: var(--color-primary);">Produtos Cadastrados</h2>

        <a href="{{route('admin-cadastrarProdutos')}}" class="btn-cadastrar" style="text-decoration: none">
            <i class="fas fa-plus-circle"></i> Cadastrar Produto
        </a>
    </div>

    <div class="products-grid">

        <div class="product-card">
            <div class="product-image-container">
                <img src="https://via.placeholder.com/400x200/FF4500/121212?text=PRATO+PRINCIPAL" alt="Prato Gourmet" class="product-image">
            </div>
            <div class="product-details">
                <div>
                    <h3>Filet Mignon ao Molho de Vinho</h3>
                    <p>Corte nobre com redução de vinho tinto, acompanhado de purê de batatas trufado e aspargos frescos.</p>
                </div>
                <p class="product-price">
                    R$ 89,90 <small>| Entrada Principal</small>
                </p>
            </div>
            <div class="product-actions">
                <button class="action-btn-product btn-delete-product" onclick="alert('Confirmar exclusão de Filet Mignon')">
                    <i class="fas fa-trash-alt"></i> Excluir
                </button>
                <button class="action-btn-product btn-edit-product" onclick="alert('Editar Filet Mignon')">
                    <i class="fas fa-pencil-alt"></i> Editar
                </button>
                
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img src="https://via.placeholder.com/400x200/FF4500/121212?text=SOBREMESA" alt="Sobremesa" class="product-image">
            </div>
            <div class="product-details">
                <div>
                    <h3>Petit Gateau de Chocolate Belga</h3>
                    <p>Bolo quente com recheio cremoso, servido com sorvete de baunilha e frutas vermelhas.</p>
                </div>
                <p class="product-price">
                    R$ 32,50 <small>| Sobremesa</small>
                </p>
            </div>
            <div class="product-actions">
                <button class="action-btn-product btn-delete-product" onclick="alert('Confirmar exclusão de Petit Gateau')">
                    <i class="fas fa-trash-alt"></i> Excluir
                </button>
                <button class="action-btn-product btn-edit-product" onclick="alert('Editar Petit Gateau')">
                    <i class="fas fa-pencil-alt"></i> Editar
                </button>
                
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img src="https://via.placeholder.com/400x200/FF4500/121212?text=BEBIDA" alt="Bebida" class="product-image">
            </div>
            <div class="product-details">
                <div>
                    <h3>Suco Natural de Laranja</h3>
                    <p>Laranjas frescas espremidas na hora. Sem adição de açúcar.</p>
                </div>
                <p class="product-price">
                    R$ 12,00 <small>| Bebidas</small>
                </p>
            </div>
            <div class="product-actions">
                <button class="action-btn-product btn-delete-product" onclick="alert('Confirmar exclusão de Suco de Laranja')">
                    <i class="fas fa-trash-alt"></i> Excluir
                </button>
                <button class="action-btn-product btn-edit-product" onclick="alert('Editar Suco de Laranja')">
                    <i class="fas fa-pencil-alt"></i> Editar
                </button> 
            </div>
        </div>
    </div>
</div>