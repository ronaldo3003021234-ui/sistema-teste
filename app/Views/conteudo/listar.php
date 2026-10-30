<?= $this->extend('layout/main') ?>
<?= $this->section('conteudo') ?>
    <h1>Gerenciamento de Conteúdos</h1>

    <?php if ($mensagem = session()->getFlashdata('mensagem')): ?>
        <div class="alert-success"><?= esc($mensagem) ?></div>
    <?php endif; ?>

    <?php if (empty($conteudos)): ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php else: ?>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conteudos as $item): ?>
                <tr>
                    <td><?= esc($item['Id']) ?></td>
                    <td><strong><?= esc($item['Titulo']) ?></strong></td>
                    <td><?= nl2br(esc(substr($item['Texto'], 0, 80))) ?>...</td>
                    <td>
                        <a href="<?= site_url('conteudos/editar/' . $item['Id']) ?>" class="btn-edit">Editar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
<?= $this->endSection() ?>