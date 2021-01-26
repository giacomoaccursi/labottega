<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) : ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-12 col-md-8 text-center my-4 nopadding">
            <h1>Elenco Notifiche</h1>
            <?php if (count($templateParams["notifiche"]) > 0) : ?>
                <table class="table text-center admin-basic-table mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" id="id"> Id </th>
                            <th scope="col" id="data"> Data </th>
                            <th scope="col" id="notifica"> Notifica </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($templateParams["notifiche"] as $notifica) : ?>
                            <tr class="py-3 my-3">
                                <td header="id"><?php echo ($notifica["id"]); ?></td>
                                <td header="data"><?php echo ($notifica["data"]); ?></td>
                                <td header="notifica"><?php echo $notifica["messaggio"]; ?></td>
                                <td>
                                    <div class="deleteItem">
                                        <i class="fas fa-trash fa-lg"></i>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p> Non ci sono notifiche da visualizzare. </p>
            <?php endif; ?>
        </div>
        <div class="col-md-2"></div>
    </div>

<?php endif; ?>