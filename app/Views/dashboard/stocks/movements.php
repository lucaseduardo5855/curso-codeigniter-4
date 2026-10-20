<?= $this->extend('layouts/layout_main') ?>
<?= $this->section('content') ?>
<?= $this->include('partials/page_title') ?>

<div class="container-fluid">
  <div class="row">
    <div class="col content-box p-5">

      <div class="d-flex align-items-center">
        <div class="me-3">
          <?php if (!file_exists('assets/images/products/' . $product->image)): ?>
              <img src="<?= base_url('assets/images/products/no_image.png') ?>" class="img-fluid stock-image" alt="Sem imagem">
          <?php else: ?>
               <img src="<?= base_url('assets/images/products/' . $product->image) ?>" class="img-fluid stock-image" alt="<?= $product->image ?>">
          <?php endif; ?>
        </div>

        <!--Name and description-->
            <div class="flex-fill me-3">
              <h4 class="mb-0"><strong><?= $product->name ?></strong></h4>
              <p class="mb-0"><?= $product->description ?></p>
              <?php if (!$product->availability): ?>
                <span class="badge bg-danger">Indisponível</span>
              <?php endif; ?>
            </div>

         <!--atual stock-->
         <div class="text-end">
          <h5>Stock Atual</h5>
          <h3 class="<?= $product->stock <= $product->stock_min_limit ? 'text-danger' : '' ?>"><strong><?= $product->stock ?></strong></h3>
         </div>
      </div>

      <hr>
      
    </div>
  </div>
</div>

<?= $this->endSection() ?>