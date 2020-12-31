<div class="mt-5">
    <div class="container dark-grey-text mt-5">
        <div class="row">
            <div class="col-md-5 mb-4">
                <img src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 mb-4">
                <h2 class="text-center text-md-left"><?php echo $prodotto["nome"] ?></h2>
                <div class="text-center text-md-left">
                    <p class="lead">
                        <?php if ($prodotto["sconto"] > 0) : ?>
                            <span class="mr-1">
                                <del><?php echo $prodotto["prezzo"]; ?> $</del>
                            </span>
                        <?php endif; ?>
                        <span class="font-weight-bold"><?php echo $prodotto["prezzoFin"]; ?> $</span>
                    </p>

                    <form class="d-flex justify-content-center justify-content-md-start my-2">
                        <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                            <i class="fas fa-shopping-cart ml-1"></i>
                        </button>
                        <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                    </form>
                    <p class="mt-4"><?php echo $prodotto["descrizione"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>