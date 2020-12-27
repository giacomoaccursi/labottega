<h2 class="text-center"><?php echo ($templateParams["titoloCategoria"]); ?></h2>
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
        foreach ($templateParams["prodotti"][$pagina - 1] as $prodotto) :
        ?>
            <div class="card text-center col-6 col-md-3 nopadding">
            <div class=" view overlay zoom">
                <img class="card-img img-fluid" src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" class="card-img-top" alt="" />
            </div>    
                <div class="card-body nopadding">
                    <h5 class="card-title mt-1"><?php echo $prodotto["nome"]; ?></h5>
                    <h6><?php echo $prodotto["marca"]; ?></h6>
                    <form class="addToCartForm">
                        <div class="row col-12">
                            <?php if ($prodotto["sconto"] > 0) : ?>
                                <p class="col-6 card-text nopadding text-right">
                                    <?php echo $prodotto["prezzoFin"]; ?>€
                                </p>
                            <?php endif; ?>
                            <p class="card-text nopadding col-6 text-right">
                                <?php echo $prodotto["prezzo"]; ?>€
                            </p>
                        </div>
                        <button class="addToCartButton" type="submit" class="btn my-2">ACQUISTA ORA</button>
                        <a href="wishList.php" class="icon-link pr-md-2 text-dark "><i class="far fa-heart fa-lg"></i></a>
                        <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
                    </form>
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
</div>