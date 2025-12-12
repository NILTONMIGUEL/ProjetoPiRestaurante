<div class="page-content">

    <div class="form-container" id="cadastro-funcionario">
        
        <h2><i class="fas fa-user-plus"></i> Novo Colaborador</h2>
        
        <form wire:submit="cadastrar">
            @csrf
            <div class="form-group">
                <label for="nome"><i class="fas fa-user-circle"></i> Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o nome do funcionário" wire:model="nome" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" placeholder="email@funcionario.com" wire:model="email" required>
            </div>
            <div class="form-group">
                <label for="senha"><i class="fas fa-lock"></i> Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha" wire:model="senha" required>
            </div>
            <div class="form-group">
                <label for="cargo"><i class="fas fa-briefcase"></i> Cargo</label>
                <select id="cargo" name="cargo" wire:model="cargoId" value="" required>
                    <option value="" selected>Selecione o cargo...</option>
                    @foreach($cargo as $key => $cargos)
    
                        <option value='{{$cargos->id}}'>{{$cargos->nome}}</option>
                    
                    @endforeach
                   
                </select>
            </div>

            <div class="form-actions">
                <a href="{{route('admin-funcionarios')}}" class="btn-cancel">
                    <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                </a>
                <button type="submit" class="btn-submit">
                    <i class="fas fa-save"></i> Cadastrar Funcionário
                </button>
            </div>
        </form>
    </div>
</div>
