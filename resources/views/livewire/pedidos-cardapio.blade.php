
            
<div>
    <!-- Seção de Ações Principais (Mesas e Pedidos Recentes) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- Coluna Principal (2/3) -->
        <div class="lg:col-span-2">
            <div class="bg-dark-card p-6 rounded-xl shadow-xl border border-gray-800">
                <h3 class="text-xl font-semibold mb-4 text-primary border-b border-primary/30 pb-2">Pedidos Recentes</h3>
                
                <!-- Lista de Pedidos -->
                <div class="space-y-3">
                    <!-- Item do Pedido -->
                    @foreach($produtos as $produto)
                        <div class="flex justify-between items-center p-3 bg-dark-secondary rounded-lg hover:ring-2 hover:ring-primary/50 transition-all duration-150">
                            <div>
                                <p class="font-medium">#{{$produto->id}}</p>
                                <p class="text-xs text-gray-400">{{$produto->quantidade}} x {{$produto->produto->nome}} </p>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-900 text-yellow-300">Em Preparo</span>
                        </div>

                    @endforeach
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