<?= $this->extend('layout/main') ?>
<?= $this->section('conteudo') ?>
    <div class="card">
        <h1><?= esc($conteudo['Titulo']); ?></h1>
        <p><?= esc($conteudo['Texto']); ?></p>
    </div>
<?= $this->endSection() ?>