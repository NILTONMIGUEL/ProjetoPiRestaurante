<div>
    <main class="form-main">
        <div class="form-container cadastro-container">
            <h2 class="form-title">Seja Nosso Cliente VIP</h2>
            <p class="form-subtitle">Crie sua conta e garanta acesso prioritário a reservas e eventos.</p>
            <form id="cadastro-form" class="elegant-form">

                <div class="input-group">
                    <label for="nome"><i class="fas fa-user icon"></i> Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu Nome" required>
                </div>

                <div class="input-group">
                    <label for="email-cad"><i class="fas fa-envelope icon"></i> E-mail</label>
                    <input type="email" id="email-cad" name="email-cad" placeholder="seu.email@exemplo.com" required>
                </div>

                <div class="input-group">
                    <label for="telefone"><i class="fas fa-phone icon"></i> Telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXX-XXXX" required>
                </div>

                <div class="input-group">
                    <label for="password-cad"><i class="fas fa-lock icon"></i> Senha</label>
                    <input type="password" id="password-cad" name="password-cad" placeholder="Mínimo 8 caracteres" required>
                </div>

                <div class="input-group">
                    <label for="confirm-password"><i class="fas fa-lock icon"></i> Confirmar Senha</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Repita a senha" required>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">Desejo receber novidades e promoções.</label>
                </div>

                <button type="submit" class="btn-submit">Cadastrar <i class="fas fa-arrow-right"></i></button>

                <div class="form-links">
                    <a href="{{route('loginCliente')}}" class="link-login">Já tem conta? <strong>Fazer Login</strong></a>
                </div>
            </form>
        </div>
    </main> 
</div>
