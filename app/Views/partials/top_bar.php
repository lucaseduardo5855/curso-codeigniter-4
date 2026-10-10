<header class="top-bar d-flex justify-content-between align-items-center">
    <a href="<?= site_url('/') ?>" aria-label="Página inicial">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo CigBurguer" width="48">
    </a>

    <div>
        <i class="fa-solid fa-user me-2"></i><?= esc(session()->user['name']) ?>
        <i class="fa-solid fa-ellipsis-vertical mx-2"></i>
        <a href="<?= site_url('auth/logout') ?>">Sair</a>
    </div>
</header>
