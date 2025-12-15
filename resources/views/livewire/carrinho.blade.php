<div class="sidebar-cart" id="sidebarCart">
        <div class="cart-header">
            <h3>Seu Pedido <i class="fas fa-shopping-basket"></i></h3>
        </div>
       
        <div class="cart-items-list" id="cartItemsList">
            @foreach($produtos as $produto)
                <div class="cart-item-image">
                    <img src="{{asset("storage/{$produto->imagem}")}}" alt="${product.name}">
                </div>
                <div class="cart-item-details">
                    <h4>{{$produto->produto->nome}}</h4>
                    <p>R$ {{$produto->preco}}</p>
                    <button class="btn-remove-item" >Apagar</button>
                </div>
                <div class="quantity-controls">
                    <button wire:click="decrementar({{$produto->id}})"><i class="fas fa-minus"></i></button>
                    <span class="quantity-display" id="qty-${item.id}">{{$produto->quantidade}}</span>
                    <button wire:click="incrementar({{$produto->id}})"><i class="fas fa-plus"></i></button>
                </div>
            @endforeach
        </div>
        
        <div class="cart-footer">
            <div class="cart-total">
                <span>Total:</span>
                <span id="cartTotal">R$ {{$precoTotal}}</span>
            </div>
            
            <div class="cart-buttons-group">
                <button class="btn-waiter" onclick="alert('Garçom chamado! Por favor, aguarde.')">
                    <i class="fas fa-bell"></i> Chamar Garçom
                </button>
                
                <button class="btn-comprar" wire:click="fazerPedido">
                    <i class="fas fa-check-circle"></i> Fazer Pedido
                </button>
            </div>
        </div>
    </div>