<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sabor & Charme</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    @livewireStyles
    @stack('style')
    @vite(['resources/css/dashboardFuncionario.css', 'resources/js/dashboardFuncionario.js'])
</head>

    
<body class="bg-dark-bg text-light-text font-body">

    <div class="dashboard-container flex">

        <!-- Sidebar (Menu Lateral) -->
        <!-- Por padrão (mobile/md), ele é estreito (w-16) e expande em lg (w-64) -->
        <aside id="sidebar" class="sidebar w-16 lg:w-64 bg-dark-card shadow-2xl flex flex-col fixed lg:sticky top-0 left-0 h-screen z-20 border-r border-primary/30">
            
            <!-- Logo Topo -->
            <div class="p-4 border-b border-primary/30 h-20 flex items-center justify-center lg:justify-start">
                <span class="logo-text text-3xl font-bold text-primary lg:ml-2">S&C</span>
                <!-- O texto completo só aparece em telas maiores que 'lg' -->
                <span class="logo-text text-2xl font-bold text-light-text ml-2 hidden lg:inline">Admin</span>
            </div>

            <!-- Navegação Principal -->
            <nav class="flex-grow p-2 space-y-2 overflow-y-auto">
                
                <!-- Mesas -->
                <a href="#" class="flex items-center p-3 rounded-lg text-light-text hover:bg-primary/20 transition-colors duration-200 group">
                    <i class="fas fa-chair text-xl group-hover:text-primary transition-all duration-200"></i>
                    <!-- Oculto em telas menores, visível em lg -->
                    <span class="menu-item-text ml-4 text-sm font-medium whitespace-nowrap hidden lg:inline">Mesas</span>
                </a>

                <!-- Pedidos -->
                <a href="#" class="flex items-center p-3 rounded-lg text-light-text hover:bg-primary/20 transition-colors duration-200 group">
                    <i class="fas fa-receipt text-xl group-hover:text-primary transition-all duration-200"></i>
                    <span class="menu-item-text ml-4 text-sm font-medium whitespace-nowrap hidden lg:inline">Pedidos</span>
                </a>

                <!-- Adicional: Cardápio (Exemplo) -->
                <a href="#" class="flex items-center p-3 rounded-lg text-light-text hover:bg-primary/20 transition-colors duration-200 group">
                    <i class="fas fa-book-open text-xl group-hover:text-primary transition-all duration-200"></i>
                    <span class="menu-item-text ml-4 text-sm font-medium whitespace-nowrap hidden lg:inline">Cardápio</span>
                </a>
                
                <!-- Adicional: Relatórios (Exemplo) -->
                <a href="#" class="flex items-center p-3 rounded-lg text-light-text hover:bg-primary/20 transition-colors duration-200 group">
                    <i class="fas fa-chart-line text-xl group-hover:text-primary transition-all duration-200"></i>
                    <span class="menu-item-text ml-4 text-sm font-medium whitespace-nowrap hidden lg:inline">Relatórios</span>
                </a>
            </nav>

            <!-- Rodapé da Sidebar (Usuário) -->
            <div class="p-4 border-t border-primary/30">
                <div class="flex items-center justify-center lg:justify-start space-x-2">
                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-sm font-bold">JD</div>
                    <div class="hidden lg:block">
                        <p class="text-sm font-medium leading-none">João Desenvolvedor</p>
                        <p class="text-xs text-gray-400">Gerente</p>
                    </div>
                </div>
            </div>

        </aside>
        <div class="container">
            @yield('content')
        </div>
       
</body>
</html>