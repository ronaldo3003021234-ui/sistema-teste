<?= $this->extend('layout/main') ?>
<?= $this->section('conteudo') ?>
    <div class="card form-card">
        <h1>Editar Conteúdo #<?= esc($conteudo['Id']) ?></h1>

        <?php if (!empty($erros)): ?>
            <div class="alert-danger">
                <p><strong>Verifique os campos abaixo:</strong></p>
                <ul>
                    <?php foreach ($erros as $erro): ?>
                        <li><?= esc($erro) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= site_url('conteudos/atualizar/' . $conteudo['Id']) ?>">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="Titulo">Título</label>
                <input type="text" id="Titulo" name="Titulo" maxlength="255" value="<?= esc($conteudo['Titulo'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="Texto">Texto</label>
                <textarea id="Texto" name="Texto" rows="8" required><?= esc($conteudo['Texto'] ?? '') ?></textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">Salvar Alterações</button>
                <a href="<?= site_url('conteudos') ?>" class="btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>