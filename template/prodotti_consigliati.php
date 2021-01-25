<div class="container mt-5">
    <h3 class="text-center">Prodotti che potrebbero piacerti</h3>
    <div class="row col-12 nopadding">
        <div class="col-md-2"></div>
        <div class="row col-12 col-md-8 text-center mt-4 nopadding">
            <?php foreach ($templateParams["prodottiConsigliati"] as $prodotto) : ?>
                <div class="col-sm-6 col-md-3">
                    <a class="prodottoConsigliato" href="prodotto.php?id=<?php echo $prodotto["id"]; ?>">
                        <img src="<?php echo  IMG_ROOT . $prodotto["immagine"]; ?>" class="card-img-top" alt="" />
                        <p class="font-weight-bold pt-3 text-dark">
                            <?php echo $prodotto["nome"]; ?>
                        </p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>