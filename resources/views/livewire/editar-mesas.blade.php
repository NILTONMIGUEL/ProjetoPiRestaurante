<div id="edit-product-modal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3><i class="fas fa-edit"></i> Editar Mesas</h3>
            <button class="close-btn">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <form id="product-form" method="POST" enctype="multipart/form-data" wire:submit="salvar">
            @csrf
            <div class="form-group">
                <label for="product-name">Número da Mesa:</label>
                <input type="text" id="numero" value={{$mesas->numero}} disabled required>
            </div>
    
            <div class="form-group">
                <label for="product-status">Status da Mesa:</label>
                <select id="product-status" value="" wire:model='status' required>

                    @foreach($descricao as $desc)
                        @if($desc->id == 1)
                            <option value= 1 >{{$desc->nome}}</option>
                        @elseif($desc->id == 2)
                            <option value= 2 >{{$desc->nome}}</option>
                        @else
                            <option value= 3 >{{$desc->nome }}</option>
                        @endif 
                    @endforeach
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-cancelar">
                    <i class="fas fa-undo"></i> Sair
                </button>
                <button type="submit" class="btn-salvar">
                    <i class="fas fa-save"></i> Salvar
                </button>
            </div>
        </form>
    </div>
</div>