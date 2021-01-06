<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1): ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href=<?php echo ROOT . "public/css/style.css" ?> />
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
        <div class="row">
            <div class="col-12 col-md-2 nopadding">
                <aside>
                    <p id="aside-title" class="pt-3 pl-3 pb-3">Admin</p>

                    <a href="index.php">
                        <i class="fas fa-list-ul pr-2"></i>
                        Elenco prodotti
                    </a>
                    <a href="new-product.php">
                        <i class="fas fa-plus pr-2"></i>
                        Inserimento prodotto
                    </a>
                    <a href="modify-product.php">
                        <i class="fas fa-edit pr-2"></i>
                        Modifica prodotto
                    </a>
                    <a href="customers.php">
                        <i class="fas fa-users pr-2"></i>
                        Elenco clienti
                    </a>
                    <a href="sales.php">
                        <i class="fas fa-euro-sign pr-2"></i>
                        Elenco vendite
                    </a>
                    <a href="notifications.php">
                        <i class="fas fa-envelope pr-2"></i>
                        Inserisci Notifica
                    </a>
                </aside>
            </div>
            <div class="col-12 col-md-10">
                <section>
                    <?php 
                    if (isset($templateParams["section"])) {
                        require($templateParams["section"]);
                    }
                    ?>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
<?php endif; ?>