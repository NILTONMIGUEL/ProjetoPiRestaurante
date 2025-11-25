<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Depois colocar o nome</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        @livewireStyles
        @stack('style')
        @vite(['resources/css/admin-dashboard.css', 'resources/js/adm-dashboard.js'])


    </head>
    <body>
            
        <div class="dashboard-wrapper">
            <aside class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <span class="sidebar-logo-text">Sabor & Charme</span>
                </div>
                <nav class="sidebar-nav">
                    <ul class="sidebar-list">
                        <li class="sidebar-item active">
                            <a href="#" class="sidebar-link" title="Dashboard">
                                <i class="bi bi-speedometer2"></i>
                                <span class="link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" title="Pedidos">
                                <i class="bi bi-basket"></i>
                                <span class="link-text">Pedidos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" title="Mesas">
                                <i class="bi bi-table"></i>
                                <span class="link-text">Mesas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" title="Clientes">
                                <i class="bi bi-people"></i>
                                <span class="link-text">Clientes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" title="Funcionários">
                                <i class="bi bi-person-badge"></i>
                                <span class="link-text">Funcionários</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link" title="Sair">
                                <i class="bi bi-box-arrow-right"></i>
                                <span class="link-text">Sair</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <button class="toggle-btn" id="sidebar-toggle-desktop">
                    <i class="bi bi-chevron-double-left"></i>
                </button>
            </aside>

            <main class="main-content" id="main-content">
                <header class="top-bar-mobile" id="top-bar-mobile">
                    <button class="menu-toggle-mobile" id="menu-toggle-mobile">
                        <i class="bi bi-list"></i>
                    </button>
                    <h2 class="page-title">Dashboard</h2>
                </header>

                <section class="dashboard-area">
                    <h1 class="area-title">Bem-vindo(a) ao Dashboard!</h1>
                    
                    <div class="info-cards-grid">
                        <div class="info-card">
                            <h3>Total de Pedidos</h3>
                            <p class="data-number">1,250</p>
                            <i class="bi bi-basket icon-bg"></i>
                        </div>
                        <div class="info-card">
                            <h3>Receita Mês</h3>
                            <p class="data-number">R$ 45.678</p>
                            <i class="bi bi-currency-dollar icon-bg"></i>
                        </div>
                        <div class="info-card">
                            <h3>Mesas Ocupadas</h3>
                            <p class="data-number">12 / 20</p>
                            <i class="bi bi-table icon-bg"></i>
                        </div>
                        <div class="info-card">
                            <h3>Novos Clientes</h3>
                            <p class="data-number">85</p>
                            <i class="bi bi-people icon-bg"></i>
                        </div>
                    </div>

                    <div class="main-stats-section">
                        <h2>Estatísticas Mensais</h2>
                        <div class="stats-placeholder">
                            [Espaço para Gráfico de Vendas ou Tabela de Pedidos Recentes]
                        </div>
                    </div>

                </section>
            </main>
        </div>

        <footer id="contato" class="footer">
                <p>&copy; 2025 Sabor & Charme. Todos os direitos reservados.</p>
                <p>Reservas: (XX) XXXX-XXXX | Endereço: Rua Elegante, 123 - Centro</p>
            </footer>
            @livewireScripts
            @stack('scripts')

    </body>
</html>