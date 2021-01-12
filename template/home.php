  <div id="home-image" class="row align-items-center hover-shadow">

      <div class="col-md-12 text-center">
          <a id="compra-ora" class="btn" href="prodotti.php"><span>COMPRA ORA</span></a>
      </div>

  </div>


  <h2 class="text-center py-5 page-title">BEST PRODUCTS</h2>


  <div class="row justify-content-center">
      <div class="col-lg-2"></div>
      <div class="row  col-12 col-lg-8">
          <?php foreach ($templateParams["prodotti"] as $prodotto) : ?>
            <?php
                require("lista_prodotti.php");
            ?>
          <?php endforeach; ?>
      </div>
      <div class="col-lg-2"></div>
  </div>