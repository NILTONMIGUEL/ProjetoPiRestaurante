
<div>
    <section class="dashboard-cards" id="close">
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
        @livewire('dashboard-mesas-ocupadas')
    </section>

    <section class="dashboard-details" id="close">
        <div class="details-chart">
            <h3>Performance da Semana</h3>
            <div class="chart-placeholder">Gráfico de Barras/Linhas Aqui</div>
        </div>
        <div class="details-table" id="close">
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
