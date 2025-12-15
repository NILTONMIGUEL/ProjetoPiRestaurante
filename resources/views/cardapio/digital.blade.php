@extends('layouts.cardapioDigital')
@section('title','-MeuCardapioDigital')
@section('content')
    <div class="nav-controls">
                    
            <button class="menu-toggle-btn" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="header-total-display">
                Gasto: <span id="headerTotal">R$: 00,00</span>
            </div>

            <button class="cart-toggle-btn" id="toggleCart">
                <i class="fas fa-shopping-cart"></i> <span class="badge" id="cartCount">0</span>
            </button>
        </div>
                    
                
        </nav>
            
            <ul class="category-links-overlay" id="categoryOverlay">
                <li><a href="#entradas" class="anchor-link-mobile" style="color:orangered;text-decoration:none;">Entradas</a></li>
                <li><a href="#principais" class="anchor-link-mobile" style="color:orangered;text-decoration:none">Pratos Principais</a></li>
                <li><a href="#sobremesas" class="anchor-link-mobile" style="color:orangered;text-decoration:none">Sobremesas</a></li>
                <li><a href="#bebidas" class="anchor-link-mobile" style="color:orangered;text-decoration:none">Bebidas</a></li>
            </ul>
        <div class="main-content">
            @livewire('entradas')
            @livewire('pratos-principais')
            @livewire('sobremesa')
            @livewire('bebida')
            @livewire('carrinho')
@endsection