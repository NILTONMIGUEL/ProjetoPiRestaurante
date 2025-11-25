<div>
     <main class="form-main">
        <div class="form-container login-container">
            <h2 class="form-title">Acesso Exclusivo</h2>
            <p class="form-subtitle">Faça login para gerenciar suas reservas.</p>
            <form id="login-form" class="elegant-form" method="POST" wire:submit='login'>

                <div class="input-group">
                    <label for="email"><i class="fas fa-envelope icon"></i> E-mail</label>
                    <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com" required>
                </div>

                <div class="input-group">
                    <label for="password"><i class="fas fa-lock icon"></i> Senha</label>
                    <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" required>
                </div>

                <button type="submit" class="btn-submit">Entrar <i class="fas fa-sign-in-alt"></i></button>

                <div class="form-links">
                    <a href="#" class="link-forgot">Esqueceu a senha?</a>
                    <span>|</span>
                    <a href="{{route('cadastrarCliente')}}" class="link-register">Não tem conta? <strong>Cadastre-se</strong></a>
                </div>
            </form>
        </div>
    </main>
</div>
