<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1): ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-12 col-md-8 text-center my-4 nopadding">
        <h1>Elenco Prodotti</h1>
        <?php if (count($templateParams["prodotti"]) > 0) : ?>
            <table class=" table text-center admin-basic-table">
                <div class="row ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" id="id"> IdProdotto </th>
                            <th scope="col" id="nome"> Nome </th>
                            <th scope="col" id="marca"> Marca </th>
                            <th scope="col" id="quantita"> Quantità </th>
                            <th scope="col" id="prezzo"> Prezzo </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($templateParams["prodotti"] as $prodotto) : ?>
                            <tr class="py-3 my-3">
                                <td header="id"><?php echo ($prodotto["id"]); ?></td>
                                <td header="nome"><?php echo ($prodotto["nome"]); ?></td>
                                <td header="marca"><?php echo ($prodotto["marca"]); ?></td>
                                <td header="qunatita"><?php echo ($prodotto["quantità"]); ?></td>
                                <td header="prezzo"><?php echo ($prodotto["prezzo"]); ?> €</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        <?php else : ?>
            <p> Non ci sono prodotti da visualizzare. </p>
        <?php endif; ?>
    </div>
    <div class="col-md-2"></div>
</div>

<?php endif; ?>
