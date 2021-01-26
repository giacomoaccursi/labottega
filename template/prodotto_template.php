<div class="mt-5">
    <div class="container product dark-grey-text mt-5">
        <div class="prod-aggiunto">Prodotto aggiunto correttamente al carrello.</div>
        <div class="prod-non-aggiunto">Ci dispiace. Non sono disponibili ulteriori quantità di questo prodotto</div>
        <div class="row">
            <div class="col-md-5 mb-4">
                <img src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 mb-4">
                <h2 class="text-center text-md-left"><?php echo $prodotto["nome"] ?></h2>
                <div class="text-center text-md-left">
                    <p class="lead">
                        <?php if ($prodotto["sconto"] > 0) : ?>
                            <span class="text-danger font-weight-bold"><?php echo number_format($prodotto["prezzoFin"], 2, ",", ""); ?>€</span>
                            <span class="text-grey"><s><?php echo number_format($prodotto["prezzo"], 2, ",", ""); ?>€</s></span>
                        <?php else : ?>
                            <span class="font-weight-bold mx-1"><?php echo number_format($prodotto["prezzo"], 2, ",", ""); ?>€</span>
                        <?php endif; ?>
                    </p>
                    <div class="buttons">
                        <form class="addToCartForm d-inline justify-content-center justify-content-md-start">
                            <button class="btn addToCartButton" type="submit">Aggiungi al carrello
                                <i class="fas fa-shopping-cart ml-1"></i>
                            </button>
                            <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                        </form>

                        <?php if (isUserLoggedIn()) : ?>
                            <?php if (!in_array($prodotto["id"], $templateParams["wishlist"])) : ?>
                                <form class="d-inline addToWishListForm">
                                    <button class="btn bg-transparent px-3 material-tooltip-main">
                                        <i class="far fa-heart fa-lg"></i>
                                    </button>
                                    <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>" />
                                </form>
                            <?php else : ?>
                                <form class="d-inline removeFromWishListForm">
                                    <button class="btn bg-transparent px-3 material-tooltip-main">
                                        <i class="red-icon fas fa-heart fa-lg"></i>
                                    </button>
                                    <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>" />
                                </form>
                            <?php endif; ?>
                        <?php else : ?>
                            <a href="login.php">
                                <button class="btn bg-transparent px-3 material-tooltip-main">
                                    <i class="far fa-heart fa-lg"></i>
                                </button>
                                <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>" />
                            </a>
                        <?php endif; ?>
                    </div>
                    <ul class="mt-4 list-unstyled">
                        <li class="mt-3 ">
                            <i class="fas fa-lg fa-wine-bottle"></i>
                            <p class="d-inline">Formato: <?php echo $prodotto["formato"]; ?></p>
                        </li>
                        <li class="mt-3">
                            <i class="pr-2 fas fa-lg fa-wine-glass-alt"></i>
                            <p class="d-inline">Gradazione: <?php echo $prodotto["gradazione"]; ?>%</p>
                        </li>
                        <li class="mt-3">
                            <i class="fas fa-lg fa-pen"></i>
                            <p class="d-inline">Categoria: <?php echo $prodotto["nomeCategoria"]; ?></p>
                        </li>
                    </ul>

                    
                <p class="mt-4"><?php echo $prodotto["descrizione"]; ?></p>
            </div>
        </div>
    </div>
    <hr />
</div>

<?php
require("prodotti_consigliati.php");
?>
</div>