<div class="products-grid">
    
    @foreach($produtos as $produto)
        @if($produto->id_categoriaProdutos == 3)
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
                    <a href="{{route('admin-excluirProduto',$produto->id)}}" class="action-btn-product btn-delete-product" style="text-decoration:none">
                        <i class="fas fa-trash-alt">&nbsp&nbsp</i> Excluir
                    </a>
                    <a href="{{route('admin-editarProdutos',$produto->id)}}" class="action-btn-product btn-edit-product" style="text-decoration:none">
                        <i class="fas fa-pencil-alt">&nbsp&nbsp</i> Editar
                    </a>
                    
                </div>
            </div>
        @endif
    @endforeach
</div>