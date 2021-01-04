<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1): ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-12 col-md-8 text-center my-4 nopadding">
        <h1>Elenco Vendite</h1>
        <?php if (count($templateParams["vendite"]) > 0) : ?>
            <table class=" table text-center mt-4">
                <div class="row ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" id="data"> Data </th>
                            <th scope="col" id="totale"> Totale </th>
                            <th scope="col" id="stato"> Stato </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($templateParams["vendite"] as $vendita) : ?>
                            <tr class="py-3 my-3">
                                <td header="data"><?php echo ($vendita["dataOrdine"]); ?></td>
                                <td header="totale"><?php echo ($vendita["totaleOrdine"]); ?></td>
                                <td header="stato"><?php echo ($vendita["stato"]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        <?php else : ?>
            <p> Non ci sono vendite da visualizzare. </p>
        <?php endif; ?>
    </div>
    <div class="col-md-2"></div>
</div>

<?php endif; ?>
