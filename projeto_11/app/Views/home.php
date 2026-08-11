<?= $this->extend('layouts/default_layout') ?>

<!-- Section -->
<?= $this->section('conteudo') ?>
  <h1>Welcome to the Home Page</h1>
  <p>This is the content for the home page.</p>
<?= $this->endSection() ?>



<!-- Section 2 -->
 <?= $this->section('outra') ?>
  <h1>Other Content</h1>
 <?= $this->endSection() ?>