<div class="registration-container">
        
        <h2>Cadastro de Mesa</h2>

        <div class="registration-card">
            
            <form class="registration-form" wire:submit="salvar">
                @csrf
                <div class="input-group-form">
                    <label for="numeroMesa"><i class="fas fa-hashtag"></i> Número/Identificador da Mesa</label>
                    <input type="text" id="numeroMesa"  wire:model="numero" placeholder="Ex: 05" required>
                    @error('numero')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
                
                <div class="input-group-form">
                    <label for="statusMesa"><i class="fas fa-info-circle"></i> Status Atual</label>

                    <select id="statusMesa" wire:model="status" required>
                        <option value="">Selecione o status da mesa</option>
                        @foreach($descricao as $desc)
                        
                            @if($desc->id == 1)
                                <option value="{{$desc->id}}" style="color: var(--status-disponivel);">{{$desc->nome}}</option>
                            @elseif($desc->id == 2)
                                <option value="{{$desc->id}}" style="color: var(--status-ocupado);">{{$desc->nome}}</option>
                            @else
                                <option value="{{$desc->id}}" style="color: var(--status-limpeza);">{{$desc->nome}}</option>
                            @endif
                        @endforeach
                        
                    </select>
                </div>
                
                <div class="action-buttons">
                    
                    <button type="submit" class="btn-salvar">
                        <i class="fas fa-save"></i> Salvar
                    </button>

                    <button type="button" class="btn-cancelar" wire:click='cancelar_mesaModal'>
                        <i class="fas fa-times"></i> Cancelar
                    </button>
                </div>
                @error('status') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </form>
            
        </div>

    </div>