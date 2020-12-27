<h2 class="text-center"><?php echo $prodotto["nome"] ?></h2>
<img class="img-fluid" src="<?php echo IMG_ROOT . $prodotto["immagine"]; ?>" />
<p><?php echo $prodotto["prezzo"]; ?></p>
<p><?php echo $prodotto["descrizione"]; ?></p>
<form class="addToCartForm2">
    <button class="addToCartButton2" class="btn my-2">ACQUISTA ORA</button>
        <a href="wishList.php" class="icon-link pr-md-2 text-dark "><i class="far fa-heart fa-lg"></i></a>
        <input type="hidden" class="productId" value="<?php echo $prodotto["id"]; ?>">
</form>