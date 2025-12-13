<div class="page-content">

    <div class="confirmation-container">
        
        <h2><i class="fas fa-exclamation-triangle"></i> Confirmação de Exclusão</h2>
        
        <p class="alert-message">
            <strong>ATENÇÃO:</strong> Você está prestes a remover permanentemente o colaborador a seguir. Esta ação não pode ser desfeita.
        </p>
        
        <form wire:submit ="excluir({{$funcionario->id}})">
            
            <div class="form-group">
                <label for="nome"><i class="fas fa-user-circle"></i> Nome do Funcionário</label>
                <input type="text" id="nome" name="nome" value="{{$funcionario->name}}" readonly>
            </div>

            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" value="{{$funcionario->email}}" readonly>
            </div>

            <div class="form-group">
                <label for="funcao"><i class="fas fa-briefcase"></i> Função</label>
                <input type="text" id="funcao" name="funcao" value="{{$funcionario->cargos->nome}}" readonly>
            </div>

            <div class="form-actions">
                
                <a href="{{route('admin-funcionarios')}}" class="btn-cancel">
                    <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                </a>

                <button type="submit" class="btn-confirm">
                    <i class="fas fa-trash-alt"></i> Confirmar Exclusão
                </button>
                
            </div>
        </form>
    </div>

</div>