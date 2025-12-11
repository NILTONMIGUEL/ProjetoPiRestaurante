<div class="page-content">

    <div class="form-container" id="cadastro-funcionario">
        
        <h2><i class="fas fa-user-plus"></i> Novo Colaborador</h2>
        
        <form action="#" method="POST">
            
            <div class="form-group">
                <label for="nome"><i class="fas fa-user-circle"></i> Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite o nome do funcionário" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" placeholder="email@restaurante.com" required>
            </div>
            <div class="form-group">
                <label for="senha"><i class="fas fa-lock"></i> Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha temporária" required>
            </div>
            <div class="form-group">
                <label for="cargo"><i class="fas fa-briefcase"></i> Cargo</label>
                <select id="cargo" name="cargo" required>
                    <option value="" disabled selected>Selecione o cargo...</option>
                    <option value="1">1 - Administrador</option>
                    <option value="2">2 - Gerente</option>
                    <option value="3">3 - Garçom/Atendente</option>
                    <option value="4">4 - Cozinheiro</option>
                </select>
            </div>

            <div class="form-actions">
                <a href="#" onclick="alert('Cancelado');" class="btn-cancel">
                    <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                </a>
                <button type="submit" class="btn-submit">
                    <i class="fas fa-save"></i> Cadastrar Funcionário
                </button>
            </div>
        </form>
    </div>
</div>
