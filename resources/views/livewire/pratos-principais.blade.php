<div>
    <section id="principais" class="category-section">
        <h2>Pratos Principais <i class="fas fa-utensils"></i></h2>
        <div class="products-grid">
            @foreach($produtos as $produto)
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="{{asset("storage/{$produto->imagem}")}}" alt="Filet Mignon" class="product-image">
                    </div>
                    <div class="product-details">
                        <h3>{{$produto->nome}}</h3>
                        <p>{{$produto->descricao}}</p>
                        <div class="product-info-footer">
                            <span class="product-price-display">R$ {{$produto->preco}}</span>
                            <button class="btn-add-to-cart" >Adicionar <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
            
</div>
