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

  <!--Navbar -->
  <?= $this->include('layouts/nav') ?>

  <!--Content -->
  <?= $this->renderSection('content') ?>

  <!--Footer -->
  <?= $this->include('layouts/footer') ?>

  <!--Bootstrap JS-->
  <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>