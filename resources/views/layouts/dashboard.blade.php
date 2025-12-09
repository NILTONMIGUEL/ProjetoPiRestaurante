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

        @if(Request::is('painel-admin'))
            @vite(['resources/css/admin-dashboard.css', 'resources/js/adm-dashboard.js'])
        @elseif(Request::is('adm-cadastrarMesas'))
            @vite(['resources/css/adm-cadastrar-mesas.css', 'resources/js/adm-dashboard.js'])
        @endif

    </head>
    <body>
        <div class="dashboard-container">

            <aside class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <div class="logo-min">S&C</div>
                    <div class="logo-full">Sabor & Charme</div>
                </div>

                <nav class="sidebar-nav">
                    <ul>
                        <li class="nav-item {{request()->routeIs('painel-admin') ? 'active' : ''}}">
                            <a href="{{route('painel-admin')}}" title="Dashboard">
                                <i class="fas fa-home"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item {{request()->routeIs('adm.cadastrarMesas') ? 'active' : ''}}">
                            <a href="{{route('adm.cadastrarMesas')}}" title="Mesas">
                                <i class="fas fa-chair"></i>
                                <span class="nav-text">Mesas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" title="Produtos">
                                <i class="fas fa-utensils"></i>
                                <span class="nav-text">Produtos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" title="Funcionários">
                                <i class="fas fa-user-tie"></i>
                                <span class="nav-text">Funcionários</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" title="Clientes">
                                <i class="fas fa-users"></i>
                                <span class="nav-text">Clientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" title="Pedidos">
                                <i class="fas fa-receipt"></i>
                                <span class="nav-text">Pedidos</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="sidebar-footer">
                    <a href="{{route('logout')}}" title="Sair" class="nav-item logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-text">Sair</span>
                    </a>
                </div>
            </aside>
            <main class="main-content" id="main-content" id="close">
                <header class="main-header">
                    <button class="toggle-btn" id="toggle-sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2>Visão Geral da Gestão</h2>
                </header>
                <div class="container">
                    @yield('content')
                </div>
        </div>

        
        
        @livewireScripts
        @stack('scripts')

    </body>
</html>
