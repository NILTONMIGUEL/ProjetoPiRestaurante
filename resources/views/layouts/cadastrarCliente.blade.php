<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sabor & Charme</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="login-cadastro.css"> </head>
<body>

    <header class="header">
        <div class="logo">Sabor & Charme</div>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="index.html#home">Início</a></li>
                <li class="nav-item"><a href="index.html#menu">Cardápio</a></li>
                <li class="nav-item"><a href="login.html">Login</a></li> </ul>
        </nav>
        <div class="menu-toggle" id="menu-toggle">
            &#9776; </div>
    </header>

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
                    <a href="login.html" class="link-login">Já tem conta? **Fazer Login**</a>
                </div>
            </form>
        </div>
    </main>

    <footer id="contato" class="footer">
        <p>&copy; 2025 Sabor & Charme. Todos os direitos reservados.</p>
        <p>Reservas: (XX) XXXX-XXXX | Endereço: Rua Elegante, 123 - Centro</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
