<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sabor & Charme</title>
    <link rel="stylesheet" href="style.css">
    @livewireStyles
    @stack('style')
    @vite(['resources/css/loginCliente.css', 'resources/js/app.js'])
 </head>
<body>
    <header class="header">
        <div class="logo">Sabor & Charme</div>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="index.html#home">Início</a></li>
                <li class="nav-item"><a href="index.html#menu">Cardápio</a></li>
                <li class="nav-item"><a href="#cadastro">Cadastrar</a></li> </ul>
        </nav>
        <div class="menu-toggle" id="menu-toggle">
            &#9776; </div>
    </header>


    <div class="container">
        @yield(section: 'content');
    </div>


    <footer id="contato" class="footer">
        <p>&copy; 2025 Sabor & Charme. Todos os direitos reservados.</p>
        <p>Reservas: (XX) XXXX-XXXX | Endereço: Rua Elegante, 123 - Centro</p>
    </footer>

    <script src="script.js"></script>
    @livewireScripts
    @stack('scripts')
</body>
</html>

