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


  
    <!--Main content-->
    <section class="container ">
        <div class="col">

          <!--Burguer 01 -->
          <div class="row mb-5 product-box">
              <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burguer 1">
              </div>
              <div class="col-7 p-5">
                  <h1 class="mb-3 product-text-color">Hamburguer 01</h1>
                  <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente unde cumque iusto excepturi! Sed autem quasi nulla itaque esse iusto voluptate</p>
                  <h2 class="mt-3 product-text-color">R$15,00</h2>
              </div>
          </div>

            <!--Burguer 02 -->
          <div class="row mb-5 product-box">
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Hamburguer 02</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente unde cumque iusto excepturi! Sed autem quasi nulla itaque esse iusto voluptate</p>
                <h2 class="mt-3 product-text-color">R$20,00</h2>
            </div>
              <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burguer 2">
              </div>
          </div>

            <!--Burguer 03 -->
          <div class="row mb-5 product-box">
              <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burguer 3">
              </div>
              <div class="col-7 p-5">
                  <h1 class="mb-3 product-text-color">Hamburguer 03</h1>
                  <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente unde cumque iusto excepturi! Sed autem quasi nulla itaque esse iusto voluptate</p>
                  <h2 class="mt-3 product-text-color">R$30,00</h2>
              </div>
          </div>

            <!--Burguer 04 -->
          <div class="row mb-5 product-box">
            <div class="col-7 p-5">
                <h1 class="mb-3 product-text-color">Hamburguer 04</h1>
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente unde cumque iusto excepturi! Sed autem quasi nulla itaque esse iusto voluptate</p>
                <h2 class="mt-3 product-text-color">R$54,00</h2>
            </div>
              <div class="col-5 text-center">
                <img class="img-fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burguer 4">
              </div>
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