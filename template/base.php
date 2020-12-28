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

  <title><?php echo $templateParams["titolo"]; ?></title>

  <?php if (isset($templateParams["js"])) : ?>
    <script src="<?php echo $templateParams["js"]; ?>"></script>
  <?php endif; ?>
</head>

<body>
  <div class="container-fluid">
    <header>
      <div class="row align-items-center">
        <div class="col-md-3"></div>
        <div class="col-8 col-md-6">
          <div class="row justify-content-md-center">
            <img id="logo" src="public/img/logo.png" alt="" />
            <h1 class="pt-4"><a href="index.php" id="title-link">LaBottega</a></h1>
          </div>
        </div>
        <div id="icon-container" class="text-right text-md-center col-4 pt-4 col-md-3 ">
          <a href="wishList.php" class="icon-link pr-md-2"><i class="fas fa-heart fa-lg"></i></a>
          <a href="carrello.php" class="icon-link pr-md-2"><i class="fas fa-shopping-cart fa-lg"></i></a>
          <a href="login.php" class="icon-link"><i class="fas fa-user-circle fa-lg"></i></a>
        </div>
      </div>

      <!-- 
                NAVBAR
            -->
      <div class="row mt-3 nopadding">
        <div class="col-12 col-md-12 p-0">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <nav class="navbar navbar-expand-md navbar-fixed-top bg-white navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav text-center col-md-12 nopadding">
                    <?php foreach ($templateParams["categorie"] as $categoria) : ?>
                      <li class="nav-item dropdown col-md-3">
                        <a class="nav-link" href="prodotti.php?cat=<?php echo $categoria["id"]; ?>"><?php echo $categoria["nome"]; ?></a>
                        <ul class="dropdown-menu text-center col-12">
                          <?php foreach ($templateParams["sottoCategorie"] as $subCategoria) :
                            if ($subCategoria["idCategoria"] == $categoria["id"]) : ?>
                              <li>
                                <a class="dropdown-item" href="prodotti.php?sub=<?php echo $subCategoria["id"]; ?>"><?php echo $subCategoria["nome"]; ?></a>
                              </li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ul>
                      </li>

                    <?php endforeach; ?>
                    <li class="nav-item col-md-3">
                      <a class="btn nav-link offerte" href="prodotti.php?sales=1">OFFERTE</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
      </div>

      <!-- 
                SEARCH FORM
            -->
      <div class="row my-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form class="form-inline justify-content-center" action="prodotti.php" method="GET">
            <input class="form-control col-9 col-md-7" name="cerca" type="text" placeholder="Cosa stai cercando ?" />
            <button class="btn btn-search" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </header>



    <main>
      <?php
      if (isset($templateParams["pagina"])) {
        require($templateParams["pagina"]);
      }
      ?>
    </main>



    <footer>
      <div class="row footer py-3">
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-sm-9 col-md-8">
          <div class="row nopadding">
            <div class="col-12 newsletter-paragraph col-md-6 pt-2 text-center">
              <h2>ISCRIVITI ALLA NOSTRA NEWSLETTER!</h2>
              <p>
                Registrati subito per scoprire in anteprima le ultimissime
                offerte, promozioni ed i nuovi prodotti!
              </p>
            </div>
            <div class="col-12 col-md-6 text-center pt-4">
              <form class="form-inline" action="/action_page.php">
                <div class="col-1 col-md-1"></div>
                <input class="form-control col-7 col-md-6" type="text" placeholder="Inserisci qui il tuo indirizzo email" />
                <button class="btn btn-search" type="submit">OK</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-1 col-md-2"></div>
      </div>

      <!--
                footer accordio
            -->

      <div id="accordion-footer" class="row text-center">
        <div class="col-sm-6 col-md-3 nopadding">
          <div id="accordion" role="tablist" aria-multiselectable="true" class="widget">
            <div role="tab" id="headingOne">
              <div class="card-header py-3 border-0 text-uppercase bg-transparent">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="accordion-title">
                  Supporto e informazioni
                </a>
              </div>
            </div>
            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-block">
                <ul class="widget-list list-unstyled p-0">
                  <li>Create Websites</li>
                  <li>Secure Cloud Hosting</li>
                  <li>Engage Your Audience</li>
                  <li>Website Support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 nopadding">
          <div id="accordion" role="tablist" aria-multiselectable="true" class="widget">
            <div role="tab" id="headingTwo">
              <div class="card-header py-3 border-0 text-uppercase bg-transparent">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="accordion-title">
                  Contattaci
                </a>
              </div>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                <ul class="widget-list list-unstyled">
                  <li>About</li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 nopadding">
          <div id="accordion" role="tablist" aria-multiselectable="true" class="widget">
            <div role="tab" id="headingThree">
              <div class="card-header py-3 border-0 text-uppercase bg-transparent">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="accordion-title">
                  Chi siamo
                </a>
              </div>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-block">
                <ul class="widget-list list-unstyled p-0">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 nopadding">
          <div id="accordion" role="tablist" aria-multiselectable="true" class="widget">
            <div role="tab" id="headingFour">
              <div class="card-header py-3 border-0 text-uppercase bg-transparent">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="accordion-title">
                  Seguici
                </a>
              </div>
            </div>
            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="card-block">
                <ul class="widget-list list-unstyled p-0">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="copyright" class="row">
        <p class="col-12 text-center">© 2020 Copyright</p>
      </div>
    </footer>
  </div>
</body>

</html>