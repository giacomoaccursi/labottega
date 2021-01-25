<h2 class="text-center page-title py-3">Lista dei desideri</h2>
<div id="cartDetails" class="row py-3">
    <div class="col-lg-2"></div>
    <div class="itemContainer col-12 col-lg-8">
        <?php
        foreach ($templateParams["prodotti_in_lista_desideri"] as $prodotto) :
        ?>
            <div class="productDetails row align-items-center">
                <div class="col-4 col-md-3 p-0">

                    <a href="<?php echo ("prodotto.php?id=" . $prodotto["id"]); ?>">
                        <img src=<?php echo IMG_ROOT . $prodotto["immagine"]; ?> alt="" width="120" class="img-fluid">
                    </a>
                </div>

                <div class="row col-8 col-md-9 p-0">
                    <div class="col-12 col-md-6 p-0">
                        <h5 class="mb-0"> <a href="<?php echo ("prodotto.php?id=" . $prodotto["id"]); ?>" class="text-dark d-inline-block align-middle"><?php echo $prodotto["nome"]; ?></a></h5>
                        <span class="text-muted font-weight-normal font-italic d-block"><?php echo $prodotto["marca"]; ?></span>
                    </div>
                    <div class="col-4 col-md-2 itemPrice col-md-2 p-0" value="<?php echo $prodotto["prezzoFin"]; ?>">
                        <?php if ($prodotto["sconto"] > 0) : ?>
                            <span class=" text-danger font-weight-bold pr-2"><?php echo number_format($prodotto["prezzoFin"], 2, ",", ""); ?>€</span>
                            <span class="text-grey"><s><?php echo number_format($prodotto["prezzo"], 2, ",", ""); ?>€</s></span>
                        <?php else : ?>
                            <span class="font-weight-bold mx-1"><?php echo number_format($prodotto["prezzo"], 2, ",", ""); ?>€</span>
                        <?php endif; ?>
                    </div>
                    <div class="col-8 col-md-4">
                        <form class="d-inline addToCartForm">
                            <button class=" btn btn-sm mb-2">
                                <i class="fas fa-cart-plus fa-lg px-1 px-sm-0 pr-2"></i>
                            </button>
                            <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                        </form>
                        <form class="deleteItemFromWishList d-inline pl-2">
                            <button class=" btn btn-sm mb-2">

                                <i class="fas fa-trash fa-lg px-1 px-sm-0"></i>

                            </button>
                            <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                        </form>
                    </div>
                </div>
                <hr/>
            </div>
            
        <?php endforeach; ?>
    </div>

    <div class="col-lg-2"></div>
</div>
<div id="noItem" class="text-center">
    <p>Non ci sono prodotti nella lista dei desideri </p>
    <a href="index.php" class="btn">Torna ad acquistare</a>
</div>