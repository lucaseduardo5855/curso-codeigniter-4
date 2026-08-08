<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CIGBurguer</title>
  <!--Favicon-->
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
  <!-- app.css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">

</head>

<body>


  <!--Navbar-->
  <nav class="container-fluid">
    <div class="row align-items-center">
      <div class="col p-3">
        <!--logo -->
        <a href="<?= site_url('/') ?>">
          <img src="<?= base_url('assets/images/logo.png') ?>" alt="CIGBurguer Logo">
        </a>
      </div>
      <div class="col p-3 pe-5 d-flex flex-row justify-contend-end">
        <a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a>
        <a class="nav-link ms-5" href="<?= site_url('/products') ?>">Produtos</a>
        <a class="nav-link ms-5" href="<?= site_url('/where_we_are') ?>">Onde estamos?</a>
      </div>
    </div>
  </nav>



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

  <!--social networks -->
  <footer class="container-fluid mt-5">
    <div class="row justify-content-center">
      <div class="col-6 d-flex flex-row justify-content-center">
        <div class="text-center mx-4">
          <a href="#">
            <img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook">
          </a>
        </div>
        <div class="text-center mx-4">
          <a href="#">
            <img src="<?= base_url('assets/images/instagram.png') ?>" alt="">
          </a>
        </div>
        <div class="text-center mx-4">
          <a href="#">
            <img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="whatsapp">
          </a>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col text-center">
        <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
      </div>
    </div>
  </footer>


  <!--Bootstrap JS-->
  <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>>