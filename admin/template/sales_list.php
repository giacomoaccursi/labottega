<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1): ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-12 col-md-8 text-center my-4 nopadding">
        <h1>Elenco Vendite</h1>
        <?php if (count($templateParams["vendite"]) > 0) : ?>
            <table class="table text-center admin-basic-table mt-4">
                <div class="row ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" id="id"> IdOrdine </th>
                            <th scope="col" id="data"> Data </th>
                            <th scope="col" id="totale"> Totale </th>
                            <th scope="col" id="stato"> Stato </th>
                            <th scope="col" id="modifica"> Modifica </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($templateParams["vendite"] as $vendita) : ?>
                            <tr class="py-3 my-3">
                                <td header="id"><?php echo ($vendita["id"]); ?></td>
                                <td header="data"><?php echo ($vendita["dataOrdine"]); ?></td>
                                <td header="totale"><?php echo number_format($vendita["totaleOrdine"], 2, ",", "");?></td>
                                <?php if(isset($_GET["mod"]) && $_GET["mod"]==$vendita["id"]):?>
                                <form action="#" id="stato-form" method="POST">
                                <td header="stato"><select name="stato" id="stato" form="stato-form">
                                <option value="inLavorazione">In Lavorazione</option>
                                <option value="Spedito">Spedito</option>
                                <option value="Consegnato">Conegnato</option>
                                </select>
                                <td class="col-1"><button type="submit" class="btn-search">OK</button></td>
                                </td>
                                </form>
                                <?php else:?>
                                <td header="stato"><?php echo ($vendita["stato"]); ?> </td>
                                <td class="col-1"><a href="sales.php?mod=<?php echo $vendita["id"];?>"><i class="fas fa-edit"></i></a></td>

                                <?php endif; ?>
                                
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
