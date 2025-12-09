 <div class="login-container">
        <div class="login-card animated-card">
            
            <div class="logo">Sabor & Charme</div>
            <h2>Acesso Restrito - Admin</h2>

            <form action="#" method="POST" class="login-form" wire:submit='login'>
                @csrf
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" id="email" placeholder="email" wire:model='email' required>
                </div>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Senha" wire:model='password' required>
                </div>

                <button type="submit" class="btn-login">Entrar</button>

            </form>

            <a href="#" class="forgot-password">Esqueceu sua senha?</a>
            {{-- me retornando os erros do validate--}}
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            {{-- me retornando o erro do flash --}}
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif

        </div>
    </div>
