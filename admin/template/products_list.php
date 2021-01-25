<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1): ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-12 col-md-8 text-center my-4 nopadding">
        <h1>Elenco Prodotti</h1>
        
        <?php if (count($templateParams["prodotti"]) > 0) : ?>
            <div class="row pt-2 pb-2 mt-3 admin-products-list-title text-center">
            <div class="col-1">ID</div>
            <div class="col-4">Nome</div>
            <div class="col-3">Marca</div>
            <div class="col-2">Quantità</div>
            <div class="col-2">Prezzo</div>
            </div>
            <?php $pagina = (int)$templateParams["page"];
                foreach ($templateParams["prodotti"][$pagina-1] as $prodotto) : ?>
            <div class="row pt-2 text-center product-row">
            <div class="col-1"><?php echo ($prodotto["id"]); ?></div>
            <div class="col-4"><?php echo ($prodotto["nome"]); ?></div>
            <div class="col-3"><?php echo ($prodotto["marca"]); ?></div>
            <div class="col-2"><?php echo ($prodotto["quantità"]); ?></div>
            <div class="col-2"><?php echo number_format($prodotto["prezzo"], 2, ",", ""); ?> €</div>
            </div>
            <?php endforeach; ?>
            <div class="row text-center justify-content-center mt-2">
            <nav class="my-3 justify-content-center">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href=<?php if ($templateParams["page"] > 1) {
                                                    echo "index.php?&page=" . ($templateParams["page"] - 1) ;
                                                } ?>>Previous</a>
                </li>
                <?php for ($i = 1; $i <= $templateParams["numPagine"]; $i++) : ?>
                    <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <li class="page-item">
                    <a class="page-link" href=<?php if ($templateParams["page"] < $templateParams["numPagine"]) {
                                                    echo "index.php?page=" . ($templateParams["page"] + 1);
                                               } ?>>Next</a>
                </li>
            </ul>
        </nav>
            </div>
        <?php else : ?>
            <p> Non ci sono prodotti da visualizzare. </p>
        <?php endif; ?>
    </div>
    <div class="col-md-2"></div>
</div>

<?php endif; ?>
