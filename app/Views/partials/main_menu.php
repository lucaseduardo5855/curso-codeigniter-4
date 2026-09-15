<aside class="main-menu">
  <p class="menu-group mb-3"><?= session()->user['restaurant_name'] ?></p>
  <nav class="navbar-nav">
    <a href="<?= site_url('/') ?>" class="nav-link">
      <i class="fas fa-home"></i> Início
    </a>
    <a href="<?= site_url('/products') ?>" class="nav-link">
      <i class="fas fa-burger"></i> Produtos
    </a>
    <!-- <a href="#" class="nav-link">
      <i class="fas fa-layer-group"></i> Stock Disponível
    </a>
    <a href="#" class="nav-link">
      <i class="fas fa-chart-column"></i> Dados Estatísticos
    </a> -->
  </nav>
</aside>
