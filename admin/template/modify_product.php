<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1) : ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-12 col-md-8 text-center nopadding">
            <h1>Modifica Prodotto</h1>
            <form action="#" id="modify-product-form" method="POST" class="text-center admin-basic-form" enctype="multipart/form-data">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <td><label for="prodotto">Prodotto:</label></td>
                            <td>
                                <select name="prodotto" id="prodotto" class="col-12" onchange="location='modify-product.php?id='+this.value">
                                    <option selected disabled value> --- Scegli un prodotto --- </option>
                                    <?php foreach ($templateParams["prodotti"] as $prodotto) : ?>
                                        <option value="<?php echo $prodotto["id"]; ?>"><?php echo $prodotto["nome"]; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label for="nome">Nome:</label></td>
                            <td><input type="text" id="nome" name="nome" class="col-12" value="<?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['nome'] ?>" required /></td>
                        </tr>
                        <tr>
                            <td><label for="marca">Marca:</label></td>
                            <td><input type="text" id="marca" name="marca" class="col-12" value="<?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['marca'] ?>" required /></td>
                        </tr>
                        <tr>
                            <td><label for="descrizione">Descrizione:</label></td>
                            <td><textarea id="descrizione" name="descrizione" class="col-12" rows="3" lang="it" required><?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['descrizione']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="prezzo">Prezzo:</label></td>
                            <td><input type="number" id="prezzo" step="any" name="prezzo" class="col-12" value="<?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['prezzo']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><label for="sconto">Sconto:</label></td>
                            <td><input type="number" id="sconto" step="any" name="sconto" class="col-12" value="<?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['sconto']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td> <label for="immagine">Immagine:</label></td>
                            <td><input type="file" name="immagine" id="immagine" class="col-12" required /></td>
                        </tr>
                        <tr>
                            <td><label for="quantita">Quantità:</label></td>
                            <td><input type="number" id="quantita" name="quantita" class="col-12" value="<?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['quantità']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><label for="sottocategoria">Categoria :</label></td>
                            <td>
                                <select name="sottocategoria" id="sottocategoria" class="col-12" form="modify-product-form">
                                    <?php foreach ($templateParams["sottocategorie"] as $sottocategoria) : ?>
                                        <option value="<?php echo $sottocategoria["id"]; ?>" <?php if ($templateParams["prodotto"]["idSottoCategoria"] == $sottocategoria["id"]) echo "selected"; ?>><?php echo $sottocategoria["nome"]; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gradazione">Gradazione:</label></td>
                            <td><input type="number" id="gradazione" name="gradazione" class="col-12" value="<?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['gradazione']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td><label for="formato">Formato:</label></td>
                            <td><input type="number" id="formato" name="formato" class="col-12" value="<?php if (isset($templateParams['prodotto'])) echo $templateParams['prodotto']['formato']; ?>" required /></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"> <input type="submit" name="submit" class="btn-success" value="Modifica" /> </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="col-md-2"></div>

    <?php endif; ?>