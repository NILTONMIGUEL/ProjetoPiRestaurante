<div class="login-container">

    <div class="login-header">
        <h2>Sabor & Charme</h2>
        <p>Acesso ao Cardápio Digital</p>
    </div>

    <form action="{{route('cardapio.digital-logar')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="mesa"><i class="fas fa-utensils"></i> Número da Mesa</label>
            <input type="number" id="mesa" name="mesa" placeholder="Ex: 05" wire:model="numero" required min="1">
        </div>

        <div class="form-group">
            <label for="id"><i class="fas fa-key"></i> Código de Acesso / ID</label>
            <input type="text" id="id" name="id" placeholder="Digite o código da sua mesa" wire:model="id" required>
        </div>

        <button type="submit" class="btn-login">
            <i class="fas fa-sign-in-alt"></i> Fazer Login
        </button>
    </form>

</div>
