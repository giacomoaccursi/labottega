<?php if (count($templateParams["prodotti"]) > 0) : ?>
    <h2 class="text-center mt-2 page-title p-3 text-uppercase"><?php echo ($templateParams["titoloCategoria"]); ?></h2>
    <div class="col-12 text-center py-3">
        <select class="form-select" onchange="location = 'prodotti.php?page=1&order='+this.value+
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
                        echo 'selected ';
                    } ?>value="1">Nuovi Arrivi</option>
            <option <?php if ($templateParams["order"] == 2) {
                        echo 'selected ';
                    } ?> value="2">Prezzo Crescente</option>
            <option <?php if ($templateParams["order"] == 3) {
                        echo 'selected ';
                    } ?> value="3">Prezzo Decrescente</option>
            <option <?php if ($templateParams["order"] == 4) {
                        echo 'selected ';
                    } ?> value="4">Popolarità</option>
        </select>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-2"></div>
        <div class="row  col-12 col-lg-8">
            <?php $pagina = (int)$templateParams["page"];
            foreach ($templateParams["prodotti"][$pagina - 1] as $prodotto) : ?>
                <?php
                    require("lista_prodotti.php");
                ?>
            <?php endforeach; ?>

        </div>
        <div class="col-lg-2"></div>

        <nav class="my-3">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="<?php if ($templateParams["page"] > 1) {
                                                    echo "prodotti.php?&page=" . ($templateParams["page"] - 1) . "&order=" . ($templateParams["order"]);
                                                    if(isset($_GET["cat"])) echo ("&cat=".$_GET["cat"]);
                                                } ?>">Previous</a>
                </li>
                <?php for ($i = 1; $i <= $templateParams["numPagine"]; $i++) : ?>
                    <li class="page-item"><a class="page-link" href="prodotti.php?page=<?php echo $i; ?>&order=<?php echo $templateParams["order"]; ?><?php if(isset($_GET["cat"])) echo ("&cat=".$_GET["cat"])?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <li class="page-item">
                    <a class="page-link" href="<?php if ($templateParams["page"] < $templateParams["numPagine"]) {
                                                    echo "prodotti.php?page=" . ($templateParams["page"] + 1) . "&order=" . ($templateParams["order"]);
                                                    if(isset($_GET["cat"])) echo ("&cat=".$_GET["cat"]);
                                                } ?>">Next</a>
                </li>
            </ul>
        </nav>
    <?php else : ?>
        <div class="text-center my-5">
            <p>Ci dispiace, la tua ricerca non ha prodotto risultati</p>
        </div>
    <?php endif; ?>
    </div>