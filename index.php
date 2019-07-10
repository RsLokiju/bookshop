<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Benoit DAUBA">

  <title>BookShop - Accueil</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- css pour la home page -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>


  <?php require_once('template/header.php'); ?>

    <!-- Contenu principal de la Page -->
    <main class="container bg-light">
      <div class="row">
            <?php require_once('template/aside.php'); ?>
            <?php require_once('template/home.php'); ?>
      </div>
    </main>

    <?php require_once('template/footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
