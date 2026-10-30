<nav class="navbar">
    <div class="nav-brand">Sistema</div>
    <div class="nav-links">
        <a href="<?= site_url('home') ?>" class="nav-link <?= url_is('home') || url_is('/') ? 'active' : '' ?>">Home</a>
        <a href="<?= site_url('contato') ?>" class="nav-link <?= url_is('contato') ? 'active' : '' ?>">Contato</a>
        <a href="<?= site_url('conteudos') ?>" class="nav-link <?= url_is('conteudos*') ? 'active' : '' ?>">Gerenciar Conteúdos</a>
    </div>
</nav>