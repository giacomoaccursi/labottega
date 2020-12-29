<h2 class="text-center py-3">Carrello</h2>
<div id="cartDetails" class="row py-3">
    <div class="col-lg-1"></div>
    <div class="itemContainer col-12 col-xl-7">
        <?php
        foreach ($templateParams["prodottiInCarrello"] as $prodotto) :
        ?>
            <div class="productDetails row align-items-center py-3">
                <div class="col-3 col-sm-2">
                    <img src=<?php echo IMG_ROOT . $prodotto["immagine"]; ?> alt="" width="70" class="img-fluid">
                </div>
                <div class="col-9 col-sm-4 ">
                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $prodotto["nome"]; ?></a></h5><span class="text-muted font-weight-normal font-italic d-block"><?php echo $prodotto["marca"]; ?></span>
                </div>
                <div class="input-group col-7 col-sm-4 pt-1 text-md-center">
                    <input type="button" value="-" class="button-minus" data-field="quantity">
                    <input type="number" step="1" max="" value="<?php echo $prodotto["quantitàDaComprare"]; ?>" name="quantity" class="itemQuantity">
                    <input type="button" value="+" class="button-plus" data-field="quantity">
                </div>
                <div class="itemPrice col-3 col-sm-1 text-center" value="<?php echo $prodotto["prezzoFin"]; ?>"><?php echo $prodotto["prezzoFin"]; ?>$</div>
                <div class="deleteItem col-2 col-sm-1">
                    <i class="fas fa-trash"></i>
                </div>
                <input type="hidden" class="productId" value="<?php echo $prodotto["idProdotto"]; ?>">
            </div>
        <?php endforeach; ?>
    </div>


    <div id="orderInformation" class="col-xl-3 pt-5">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
        <div class="px-4">
            <ul class="list-unstyled mb-4">
                <li id="orderSubTotal" class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><span id="subTotalPrice"></span></li>
                <li id="orderShippingCost" class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><span id="shippingCost"></span></li>
                <li id="orderTotal" class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong><span id="totalPrice"></span></li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
        </div>
    </div>
    <div class="col-lg-1"></div>
</div>
<div id="noItem" class="text-center">
    <p>Non ci sono prodotti nel carrello </p>
    <a href="index.php" class="btn">Torna ad acquistare</a>
</div>