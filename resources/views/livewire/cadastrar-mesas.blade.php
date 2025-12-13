<div class="main-content">

    <div class="page-content">

        <div class="content-header">
            <h2 style="color: var(--color-primary);">Mesas do Salão</h2>
                
            <a href="{{route('adm.cadastrarMesasModal')}}" class="btn-cadastrar" style="text-decoration: none">
                <i class="fas fa-plus-circle"></i> Cadastrar Mesa
            </a>
        </div>

        <div class="tables-grid">

            @foreach($mesas as $mesa)

                @if($mesa->id_descricao == 1)

                    <div class="table-card status-disponivel">
                    <i class="fas fa-couch table-icon-large"></i> 
                    <div class="table-content">
                        <h3>Mesa {{$mesa->numero}}</h3>
                        <div class="status-container">
                            <div class="status-badge verde">{{$mesa->descricao->nome}}</div>
                            
                        </div>
                    </div>
                        
                        <div class="table-actions">
                            <button class="action-btn btn-edit" wire:click="editarMesas('{{$mesa->id}}')">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="action-btn btn-delete" wire:click="excluirMesas('{{$mesa->id}}')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                @elseif($mesa->id_descricao == 2)
                    <div class="table-card status-disponivel">
                    <i class="fas fa-couch table-icon-large"></i> 
                    <div class="table-content">
                        <h3>Mesa {{$mesa->numero}}</h3>
                        <div class="status-container">
                            <div class="status-badge amarelo">{{$mesa->descricao->nome}}</div>
                            
                        </div>
                    </div>
                        
                        <div class="table-actions">
                            <button class="action-btn btn-edit" wire:click="editarMesas({{$mesa->id}})">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="action-btn btn-delete" wire:click="excluirMesas('{{$mesa->id}}')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                @elseif($mesa->id_descricao == 3)
                    <div class="table-card status-disponivel">
                    <i class="fas fa-couch table-icon-large"></i> 
                    <div class="table-content">
                        <h3>Mesa {{$mesa->numero}}</h3>
                        <div class="status-container">
                            <div class="status-badge vermelho">{{$mesa->descricao->nome}}</div>
                           
                        </div>
                    </div>
                        
                        <div class="table-actions">
                            <button class="action-btn btn-edit" wire:click="editarMesas({{$mesa->id}})">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="action-btn btn-delete" wire:click="excluirMesas('{{$mesa->id}}')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                @endif

                @endforeach

            </div>

        </div>
    </div>

</div>