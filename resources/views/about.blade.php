@extends('layouts.app')
@section('content');
     <section id="home" class="hero">
            <div class="hero-content">
                <h1>Excelência em Sabor. Sofisticação em Cada Detalhe.</h1>
                <p>Descubra o melhor da gastronomia em um ambiente inesquecível.</p>
                <a href="#menu" class="btn-cta">Ver Cardápio</a>
            </div>
        </section>

        <section id="menu" class="section menu-section">
            <h2>Nosso Menu Especial</h2>
            <div class="carousel-container">
                <div class="carousel-track" id="carousel-track">
                    <div class="menu-card" id="menu-card"> 
                        <img src="{{asset('images/comida01.jpg')}}" alt="Prato Salmão Grelhado">
                        <h3>Salmão Grelhado</h3>
                        <p>Salmão fresco com molho de maracujá e arroz selvagem.</p>
                        <span class="price">R$ 75,00</span>
                    </div>
                    <div class="menu-card" id="menu-card">
                        <img src="{{asset('images/comida02.jpg')}}" alt="Prato Filé Mignon">
                        <h3>Filé Mignon Clássico</h3>
                        <p>Corte nobre ao molho de vinho tinto e purê trufado.</p>
                        <span class="price">R$ 89,00</span>
                    </div>
                    <div class="menu-card" id="menu-card">
                        <img src="{{asset('images/comida03.jpg')}}" alt="Prato Massa Artesanal">
                        <h3>Massa Artesanal</h3>
                        <p>Ravioli recheado com ricota e espinafre, ao molho pesto.</p>
                        <span class="price">R$ 62,00</span>
                    </div>
                    <div class="menu-card" id="menu-card">
                        <img src="{{asset('images/comida05.jpg')}}" alt="Sobremesa Tiramisu">
                        <h3>Tiramisu Cremoso</h3>
                        <p>Clássica sobremesa italiana com um toque especial.</p>
                        <span class="price">R$ 35,00</span>
                    </div>
                    <div class="menu-card" id="menu-card">
                        <img src="{{asset('images/comida04.jpg')}}" alt="Sobremesa Tiramisu">
                        <h3>Carne Suína Cremosa</h3>
                        <p>Clássica sobremesa italiana com um toque especial.</p>
                        <span class="price">R$ 35,00</span>
                    </div>
                    <div class="menu-card" id="menu-card">
                    <img src="{{asset('images/img7.jpg')}} "alt="Sobremesa Tiramisu">
                        <h3>Carne Suína Defumada</h3>
                        <p>Clássica sobremesa italiana com um toque especial.</p>
                        <span class="price">R$ 35,00</span>
                    </div>
                    <div class="menu-card" id="menu-card">
                        <img src="{{asset('images/comida06.jpg')}}" alt="Sobremesa Tiramisu">
                        <h3>Frango Frito Empanado</h3>
                        <p>Clássica sobremesa italiana com um toque especial.</p>
                        <span class="price">R$ 35,00</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="galeria" class="section galeria-section">
            <h2>Ambiente e Experiências</h2>
            <div class="galeria-grid">
                <div class="galeria-item"><img src="{{ asset('images/interior.jpeg') }}" alt="Interior do restaurante"/></div>
                <div class="galeria-item"><img src="{{ asset('images/img4.jpg') }}" alt="Mesa posta elegante"></div>
                <div class="galeria-item"><img src="{{asset('images/servindo.jpeg') }}" alt="Prato sendo servido"></div>
                <div class="galeria-item"><img src="{{ asset('images/drink.jpeg') }}" alt="Bar e Drinks"></div>
                <div class="galeria-item"><img src="{{ asset('images/img5.jpg')}}" alt="Vista Externa"></div>
                <div class="galeria-item"><img src="{{ asset('images/img6.jpg')}}" alt="Detalhe da decoração"></div>
            </div>
        </section>

        <section id="feedback" class="section feedback-section">
            <h2>O que nossos clientes dizem</h2>
            <div class="feedback-container">
                <div class="feedback-card">
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        
                    </div>
                    <p>"Uma experiência gastronômica impecável! O ambiente é lindo e o Filé Mignon estava divino."</p>
                    <span class="client-name">- Ana L.</span>
                </div>
                <div class="feedback-card">
                    <div class="rating">
                         <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"Serviço atencioso e pratos muito bem elaborados. O Tiramisu é o melhor da cidade."</p>
                    <span class="client-name">- Bruno M.</span>
                </div>
                </div>
        </section>
@endsection
