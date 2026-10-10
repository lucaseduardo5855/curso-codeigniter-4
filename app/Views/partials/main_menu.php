<aside class="main-menu">
    <p class="menu-group"><?= esc(session()->user['restaurant_name']) ?></p>
    <nav>
        <a href="<?= site_url('/') ?>" class="nav-link">
            <i class="fas fa-home"></i> Início
        </a>
    </nav>
</aside>
