<h2 class="text-center page-title py-3">Carrello</h2>
<div id="cartDetails" class="row py-3">
    <div class="col-lg-1"></div>
    <div class="itemContainer col-12 col-xl-7">
        <?php
        foreach ($templateParams["prodottiInCarrello"] as $prodotto) :
        ?>
            <div class="notAvailableQuantity bg-warning font-weight-bold text-center">
                Quantità selezionatà non disponibile
            </div>
            <div class="productDetails row align-items-center">
                <div class="col-3 col-sm-2">
                    <a href="<?php echo ("prodotto.php?id=" . $prodotto["id"]); ?>">
                        <img src=<?php echo IMG_ROOT . $prodotto["immagine"]; ?> alt="" width="120" class="img-fluid">
                    </a>
                </div>
                <div class="col-9 col-sm-4 ">
                    <h5 class="mb-0"> <a href="<?php echo ("prodotto.php?id=" . $prodotto["id"]); ?>" class="text-dark d-inline-block align-middle"><?php echo $prodotto["nome"]; ?></a></h5><span class="text-muted font-weight-normal font-italic d-block"><?php echo $prodotto["marca"]; ?></span>
                </div>
                <div class="input-group col-7 col-sm-4 pt-1 text-md-center">
                    <input type="button" value="-" class="button-minus" data-field="quantity">
                    <input type="number" step="1" max="" value="<?php echo $prodotto["quantitàDaComprare"]; ?>" name="quantity" class="itemQuantity">
                    <input type="button" value="+" class="button-plus" data-field="quantity">
                </div>

                <div class="itemPrice col-3 col-sm-1 p-0" value="<?php echo $prodotto["prezzoFin"]; ?>">
                    <?php if ($prodotto["sconto"] > 0) : ?>
                        <span class=" text-danger font-weight-bold pr-2"><?php echo $prodotto["prezzoFin"]; ?>€</span>
                        <span class="text-grey"><s><?php echo $prodotto["prezzo"]; ?>€</s></span>
                    <?php else : ?>
                        <span class="font-weight-bold mx-1"><?php echo $prodotto["prezzo"]; ?>€</span>
                    <?php endif; ?>
                </div>
                <div class="deleteItem col-2 col-sm-1">
                    <i class="fas fa-trash fa-lg"></i>
                </div>
                <input type="hidden" class="productId" value="<?php echo $prodotto["idProdotto"]; ?>">
            </div>
            <hr />
        <?php endforeach; ?>
    </div>

    <div id="orderInformation" class="col-xl-3">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Riepilogo</div>
        <div class="px-4">
            <ul class="list-unstyled m-0">
                <li id="orderSubTotal" class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Totale Provvisorio</strong><span id="subTotalPrice"></span></li>
                <li id="orderShippingCost" class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Costi di spedizione</strong><span id="shippingCost"></span></li>
                <li id="orderTotal" class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Totale</strong><span id="totalPrice"></span></li>
            </ul>
            <form class="my-4" action="checkout.php" method=POST>
                <button class="btn rounded-pill py-2 btn-block checkoutButton">Procedi all'ordine</button>
                <input type="hidden" name="checkout" id="checkout" value="1">
            </form>
        </div>
    </div>
    <div class="col-lg-1"></div>
</div>
<div id="noItem" class="text-center">
    <p>Non ci sono prodotti nel carrello </p>
    <a href="index.php" class="btn">Torna ad acquistare</a>
</div>