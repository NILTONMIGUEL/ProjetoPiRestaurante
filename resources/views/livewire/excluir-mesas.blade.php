<div class="modal-overlay" id="deleteModal">
    <div class="modal-content">
        <i class="fas fa-exclamation-triangle modal-icon" ></i>

        <h3>Confirmação de Exclusão</h3>

        <p class="modal-message">
            Tem certeza que deseja **EXCLUIR** permanentemente a seguinte mesa?
        </p>

        <div class="table-number-display">
            Mesa <span id="mesa-numero">{{$mesaNumero}}</span>
        </div>

        <div class="modal-actions">
            <button class="btn-modal btn-cancel" wire:click = "cancelar" >
                Cancelar
            </button>
            <button class="btn-modal btn-confirm-delete" id="confirmDeleteBtn" wire:click="excluir({{$id}})">
                <i class="fas fa-trash-alt"></i> Excluir
            </button>
        </div>
    </div>
</div>
