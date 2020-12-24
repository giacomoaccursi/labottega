  <div id="home-image" class="container-fluid hover-shadow">
      <!-- Row -->
      <div class="row align-items-center">
          <div class="col-md-12 text-center">
              <a id="compra-ora" class="btn" href="prodotti.php"><span>COMPRA ORA</span></a>
          </div>
      </div>
      <!-- Row -->
  </div>


  <h2 class="text-center py-5">BEST PRODUCTS</h2>


  <div class="row justify-content-center">
      <div class="col-lg-2"></div>
      <div class="row  col-12 col-lg-8">
          <?php foreach ($templateParams["prodotti"] as $prodotto) : ?>
              <div class="card text-center col-6 col-md-3 nopadding">
                  <img  id="card-img" src="<?php echo IMG_ROOT.$prodotto["immagine"]; ?>" class="card-img-top" alt="" />
                  <div class="card-body nopadding">
                      <h5 class="card-title mt-1"><?php echo $prodotto["nome"]; ?></h5>
                      <h6><?php echo $prodotto["marca"]; ?></h6>
                      <section id="buy-section">
                          <p class="card-text nopadding text-center">
                              <?php echo $prodotto["prezzo"]; ?>€
                          </p>
                          <a href="#!" id="buy-button" class="btn  my-2">ACQUISTA ORA</a>
                          <a href="wishList.php" class="icon-link pr-md-2 text-dark "><i class="far fa-heart fa-lg"></i></a>
                      </section>

                  </div>
              </div>
          <?php endforeach; ?>
      </div>
      <div class="col-lg-2"></div>
  </div>