<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="public/css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <title><?php echo $templateParams["titolo"]; ?></title>

  <?php if (isset($templateParams["js"])) : ?>
    <script src="<?php echo $templateParams["js"]; ?>"></script>
  <?php endif; ?>
</head>

<body>
  <div class="container-fluid">
    <header>
      <?php
      if (isset($templateParams["header"])) {
        require($templateParams["header"]);
      }else{
        require("header.php");
      }
      ?>
    </header>

    <main>
      <?php
      if (isset($templateParams["pagina"])) {
        require($templateParams["pagina"]);
      }
      ?>
    </main>

    <footer>
      <?php
      if (isset($templateParams["footer"])) {
        require($templateParams["footer"]);
      }else{
        require("footer.php");
      }
      ?>
    </footer>
  </div>
</body>

</html>