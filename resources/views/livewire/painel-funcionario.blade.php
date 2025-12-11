 <!-- Conteúdo Principal -->
 <div>
        <main class="flex-grow overflow-x-hidden p-4 lg:p-8 ml-16 lg:ml-0">
            
            <!-- Cabeçalho (Header) -->
            <header class="h-20 flex items-center justify-between border-b border-gray-700 mb-8">
                <h1 class="text-3xl font-title text-light-text">Visão Geral</h1>
                
                <div class="flex items-center space-x-4">
                    <!-- Botão de Notificações -->
                    <button class="p-2 rounded-full hover:bg-dark-secondary transition-colors duration-200 relative">
                        <i class="fas fa-bell text-xl text-primary"></i>
                        <span class="absolute top-0 right-0 w-3 h-3 bg-red-600 rounded-full border-2 border-dark-bg"></span>
                    </button>
                    <!-- Search Bar (Oculta em mobile) -->
                    <div class="hidden md:block">
                        <div class="flex items-center bg-dark-card rounded-lg p-2 border border-primary/50">
                            <i class="fas fa-search text-primary text-sm mr-2"></i>
                            <input type="text" placeholder="Buscar..." class="bg-transparent text-sm focus:outline-none w-40">
                        </div>
                    </div>
                </div>
            </header>

            <!-- Grid de Métricas (Responsivo) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                
                <!-- Card 1: Mesas Livres -->
                <div class="bg-dark-card p-6 rounded-xl shadow-xl border-t-4 border-primary/70 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-gray-400 uppercase text-xs font-semibold">Mesas Livres</p>
                        <i class="fas fa-chair text-primary text-2xl"></i>
                    </div>
                    <p class="text-4xl font-bold mt-2">12 / 20</p>
                    <p class="text-xs text-green-400 mt-1">+60% de ocupação</p>
                </div>

                <!-- Card 2: Pedidos Pendentes -->
                <div class="bg-dark-card p-6 rounded-xl shadow-xl border-t-4 border-yellow-500 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-gray-400 uppercase text-xs font-semibold">Pedidos Pendentes</p>
                        <i class="fas fa-hourglass-half text-yellow-500 text-2xl"></i>
                    </div>
                    <p class="text-4xl font-bold mt-2">5</p>
                    <p class="text-xs text-yellow-400 mt-1">Aguardando Cozinha</p>
                </div>

                <!-- Card 3: Venda Total (Dia) -->
                <div class="bg-dark-card p-6 rounded-xl shadow-xl border-t-4 border-green-500 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-gray-400 uppercase text-xs font-semibold">Venda Diária</p>
                        <i class="fas fa-wallet text-green-500 text-2xl"></i>
                    </div>
                    <p class="text-4xl font-bold mt-2">R$ 1.250,00</p>
                    <p class="text-xs text-green-400 mt-1">Meta atingida!</p>
                </div>
                
                <!-- Card 4: Tempo Médio -->
                <div class="bg-dark-card p-6 rounded-xl shadow-xl border-t-4 border-blue-500 transform hover:scale-[1.02] transition-transform duration-300">
                    <div class="flex items-center justify-between">
                        <p class="text-gray-400 uppercase text-xs font-semibold">Tempo Médio (Pedido)</p>
                        <i class="fas fa-clock text-blue-500 text-2xl"></i>
                    </div>
                    <p class="text-4xl font-bold mt-2">18 min</p>
                    <p class="text-xs text-blue-400 mt-1">Ideal: 15 min</p>
                </div>
            </div>

            <!-- Seção de Ações Principais (Mesas e Pedidos Recentes) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Coluna Principal (2/3) -->
                <div class="lg:col-span-2">
                    <div class="bg-dark-card p-6 rounded-xl shadow-xl border border-gray-800">
                        <h3 class="text-xl font-semibold mb-4 text-primary border-b border-primary/30 pb-2">Pedidos Recentes</h3>
                        
                        <!-- Lista de Pedidos -->
                        <div class="space-y-3">
                            <!-- Item do Pedido -->
                            <div class="flex justify-between items-center p-3 bg-dark-secondary rounded-lg hover:ring-2 hover:ring-primary/50 transition-all duration-150">
                                <div>
                                    <p class="font-medium">#1024 - Mesa 7</p>
                                    <p class="text-xs text-gray-400">2x Camarão, 1x Água de Côco</p>
                                </div>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-900 text-yellow-300">Em Preparo</span>
                            </div>
                            <!-- Item do Pedido -->
                            <div class="flex justify-between items-center p-3 bg-dark-secondary rounded-lg hover:ring-2 hover:ring-primary/50 transition-all duration-150">
                                <div>
                                    <p class="font-medium">#1023 - Mesa 3</p>
                                    <p class="text-xs text-gray-400">4x Chopp, 1x Porção de Fritas</p>
                                </div>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-900 text-green-300">Entregue</span>
                            </div>
                            <!-- Item do Pedido -->
                            <div class="flex justify-between items-center p-3 bg-dark-secondary rounded-lg hover:ring-2 hover:ring-primary/50 transition-all duration-150">
                                <div>
                                    <p class="font-medium">#1025 - Mesa 1</p>
                                    <p class="text-xs text-gray-400">Fechamento de Conta</p>
                                </div>
                                <span class="px-3 py-1 text-xs font-semibold rounded-full bg-primary/70 text-dark-bg">Finalizar</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Coluna Secundária (1/3) -->
                <div class="lg:col-span-1">
                    <div class="bg-dark-card p-6 rounded-xl shadow-xl border border-gray-800">
                        <h3 class="text-xl font-semibold mb-4 text-primary border-b border-primary/30 pb-2">Ações Rápidas</h3>
                        <div class="space-y-4">
                            <button class="w-full flex items-center justify-center p-3 bg-primary text-dark-bg font-bold rounded-lg hover:bg-primary/90 transition-colors duration-200 shadow-lg shadow-primary/30">
                                <i class="fas fa-plus mr-3"></i> NOVO PEDIDO
                            </button>
                            <button class="w-full flex items-center justify-center p-3 bg-dark-secondary text-light-text border border-primary/50 font-medium rounded-lg hover:bg-primary/10 transition-colors duration-200">
                                <i class="fas fa-tools mr-3"></i> Abrir Mesa
                            </button>
                            <a href="{{route('logout')}}" class="w-full flex items-center justify-center p-3 bg-dark-secondary text-light-text border border-gray-600 font-medium rounded-lg hover:bg-gray-700 transition-colors duration-200">
                                <i class="fas fa-sign-out-alt mr-3"></i> Sair
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </div>