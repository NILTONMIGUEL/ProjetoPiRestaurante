<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sabor & Charme Admin</title>
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/loginFuncionario.css', 'resources/js/adm-dashboard.js'])
    @livewireStyles
    @stack('style')
    <body>
    
        <div class="container">
            @livewire('login-funcionario')
        </div>
    </body>
</html>