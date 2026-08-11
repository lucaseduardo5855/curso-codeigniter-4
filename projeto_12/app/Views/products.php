<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>