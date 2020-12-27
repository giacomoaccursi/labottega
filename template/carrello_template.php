<h2 class="text-center py-3">Carrello</h2>
<div class="row py-3">
    <div class="col-lg-1"></div>
    <div class="col-12 col-xl-7">
        <?php
        $costoProdotti = 0;
        $costoSpedizione = 10;
        foreach ($templateParams["prodottiInCarrello"] as $prodotto) :
        ?>
            <div class="productDetails row align-items-center py-3">
                <div class="col-3 col-sm-2">
                    <img src=<?php echo IMG_ROOT . $prodotto["immagine"]; ?> alt="" width="70" class="img-fluid">
                </div>
                <div class="col-9 col-sm-4 ">
                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $prodotto["nome"]; ?></a></h5><span class="text-muted font-weight-normal font-italic d-block"><?php echo $prodotto["marca"]; ?></span>
                </div>
                <div class="input-group col-5 col-sm-3 pt-1 text-md-center">
                    <input type="button" value="-" class="button-minus" data-field="quantity">
                    <input type="number" step="1" max="" value="<?php echo $prodotto["quantitàDaComprare"]; ?>" name="quantity" class="quantity-field">
                    <input type="button" value="+" class="button-plus" data-field="quantity">
                </div>
                <div class="col-4 col-sm-1 text-center"><?php echo $prodotto["prezzoFin"]; ?>$</div>
                <div class="deleteItem col-3 col-sm-2">
                    <i class="fas fa-trash"></i>
                </div>
                <input type="hidden" class="productId" value="<?php echo $prodotto["idProdotto"]; ?>">
            </div>
            <?php $costoProdotti += $prodotto["prezzoFin"]; ?>
        <?php endforeach; ?>
    </div>


    <div class="col-xl-3 pt-5">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
        <div class="px-4">
            <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong><?php echo $costoProdotti; ?>$</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong><?php echo $costoSpedizione; ?>$</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold"><?php echo $costoProdotti + $costoSpedizione; ?>$</h5>
                </li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
        </div>
    </div>
    <div class="col-lg-1"></div>
</div>