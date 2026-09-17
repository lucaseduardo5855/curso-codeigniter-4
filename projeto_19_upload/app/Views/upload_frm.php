<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
</head>
<body>

  <?= form_open_multipart('upload_submit') ?>
    <input type="file" name="file_upload" id="">
    <input type="submit" value="Enviar">
  <?= form_close() ?>
  
</body>
</html>
