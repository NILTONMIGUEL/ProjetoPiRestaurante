<div class="products-grid">
    
    @foreach($produtos as $produto)
        @if($produto->id_categoriaProdutos == 2)
            <div class="product-card">
                <div class="product-image-container">
                    <img src="{{asset("storage/{$produto->imagem}")}}" alt="{{asset("storage/{$produto->nome}")}}" class="product-image">
                </div>
                <div class="product-details">
                    <div>
                        <h3>{{$produto->nome}}</h3>
                        <p>{{$produto->descricao}}</p>
                    </div>
                    <p class="product-price" style="font-size:16px">
                        R$ {{$produto->preco}} Reais 
                    </p>
                    <span style="font-size:13px"> {{$produto->CategoriaProduto?->nome}}</span>
                </div>
                <div class="product-actions">
                    <button class="action-btn-product btn-delete-product" >
                        <i class="fas fa-trash-alt"></i> Excluir
                    </button>
                    <button class="action-btn-product btn-edit-product" >
                        <i class="fas fa-pencil-alt"></i> Editar
                    </button>
                    
                </div>
            </div>
        @endif
    @endforeach
</div>