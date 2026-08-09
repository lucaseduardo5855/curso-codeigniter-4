  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-8 text-center card p-5 shadow">
        <h1 class="text-primary">Página Dois</h1>
        <hr>
        <h3> Nome: <?= ($nome ?? 'Nome não informado') . ' ' . ($apelido ?? 'Apelido não informado') ?></h3>
        <h5>Idade: <?= ($idade ?? 0) ?> anos.</h5>
      </div>
    </div>
  </div>