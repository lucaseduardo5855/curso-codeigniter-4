<div class="col-xxl-6 col-12 ">
<div class="content-box shadow overflow-hidden">
    <div class="d-flex">

        <?php
        $imagePath = FCPATH . 'assets/images/products/' . $product->image;
        $image = base_url('assets/images/products/' . $product->image);
        if (! is_file($imagePath)) {
            $image = base_url('assets/images/products/no_image.png');
        }
        ?>

        <div>
            <img src="<?= $image ?>" class="img-fluid" alt="<?= base_url('/assets/images/products' . $product->image) ?>">
        </div>
        <div class="ms-4 w-100">
            <h3 class="m-0"><strong><?= $product->name ?></strong></h3>
            <p class="m-0"><?= $product->description ?></p>
            <p class="m-0 opacity-50"><?= $product->category ?></p>
            <?php if ($product->promotion == 0) : ?>
                <h3 class="m-0 text-primary"><strong><?= normalize_price($product->price) . '$' ?></strong></h3>
            <?php else : ?>
            <h3 class="m-0"><?= normalize_price($product->price) . '$'?>/<span class="text-primary"><strong><?= normalize_price(calculate_promotion($product->price, $product->promotion)) . '$' ?></strong></span></h3>
            <?php endif; ?>


            <div class="my-2">
               <!--Promotion -->
            <?php if ($product->promotion > 0) : ?>
                <span class="badge bg-success">(Com promoção de <?= intval($product->promotion) ?> %)</span>
            <?php endif; ?>

            <!--Stock -->
            <span class="badge bg-dark">
                <?= $product->stock ?>
                <?= $product->stock == 1 ? 'unidade' : 'unidades' ?>
            </span>
            <?php if ($product->stock <= $product->stock_min_limit) : ?>
                <span class="badge bg-danger">Estoque reduzido</span>
            <?php endif; ?>
            </div>

            <!--Availability -->
            <?php if (!$product->availability) :?>
                <span class="badge bg-warning text-dark">Produto indisponível</span>
            <?php endif; ?>
            
            <div class="text-end align-items-bottom">
                <a href="<?= base_url('/products/edit/') . Encrypt($product->id) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-pen-to-square me-2"></i>Editar</a>
                <a href="<?= base_url('/products/stock/') . Encrypt($product->id) ?>"class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-solid fa-cubes-stacked me-2"></i>Stock</a>
                <a href="<?= base_url('/products/delete/') . Encrypt($product->id) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-trash-can me-2"></i>Eliminar</a>
            </div>
        </div>
    </div>
</div>
</div>