<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-secondary">
  
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-8 text-center card p-5 shadow">
        <h1>Nome do cliente escolhido: <span class="text-primary"><?= $nomes_clientes[$id] ?></span></h1>
        <hr>
        <h3 class="text-success"><?= $show_message ? 'Mensagem disponível' : '' ?></h3> 

      <?php if($show_message) : ?>
        <!-- <h3 class="text-success"><?= 'Mensagem disponível' ?></h3> -->
      <?php endif; ?>

      </div>
    </div>
  </div>
</body>
</html>