<header class="top-bar d-flex justify-content-between align-items-center">
    <a href="<?= site_url('/') ?>" aria-label="Página inicial">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo CigBurguer" width="48">
    </a>

    <div class="d-flex align-items-center">
        <i class="fa-solid fa-user me-2"></i>
        <span><?= esc(session()->user['name']) ?></span>
        <div class="dropdown">
            <button class="btn btn-link top-bar-menu" type="button" data-bs-toggle="dropdown" aria-label="Menu do usuário">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Sair</a></li>
            </ul>
        </div>
    </div>
</header>
