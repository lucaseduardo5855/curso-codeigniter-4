<aside class="main-menu">
    <p class="menu-group"><?= esc(session()->user['restaurant_name']) ?></p>
    <nav>
        <a href="<?= site_url('products') ?>" class="nav-link">
            <i class="fas fa-burger me-2"></i> Produtos
        </a>
        <a href="<?= site_url('stocks') ?>" class="nav-link">
            <i class="fas fa-layer-group me-2"></i> Stocks
        </a>
    </nav>
</aside>
