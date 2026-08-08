<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CIGBurguer</title>
  <!--Favicon-->
  <link rel="shortcut icon" href="<?=  base_url('assets/images/logo.png') ?>">
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
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="CIGBurguer Logo">
      </div>
      <div class="col p-3 pe-5 d-flex flex-row justify-contend-end">
        <a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a>
        <a class="nav-link ms-5" href="<?= site_url('/products') ?>">Produtos</a>
        <a class="nav-link ms-5" href="<?= site_url('/where_we_are') ?>">Onde estamos?</a>
      </div>
    </div>
  </nav>


  
    <!--main -->
    <section class="container-fluid bg-color-02 mt-4">
      <div class="row">
        <div class="col text-center p-5">
          <div class="mb-5">
            <img class="img-fluid" src="<?= base_url('assets/images/main_burger_01.png') ?>" alt="hamburguer 01">
          </div>
          <div class="text-center">
            <h3 class="mb-5">Deliciosos e com grandes descontos!</h3>
            <a class="btn-products" href="<?= site_url('products') ?>">Produtos</a>
          </div>
          
        </div>
        
        <div class="col text-center p-5">
          <img class="img-fluid" src="<?= base_url('assets/images/main_burger_02.png') ?>" alt="hamburguer 02 desconto">
        </div>
      </div>
    </section>



  <!--social networks -->
    <footer class="container-fluid mt-5">
    <div class="row justify-content-center">
      <div class="col-6 d-flex flex-row justify-content-center">
        <div class="text-center mx-4">
        <a href="#">
          <img src="<?=  base_url('assets/images/facebook.png') ?>" alt="Facebook">
        </a>
        </div>
        <div class="text-center mx-4">
          <a href="#">
            <img src="<?=  base_url('assets/images/instagram.png') ?>" alt="">
          </a>
        </div>
        <div class="text-center mx-4">
          <a href="#">
            <img src="<?=  base_url('assets/images/whatsapp.png') ?>" alt="whatsapp">
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
</html>