<div class="product card col-6 col-md-3 rounded-0 nopadding">
    <div class="prod-aggiunto">Prodotto Aggiunto Correttamente</div>
    <div class="prod-non-aggiunto">Quantità non disponibile</div>
    <a href="prodotto.php?id=<?php echo $prodotto["id"]; ?>"><img src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" class="card-image img-fluid w-100" alt="<?php echo $prodotto["nome"]; ?>" /></a>
    <div class="card-body text-center px-1 py-1">
        <h5 class="font-weight-bold"><?php echo $prodotto["nome"]; ?></h5>
        <p class="small text-muted text-uppercase mb-2"><?php echo $prodotto["marca"]; ?></p>
        <div class="card-bottom">
            <h6 class="mb-3 ">
                <?php if ($prodotto["sconto"] > 0) : ?>
                    <span class="text-danger font-weight-bold"><?php echo number_format($prodotto["prezzoFin"], 2, ",", ""); ?>€</span>
                    <span class="text-grey"><s><?php echo number_format($prodotto["prezzo"], 2, ",", ""); ?>€</s></span>
                <?php else : ?>
                    <span class="font-weight-bold mx-1"><?php echo number_format($prodotto["prezzo"], 2, ",", ""); ?>€</span>
                <?php endif; ?>
            </h6>
            <div>
                <?php if ($prodotto["quantità"] > 0) : ?>
                    <form class="d-inline addToCartForm">
                        <button class="addToCartButton btn btn-sm mb-2">
                            <i class="fas fa-cart-plus fa-lg px-4 px-sm-0 pr-2"></i>
                            <span class="d-none d-sm-inline button-text font-weight-bold">Aggiungi al carrello</span>
                        </button>
                        <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>" />
                    </form>
                <?php else : ?>
                    <button class="notAvailable btn btn-sm mb-2">
                        <i class="d-sm-none fas fa-cart-plus fa-lg px-4 px-sm-0 pr-2"></i>
                        <span class="d-none d-sm-inline button-text font-weight-bold">Prodotto Non Disponibile</span>
                    </button>
                <?php endif ?>

                <?php if (isUserLoggedIn()) : ?>
                    <?php if (!in_array($prodotto["id"], $templateParams["wishlist"])) : ?>
                        <form class="d-inline addToWishListForm">
                            <button class="btn bg-transparent btn-sm px-3 mb-2 material-tooltip-main">
                                <i class="far fa-heart fa-lg"></i>
                            </button>
                            <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>" />
                        </form>
                    <?php else : ?>
                        <form class="d-inline removeFromWishListForm">
                            <button class="btn btn-sm bg-transparent px-3 mb-2 material-tooltip-main">
                                <i class="red-icon fas fa-heart fa-lg"></i>
                            </button>
                            <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>" />
                        </form>
                    <?php endif; ?>
                <?php else : ?>
                    <form class="d-inline" action="login.php">
                        <button type="submit" class="btn bg-transparent btn-sm px-3 mb-2 material-tooltip-main">
                            <i class="far fa-heart fa-lg"></i>
                        </button>
                        <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>" />
                    </form>
                <?php endif; ?>
            </div>

        </div>

    </div>

</div>