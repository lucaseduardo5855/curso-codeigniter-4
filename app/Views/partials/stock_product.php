<div class="col">
  <div class="row content-box">

    <div class="col-lg-9 col-12 d-flex align-items-center">
      <div class="d-flex align-items-center">
        <div class="me-3">
          <?php $imagePath = FCPATH . 'assets/images/products/' . $product->image; ?>
          <?php if (!file_exists($imagePath)) : ?>
            <img src="<?= base_url('assets/images/products/no_image.png') ?>" class="img-fluid stock-image" alt="sem imagem">
          <?php else : ?>
            <img src="<?= base_url('assets/images/products/' . $product->image) ?>" class="img-fluid stock-image" alt="<?= esc($product->image) ?>">
          <?php endif; ?>
        </div>

        <div>
          <h4 class="mb-0"><strong><?= $product->name ?></strong></h4>
          <p class="mb-0"><?= $product->description ?></p>
          <?php if (!$product->availability) : ?>
            <span class="badge bg-danger">Indisponível</span>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-12 text-end align-self-center">
      <h5 class="mb-1">Stock Atual</h5>
      <h3 class="<?= $product->stock <= $product->stock_min_limit ? 'text-danger' : '' ?>"><strong><?= $product->stock ?></strong></h3>
    </div>

    <div class="col-12 text-end">
      <a href="#" class="btn btn-sm btn-outline-success px-3 m-1"><i class="fa-regular fa-square-plus me-2"></i>Adicionar estoque</a>
      <a href="#" class="btn btn-sm btn-outline-danger px-3 m-1"><i class="fa-regular fa-square-minus me-2"></i>Excluir estoque</a>
      <a href="#" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-solid fa-right-left me-2"></i>Entradas e saidas</a>
    </div>
  </div>
</div>