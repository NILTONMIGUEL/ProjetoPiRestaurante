<div class="main-content">

    <div class="page-content">

        <div class="content-header">
            <h2 style="color: var(--color-primary);">Equipe Sabor & Charme</h2>
            
            <a href="{{route('admin-cadastrarFuncionarios')}}" class="btn-cadastrar" style="text-decoration: none">
                <i class="fas fa-user-plus"></i> Cadastrar Funcionário
            </a>
        </div>
           
        <div class="employees-grid">
            @foreach($funcionarios as $funcionario)
                @if($funcionario->id_cargo == 3)
                    <div class="employee-card role-gerente">
                        <div class="card-header-role">
                            <h3>{{$funcionario->name}}</h3>
                            <p>Registro : {{$funcionario->id}}</p>
                            <i class="fas fa-user-tie profile-icon"></i> 
                        </div>
                        <div class="card-body">
                            <ul class="card-info">
                                <li><i class="fas fa-briefcase"></i> <strong>Função:</strong>  {{$funcionario->cargos->nome}}</li>
                                <li><i class="fas fa-envelope"></i> <strong>Email:</strong>{{$funcionario->email}}</li>
                            </ul>
                        </div>
                        <div class="employee-actions">
                            <button class="action-btn btn-edit" wire:click='editarFuncionario({{$funcionario->id}})'>
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="action-btn btn-delete" wire:click = "excluirFuncionario({{$funcionario->id}})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                @elseif($funcionario->id_cargo == 2)
                    <div class="employee-card role-garcom">
                        <div class="card-header-role">
                            <h3>{{$funcionario->name}}</h3>
                            <p>Registro: {{$funcionario->id}}</p>
                            <i class="fas fa-cocktail profile-icon"></i> 
                        </div>
                        <div class="card-body">
                            <ul class="card-info">
                                <li><i class="fas fa-briefcase"></i> <strong>Função:</strong> {{$funcionario->cargos->nome}}</li>
                                <li><i class="fas fa-envelope"></i> <strong>Email:</strong> {{$funcionario->email}}</li>
                            </ul>
                        </div>
                        <div class="employee-actions">
                            <button class="action-btn btn-edit" wire:click='editarFuncionario({{$funcionario->id}})'>
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="action-btn btn-delete" wire:click = "excluirFuncionario({{$funcionario->id}})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                @elseif($funcionario->id_cargo == 1)

                    <div class="employee-card role-cozinha">
                        <div class="card-header-role">
                            <h3>{{$funcionario->name}}</h3>
                            <p>Registro: {{$funcionario->id}}</p>
                            <i class="fas fa-hat-chef profile-icon"></i> 
                        </div>
                        <div class="card-body">
                            <ul class="card-info">
                                <li><i class="fas fa-briefcase"></i> <strong>Função:</strong> {{$funcionario->cargos->nome}}</li>
                                <li><i class="fas fa-envelope"></i> <strong>Email:</strong> {{$funcionario->email}}</li>
                            </ul>
                        </div>
                        <div class="employee-actions">
                            <button class="action-btn btn-edit" wire:click='editarFuncionario({{$funcionario->id}})'>
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="action-btn btn-delete" wire:click = "excluirFuncionario({{$funcionario->id}})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                @elseif($funcionario->id_cargo == 4)
                    <div class="employee-card role-admin">
                        <div class="card-header-role">
                            <h3>{{$funcionario->name}}</h3>
                            <p>Registro: {{$funcionario->id}}</p>
                            <i class="fas fa-cash-register profile-icon"></i> 
                        </div>
                        <div class="card-body">
                            <ul class="card-info">
                                <li><i class="fas fa-briefcase"></i> <strong>Função:</strong> {{$funcionario->cargos->nome}}</li>
                                <li><i class="fas fa-envelope"></i> <strong>Email:</strong>{{$funcionario->email}}</li>
                            </ul>
                        </div>
                        <div class="employee-actions">
                            <button class="action-btn btn-edit" wire:click='editarFuncionario({{$funcionario->id}})' >
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="action-btn btn-delete" wire:click = "excluirFuncionario({{$funcionario->id}})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        
    </div>
</div>