<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Depois colocar o nome</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        @livewireStyles
        @stack('style')
        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
    <body>
        <header class="header">
            <div class="logo">Sabor & Charme</div>
            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#home">Início</a></li>
                    <li class="nav-item"><a href="#menu">Cardápio</a></li>
                    <li class="nav-item"><a href="#galeria">Galeria</a></li>
                    <li class="nav-item"><a href="#feedback">Feedback</a></li>
                    <li class="nav-item"><a href="#contato">Login / Cadastrar</a></li>
                </ul>
            </nav>
            <div class="menu-toggle" id="menu-toggle">
                &#9776; </div>
        </header>

       <div class="container">
            @yield('content');
       </div>

        <footer id="contato" class="footer">
            <p>&copy; 2025 Sabor & Charme. Todos os direitos reservados.</p>
            <p>Reservas: (XX) XXXX-XXXX | Endereço: Rua Elegante, 123 - Centro</p>
        </footer>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
