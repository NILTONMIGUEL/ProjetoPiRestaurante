<div class="page-content">

    <div class="form-container">
        
        <h2><i class="fas fa-user-edit"></i> Editar Funcionário</h2>
        
        <form wire:submit ="editar">
            @csrf
            <div class="form-group">
                <label for="nome"><i class="fas fa-user-circle"></i> Nome Completo</label>
                <input type="text" id="nome" name="nome" value="{{$funcionario->name}}" wire:model="nome" required>
            </div>

            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" value="{{$funcionario->email}}" wire:model="email" required>
            </div>

            <div class="form-group">
                <label for="senha"><i class="fas fa-lock"></i> Nova Senha (Opcional)</label>
                <input type="password" id="senha" name="senha" placeholder="Deixe vazio para manter a senha atual" wire:model="senha">
            </div>

            <div class="form-group">
                <label for="cargo"><i class="fas fa-briefcase"></i> Cargo</label>
                <select id="cargo" name="cargo" wire:model="cargo" value="" required>
                    <option value="" >{{$funcionario->cargos->nome}} Função atual</option>
                    @foreach($cargos as $cargo)
                        <option value={{$cargo->id}}>{{$cargo->nome}}</option>

                    @endforeach
                </select>
            </div>

            <div class="form-actions">
                
                <a href="{{route("admin-funcionarios")}}" class="btn-cancel">
                    <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                </a>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-sync-alt"></i> Salvar Alterações
                </button>
                
            </div>
        </form>
    </div>

</div>