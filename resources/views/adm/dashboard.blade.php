<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Depois colocar o nome</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        @livewireStyles
        @stack('style')
        @vite(['resources/css/admin-dashboard.css', 'resources/js/adm-dashboard.js'])


    </head>
    <body>

        @livewire('dashboard-admin')
        @livewireScripts
        @stack('scripts')

    </body>
</html>
