<div class="dashboard-container">

        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo-min">S&C</div>
                <div class="logo-full">Sabor & Charme</div>
            </div>

            <nav class="sidebar-nav">
                <ul>
                    <li class="nav-item active">
                        <a href="#" title="Dashboard">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" title="Mesas">
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
                <a href="#" title="Sair" class="nav-item logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-text">Sair</span>
                </a>
            </div>
        </aside>

        <main class="main-content" id="main-content">
            <header class="main-header">
                <button class="toggle-btn" id="toggle-sidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <h2>Visão Geral da Gestão</h2>
            </header>

            <section class="dashboard-cards">
                <div class="card card-revenue">
                    <i class="fas fa-chart-line card-icon"></i>
                    <h3>Vendas de Hoje</h3>
                    <p class="card-value">R$ 5.480,00</p>
                </div>
                <div class="card card-products">
                    <i class="fas fa-utensil-spoon card-icon"></i>
                    <h3>Prato Mais Vendido</h3>
                    <p class="card-value">Filé Mignon Clássico</p>
                </div>
                <div class="card card-customers">
                    <i class="fas fa-users card-icon"></i>
                    <h3>Mesas Ocupadas</h3>
                    <p class="card-value">12 / 20</p>
                </div>
            </section>

            <section class="dashboard-details">
                <div class="details-chart">
                    <h3>Performance da Semana</h3>
                    <div class="chart-placeholder">Gráfico de Barras/Linhas Aqui</div>
                </div>
                <div class="details-table">
                    <h3>Últimos Pedidos</h3>
                    <table>
                        <thead>
                            <tr><th>ID</th><th>Mesa</th><th>Total</th><th>Status</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>#1001</td><td>Mesa 5</td><td>R$ 152,00</td><td><span class="status paid">Pago</span></td></tr>
                            <tr><td>#1002</td><td>Mesa 12</td><td>R$ 210,00</td><td><span class="status pending">Pendente</span></td></tr>
                            <tr><td>#1003</td><td>Mesa 1</td><td>R$ 89,00</td><td><span class="status paid">Pago</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>
