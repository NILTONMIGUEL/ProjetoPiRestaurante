<div class="page-content">

    <div class="form-container">
        
        <h2><i class="fas fa-drumstick-bite"></i> Cadastrar Novo Produto</h2>
        
        <form wire:submit.prevent="cadastrarProdutos" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label><i class="fas fa-camera"></i> Imagem do Produto</label>
                <div class="image-upload-wrapper">
                    <div >
                        @if($imagem)
                            
                            <img src="{{$imagem->temporaryUrl()}}" alt="Prévia da Imagem" id="previewImage" style="width:200px">
                        @endif
                    </div>
                       
                    <label for="imageUpload" class="input-file-custom">
                        Escolher Imagem : <small>tamanho 1600x900</small>
                    </label>
                    <input type="file" id="imageUpload" name="imagem" accept="image/*" wire:model="imagem" required>
                </div>
                @error('imagem')
                    {{$message}}
                @enderror
            </div>
            
            <div class="form-group">
                <label for="nome"><i class="fas fa-tag"></i> Nome do Produto</label>
                <input type="text" id="nome" name="nome" placeholder="Ex: Cheesecake de Frutas Vermelhas" wire:model="nome" required>
            </div>
             @error('nome')
                {{$message}}
            @enderror
            <div class="form-group">
                <label for="descricao"><i class="fas fa-align-left"></i> Descrição</label>
                <textarea id="descricao" name="descricao" placeholder="Descreva os ingredientes e diferenciais do produto." wire:model="descricao" required></textarea>
            </div>
             @error('descricao')
                {{$message}}
            @enderror
            <div class="form-group">
                <label for="preco"><i class="fas fa-dollar-sign"></i> Preço (R$)</label>
                <input type="number" step="0.01" min="0" id="preco" name="preco" placeholder="Ex: 45.90" wire:model="preco" required>
            </div>
            @error('preco')
                {{$message}}
            @enderror
            <div class="form-group">
                <label for="cargo"><i class="fas fa-utensils"></i> Categoria Produto</label>
                <select id="cargo" name="cargo" value=""  wire:model="categoria" required>
                    <option value="" selected>Selecione a categoria...</option>
                    @foreach($categoriaProduto as $categoriaProd)
                        <option value='{{$categoriaProd->id}}'>{{$categoriaProd->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-actions">
                
                <a href="#" class="btn-cancel">
                    <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                </a>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-save">&nbsp</i> Cadastrar Produto
                </button>
                
            </div>
        </form>
    </div>

</div>