<div class="page-content">

    <div class="form-container">
        
        <h2><i class="fas fa-user-edit"></i> Editar Funcionário</h2>
        
        <form action="#" method="POST">
            
            <div class="form-group">
                <label for="nome"><i class="fas fa-user-circle"></i> Nome Completo</label>
                <input type="text" id="nome" name="nome" value="Mariana Mendes" required>
            </div>

            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" value="mariana@saborcharme.com" required>
            </div>

            <div class="form-group">
                <label for="senha"><i class="fas fa-lock"></i> Nova Senha (Opcional)</label>
                <input type="password" id="senha" name="senha" placeholder="Deixe vazio para manter a senha atual">
            </div>

            <div class="form-group">
                <label for="cargo"><i class="fas fa-briefcase"></i> Cargo</label>
                <select id="cargo" name="cargo" required>
                    <option value="" disabled>Selecione o cargo...</option>
                    <option value="1">1 - Administrador</option>
                    <option value="2">2 - Gerente</option>
                    <option value="3" selected>3 - Garçom/Atendente</option> 
                    <option value="4">4 - Cozinheiro</option>
                </select>
            </div>

            <div class="form-actions">
                
                <a href="#" onclick="alert('Edição Cancelada. Retornando à lista.');" class="btn-cancel">
                    <i class="fas fa-times-circle">&nbsp&nbsp</i> Cancelar
                </a>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-sync-alt"></i> Salvar Alterações
                </button>
                
            </div>
        </form>
    </div>

</div>