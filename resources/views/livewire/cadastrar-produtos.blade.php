<div class="page-content">

    <div class="form-container">
        
        <h2><i class="fas fa-drumstick-bite"></i> Cadastrar Novo Produto</h2>
        
        <form action="#" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label><i class="fas fa-camera"></i> Imagem do Produto</label>
                <div class="image-upload-wrapper">
                    <div class="image-preview" id="imagePreview">
                        <i class="fas fa-plus-circle"></i>
                        <img src="" alt="Prévia da Imagem" id="previewImage">
                    </div>
                    
                    <label for="imageUpload" class="input-file-custom">
                        Escolher Imagem
                    </label>
                    <input type="file" id="imageUpload" name="imagem" accept="image/*" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="nome"><i class="fas fa-tag"></i> Nome do Produto</label>
                <input type="text" id="nome" name="nome" placeholder="Ex: Cheesecake de Frutas Vermelhas" required>
            </div>

            <div class="form-group">
                <label for="descricao"><i class="fas fa-align-left"></i> Descrição</label>
                <textarea id="descricao" name="descricao" placeholder="Descreva os ingredientes e diferenciais do produto." required></textarea>
            </div>

            <div class="form-group">
                <label for="preco"><i class="fas fa-dollar-sign"></i> Preço (R$)</label>
                <input type="number" step="0.01" min="0" id="preco" name="preco" placeholder="Ex: 45.90" required>
            </div>
            

            <div class="form-actions">
                
                <a href="#" onclick="alert('Cadastro Cancelado.');" class="btn-cancel">
                    <i class="fas fa-times-circle"></i> Cancelar
                </a>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-save"></i> Cadastrar Produto
                </button>
                
            </div>
        </form>
    </div>

</div>