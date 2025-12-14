<div class="page-content">

    <div class="form-container">
        
        <h2><i class="fas fa-edit"></i> Editar Produto (Filet Mignon)</h2>
        
        <form action="#" method="POST" enctype="multipart/form-data" wire:submit.prevent="editarProduto">
            @csrf
            <div class="form-group">
                <label><i class="fas fa-camera"></i> Imagem do Produto</label>
                <small>Foto do produto</small>
                <div class="image-upload-wrapper">
                    <div class="image-preview" id="imagePreview">
                        <img src="{{asset("storage/{$produto->imagem}")}}" alt="{{asset("storage/{$produto->imagem}")}}" id="previewImage" style="display: block;">
                    </div>
                    
                    <div class="image-preview" id="imagePreview">
                        @if($imagem)
                            <img src="{{$imagem->temporaryUrl()}}" alt="nova foto " id="previewImage" style="display: block;">
                       @endif
                    </div>
                    
                    <label for="imageUpload" class="input-file-custom">
                        Trocar Imagem
                    </label>
                    <input type="file" id="imageUpload" name="imagem" accept="image/*" wire:model="imagem">
                </div>
                @error('imagem')
                    {{$message}}
                @enderror
            </div>
            
            <div class="form-group">
                <label for="nome"><i class="fas fa-tag"></i> Nome do Produto</label>
                <input type="text" id="nome" name="nome" value="{{$produto->nome}}" wire:model="nome">
            </div>
            @error('nome')
                {{$message}}
            @enderror

            <div class="form-group">
                <label for="descricao"><i class="fas fa-align-left"></i> Descrição</label>
                <textarea id="descricao" name="descricao" value="{{$produto->descricao}}" wire:model="descricao"> {{$produto->descricao}}</textarea>
            </div>
            @error('descricao')
                {{$message}}
            @enderror
            <div class="form-group">
                <label for="preco"><i class="fas fa-dollar-sign"></i> Preço (R$)</label>
                <input type="number" step="0.01" min="0" id="preco" name="preco" value="{{$produto->preco}}" wire:model= "preco">
            </div>
            @error('preco')
                {{$message}}
            @enderror

            <div class="form-actions">
                
                <a href="{{route('admin-produtos')}}" class="btn-cancel">
                    <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                </a>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-save">&nbsp&nbsp</i> Salvar Alterações
                </button>
                
            </div>
        </form>
    </div>

</div>