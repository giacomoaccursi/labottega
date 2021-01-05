<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) : ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-12 col-md-8 text-center my-4 nopadding">
            <h1>Inserimento Prodotto</h1>
            <form action="#" id="new-product-form" method="POST" class="text-center" enctype="multipart/form-data">
                <table class="table mt-5">
                    <tr>
                        <td><label for="nome">Nome:</label></td>
                        <td><input type="text" id="nome" name="nome" class="col-12" value="" required /></td>
                    </tr>
                    <tr>
                        <td><label for="marca">Marca:</label></td>
                        <td><input type="text" id="marca" name="marca" class="col-12" value="" required /></td>
                    </tr>
                    <tr>
                        <td><label for="descrizione">Descrizione:</label></td>
                        <td><textarea id="descrizione" name="descrizione" class="col-12" required></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="prezzo">Prezzo:</label></td>
                        <td><input type="number" id="prezzo" step="any" name="prezzo" class="col-12" value="" required /></td>
                    </tr>
                    <tr>
                        <td> <label for="immagine">Immagine:</label></td>
                        <td><input type="file" name="immagine" id="immagine" class="col-12"value="" required /></td>
                    </tr>
                    <tr>
                        <td><label for="quantita">Quantità:</label></td>
                        <td><input type="number" id="quantita" name="quantita" class="col-12" value="" required /></td>
                    </tr>
                    <tr>
                        <td><label for="sottocategoria">Categoria :</label></td>
                        <td>
                            <select name="sottocategoria" id="sottocategoria" class="col-12" form="new-product-form">
                                <?php foreach ($templateParams["sottocategorie"] as $sottocategoria) : ?>
                                    <option value="<?php echo $sottocategoria["id"]; ?>"><?php echo $sottocategoria["nome"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"> <input type="submit" name="submit" class="btn-success" value="Inserisci" /> </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-2"></div>

    <?php endif; ?>