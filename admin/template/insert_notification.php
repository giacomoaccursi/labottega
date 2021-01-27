<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) : ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-12 col-md-8 text-center my-4 nopadding">
            <h1>Inserimento notifiche</h1>
            <form action="#" method="POST" class="text-center admin-basic-form" enctype="multipart/form-data">
                <table class=" table text-center mt-4">
                    <thead class="table-dark">
                        <tr>
                            <td><label for="cliente">Destinatario:</label></td>
                            <td>
                                <select name="cliente" id="cliente" class="col-12" onchange="location='insert-notifications.php?user_id='+this.value">
                                    <option value="0">Tutti i clienti</option>
                                    <?php foreach ($templateParams["clienti"] as $cliente) : ?>
                                        <option value="<?php echo $cliente["id"]; ?>" <?php if (isset($templateParams["cliente"]) && $templateParams["cliente"]["id"] == $cliente["id"]) echo "selected"; ?>><?php echo ($cliente["nome"] . " " . $cliente["cognome"]); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label for="messaggio">Messaggio:</label></td>
                            <td><textarea id="messaggio" name="messaggio" rows="7" class="col-12" required> </textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"> <input type="submit" name="submit" class="btn-success" value="Invia" /> </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

<?php endif; ?>