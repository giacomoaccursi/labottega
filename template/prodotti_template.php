<?php if (count($templateParams["prodotti"]) > 0) : ?>
    <h2 class="text-center mt-2"><?php echo ($templateParams["titoloCategoria"]); ?></h2>
    <div class="col-12 text-center py-3">
        <select onchange="location = 'prodotti.php?page=1&order='+this.value+
    '<?php if (isset($templateParams['categoriaCorrente'])) {
            echo '&cat=' . $templateParams['categoriaCorrente'];
        } ?>'+
    '<?php if (isset($templateParams['sottoCategoriaCorrente'])) {
            echo '&sub=' . $templateParams['sottoCategoriaCorrente'];
        } ?>'+ 
    '<?php if (isset($templateParams['sales'])) {
            echo '&sales=1';
        } ?>'+
    '<?php if (isset($templateParams['cerca'])) {
            echo '&cerca=' . $templateParams['cerca'];
        } ?>'">
            <option <?php if ($templateParams["order"] == 1) {
                        echo 'selected';
                    } ?>value="1">Nuovi Arrivi</option>
            <option <?php if ($templateParams["order"] == 2) {
                        echo 'selected';
                    } ?> value="2">Prezzo Crescente</option>
            <option <?php if ($templateParams["order"] == 3) {
                        echo 'selected';
                    } ?> value="3">Prezzo Decrescente</option>
            <option <?php if ($templateParams["order"] == 4) {
                        echo 'selected';
                    } ?> value="4">Popolarità</option>
        </select>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-2"></div>
        <div class="row  col-12 col-lg-8">
            <?php $pagina = (int)$templateParams["page"];
            foreach ($templateParams["prodotti"][$pagina - 1] as $prodotto) : ?>
                <div class="card col-6 col-md-3 nopadding rounded-0">
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
                                    <button class="addToCartButton btn btn-sm  mb-2">
                                        <i class="fas fa-shopping-cart px-4 px-sm-0 pr-2"></i>
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

        <nav class="my-3">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href=<?php if ($templateParams["page"] > 1) {
                                                    echo "prodotti.php?page=" . ($templateParams["page"] - 1) . "&order=" . ($templateParams["order"]);
                                                } ?>>Previous</a>
                </li>
                <?php for ($i = 1; $i <= $templateParams["numPagine"]; $i++) : ?>
                    <li class="page-item"><a class="page-link" href="prodotti.php?page=<?php echo $i; ?>&order=<?php echo $templateParams["order"]; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <li class="page-item">
                    <a class="page-link" href=<?php if ($templateParams["page"] < $templateParams["numPagine"]) {
                                                    echo "prodotti.php?page=" . ($templateParams["page"] + 1) . "&order=" . ($templateParams["order"]);
                                                } ?>>Next</a>
                </li>
            </ul>
        </nav>
    <?php else : ?>
        <div class="text-center my-5">
            <p>Ci dispiace, la tua ricerca non ha prodotto risultati</p>
        </div>
    <?php endif; ?>
    </div>