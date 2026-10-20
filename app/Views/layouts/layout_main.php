<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CigBurguer Backoffice</title>
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/libs/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/libs/fontawesome/all.min.css') ?>">

    <!--Flatpicker-->
    <link rel="stylesheet" href="<?= base_url('/assets/libs/flatpickr/flatpickr.min.css') ?>">

    <?php if (!empty($datatables)): ?>
        <script src="<?= base_url('assets/libs/datatables/jquery/jquery.min.js') ?>"></script>
        <link rel="stylesheet" href="<?= base_url('assets/libs/datatables/datatables.min.css') ?>">
    <?php endif; ?>

    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
</head>
<body>
    <?= $this->include('partials/top_bar.php') ?>

    <section class="main-layout d-flex">
        <?= $this->include('partials/main_menu.php') ?>
        <main class="content p-4 flex-fill">
            <?= $this->renderSection('content') ?>
        </main>
    </section>

    <?= $this->include('partials/footer.php') ?>
    <script src="<?= base_url('assets/libs/bootstrap/bootstrap.bundle.min.js') ?>"></script>

    <!--Flatpickr-->
    <script src="<?= base_url('/assets/libs/flatpickr/flatpickr.min.js') ?>"></script>

    <?php if (!empty($datatables)): ?>
        <script src="<?= base_url('assets/libs/datatables/datatables.min.js') ?>"></script>
    <?php endif; ?>

</body>
</html>
