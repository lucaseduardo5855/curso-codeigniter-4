<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
<!--Main -->
<section class="container product-box py-5">
  <div class="row ">
    <div class="col-5 text-center">
      <img class="img-fluid" src="<?= base_url('assets/images/room.jpg') ?>" alt="Restaurante">
    </div>
    <div class="col-6">
      <p class="where-we-are-title mb-0">CIGBurguer Paris</p>
      <p class="where-we-are-subtitle mt-2">Rua Eça de Queiroz, 123</p>
      <p class="mb-3">estamos localizados na cidade de São Paulo, no bairro da Vila Mariana e contamos com estacionamento próprio para nossos clientes.</p>

      <div class="d-flex align-items-center mb-3">
        <img class="img-fluid" src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Telefone">
        <p class="where-we-are-subtitle ms-3">
          <a class="nav-link" href="tel:+5511987654321">+55 11 98765-4321</a>
        </p>
      </div>

      <div class="d-flex text-align-items-center">
        <img class="img-fluid" src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email">
        <p class="where-we-are-subtitle ms-3">
          <a class="nav-link" href="mailto:contato@cigburguer.com">contato@cigburguer.com</a>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Mapa -->
<section class="container product-box py-5">
  <div class="row">
    <div class="col text-center">
      <img src="<?= base_url('assets/images/map.jpg') ?>" alt="Mapa">
    </div>
  </div>
</section>
<?= $this->endSection() ?>