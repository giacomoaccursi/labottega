<div class="row text-center">
    <h2 class="col-12 text-center mt-2 page-title p-3 text-uppercase "><?php echo ($templateParams["titoloCategoria"]); ?></h2>
<div class="col-md-3"></div>
<div class="col-12 col-md-6">
    <?php if (isset($templateParams["dettagli"])) : ?>
        <table class=" table text-center col-12">
            <div class="row ">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" id="img"> Immagine </th>
                        <th scope="col" id="nome"> Nome </th>
                        <th scope="col" id="quantita"> Quantità </th>
                        <th scope="col" id="prezzo"> Prezzo </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($templateParams["dettagli"] as $prodotto) : ?>
                        <tr class="py-3 my-3">
                            <td header="img"><img class="table-image" src="<?php echo (IMG_ROOT . $prodotto["immagine"]); ?>" width="80" class="img-fluid" /></td>
                            <td header="nome"><?php echo ($prodotto["nome"]); ?></td>
                            <td header="quantita"><?php echo ($prodotto["quantita"]); ?></td>
                            <td header="prezzo"><?php echo ($prodotto["prezzo"]); ?> €</td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                    <td colspan="4"><a href="dashboard.php" class="btn checkoutButton ounded-pill py-2">TORNA ALLA DASHBOARD</a></td>
                    </tr>
                </tbody>
        </table>
    <?php else : ?>
        <p> Non ci sono dettagli da visualizzare. </p>
    <?php endif; ?>
</div>
<div class="col-md-3"></div>
</div>
