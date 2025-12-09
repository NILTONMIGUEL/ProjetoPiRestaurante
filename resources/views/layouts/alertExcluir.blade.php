<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestão de Mesas - Sabor & Charme Admin</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        @livewireStyles
        @stack('style')
        @vite(['resources/css/adm-excluirMesas.css', 'resources/js/app.js'])
    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>