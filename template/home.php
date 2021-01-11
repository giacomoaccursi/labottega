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
              <!-- Card -->
              <div class="card col-6 col-md-3 rounded-0 nopadding">
                  <a href="prodotto.php?id=<?php echo $prodotto["id"]; ?>"><img src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" class="card-image img-fluid w-100" alt="" /></a>
                  <div class="card-body text-center px-1 py-1">
                      <h5 class="font-weight-bold"><?php echo $prodotto["nome"]; ?></h5>
                      <p class="small text-muted text-uppercase mb-2"><?php echo $prodotto["marca"]; ?></p>
                      <div class="card-bottom">

                          <h6 class="mb-3 ">
                              <?php if ($prodotto["sconto"] > 0) : ?>
                                  <span class="text-danger font-weight-bold"><?php echo $prodotto["prezzoFin"]; ?>€</span>
                                  <span class="text-grey"><s><?php echo $prodotto["prezzo"]; ?>€</s></span>
                              <?php else : ?>
                                  <span class="font-weight-bold mx-1"><?php echo $prodotto["prezzo"]; ?>€</span>
                              <?php endif; ?>
                          </h6>
                          <div>
                                <form class="d-inline addToCartForm">
                                    <button class="addToCartButton btn btn-sm mb-2">
                                        <i class="fas fa-cart-plus px-4 px-sm-0 pr-2"></i>
                                        <span class="d-none d-sm-inline button-text font-weight-bold">Aggiungi al carrello</span>
                                    </button>
                                    <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                                </form>
                                <form class="d-inline addToWishListForm">
                                    <button type="button" class="btn btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                                </form>
                            </div>

                      </div>

                  </div>

              </div>


          <?php endforeach; ?>
      </div>
      <div class="col-lg-2"></div>
  </div>