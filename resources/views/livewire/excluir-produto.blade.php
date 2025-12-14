<div class="page-content">

        <div class="confirmation-container">
            
            <h2><i class="fas fa-trash-alt"></i> Atenção: Excluir Produto</h2>
            
            <p class="alert-message">
                Confirme os dados do produto. <strong style="color:orangered">Esta ação é permanente</strong> e não pode ser revertida.
            </p>
            
            <div class="product-details-summary">
                <div class="product-details-image">
                    @if(!empty($produto->imagem))
                        <img src="{{asset("storage/{$produto->imagem}")}}" alt="Produto a ser excluído">
                    @endif
                </div>
                <div class="product-details-text">
                    <h3>{{$produto->nome}}</h3>
                    <span class="price">R$: {{$produto->preco}}</span>
                    <p style="color: #aaa; margin-top: 5px; font-size: 0.9em;">ID do Produto: # {{$produto->id}}</p>
                </div>
            </div>
            
            <form wire:submit.prevent="excluirProduto">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" id="nome" value="{{$produto->nome}}" readonly>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição Completa</label>
                    <input type="text" id="descricao" value="{{$produto->descricao}}" readonly>
                </div>

                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" id="preco" value="R$ {{$produto->preco}}" readonly>
                </div>


                <div class="form-actions">
                    
                    <a href="{{route('admin-produtos')}}"  class="btn-cancel">
                        <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                    </a>

                    <button type="submit" class="btn-confirm">
                        <i class="fas fa-fire-extinguisher">&nbsp&nbsp</i> Apagar Produto
                    </button>
                    
                </div>
            </form>
        </div>

    </div>