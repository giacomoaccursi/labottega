  <div id="home-image" class="row align-items-center hover-shadow">

      <div class="col-md-12 text-center">
          <a id="compra-ora" class="btn" href="prodotti.php"><span>COMPRA ORA</span></a>
      </div>

  </div>


  <h2 class="text-center py-5">BEST PRODUCTS</h2>


  <div class="row justify-content-center">
      <div class="col-lg-2"></div>
      <div class="row  col-12 col-lg-8">
          <?php foreach ($templateParams["prodotti"] as $prodotto) : ?>
              <div class="card text-center col-6 col-md-3 nopadding">
                  <a href="prodotto.php?id=<?php echo $prodotto["id"]; ?>"><img id="card-img" src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" class="card-img-top" alt="" /></a>
                  <div class="card-body nopadding">
                      <h5 class="card-title mt-1"><?php echo $prodotto["nome"]; ?></h5>
                      <h6><?php echo $prodotto["marca"]; ?></h6>

                      <form class="addToCartForm">
                          <p class="card-text nopadding text-center">
                              <?php echo $prodotto["prezzo"]; ?>€
                          </p>
                          <button class="addToCartButton" class="btn my-2">ACQUISTA ORA</button>
                          <a href="wishList.php" class="icon-link pr-md-2 text-dark "><i class="far fa-heart fa-lg"></i></a>
                          <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                      </form>
                  </div>
              </div>


          <?php endforeach; ?>
      </div>
      <div class="col-lg-2"></div>
  </div>