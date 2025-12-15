<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Digital - Sabor & Charme (Aprimorado)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @livewireStyles
    @stack('style')
    @vite(['resources/css/entradas.css', 'resources/js/carrinho.js'])

    </head>
    <body>

        <nav class="nav-menu">
            <div class="logo">Sabor & Charme</div>
            
            <ul class="category-links">
                <li><a href="#entradas" class="anchor-link active">Entradas</a></li>
                <li><a href="#principais" class="anchor-link">Pratos Principais</a></li>
                <li><a href="#sobremesas" class="anchor-link">Sobremesas</a></li>
                <li><a href="#bebidas" class="anchor-link">Bebidas</a></li>
            </ul>

           
        
            @yield('content')


        @livewireScripts
        @stack('scripts')
    </body>
</html>