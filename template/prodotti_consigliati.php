<?php

foreach($templateParams["prodottiConsigliati"] as $prodotto):

?>
<div>
<?php echo $prodotto["nome"];?>
</div>

<div>
<?php echo $prodotto["idCategoria"];?>
</div>

<img src="<?php echo $prodotto["immagine"];?>" alt=""/>

<?php endforeach; ?>