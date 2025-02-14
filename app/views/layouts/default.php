<!DOCTYPE html>
<html>
  <head>
    <title><?= APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/stylesheets/style.css">
  </head>
  <body>
    <?php require_once '../app/views/partials/header.php'; ?>
    
    <main>
      <?php require_once $content; ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
