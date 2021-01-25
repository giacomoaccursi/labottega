<?php
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$indirizzo = $_POST["indirizzo"];
$città = $_POST["città"];
$nazione = $_POST["nazione"];
$spedizione = strtotime("+1 week"); 
?>


<div class="mt-5 row">
    <div class="col-md-1"></div>
    <section class="col-12 col-md-3">
        <h2 class="text-center text-md-left page-title">Dettagli Cliente</h2>
        <ul class="text-center text-md-left mt-4 list-unstyled">
            <li class="dati-cliente"><?php echo $nome . " " . $cognome; ?></li>
            <li class="dati-cliente"><?php echo $indirizzo; ?></li>
            <li class="dati-cliente"><?php echo $città . " " . $nazione; ?></li>
        </ul>
    </section>


    <section class="col-12 col-md-7">
        <h2 class="page-title text-center">Dettagli ordine</h2>
        <table class="mt-4 tabella-riepilogo table">
            <thead>
                <tr>
                    <th id="prod" scope="col">Prodotto</th>
                    <th id="quantita" scope="col">Quantità</th>
                    <th id="prezzo" scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prodotti as $prodotto) : ?>
                    <tr>
                        <td headers="prod"><?php echo $prodotto["nome"]; ?></td>
                        <td headers="quantita"><?php echo $prodotto["quantitàDaComprare"]; ?></td>
                        <td headers="prezzo"><?php echo ($prodotto["quantitàDaComprare"] * $prodotto["prezzoFin"]); ?>€</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center" headers="prod quantita" colspan="2">Totale Ordine</th>
                    <td header="prezzo"><?php echo $totaleOrdine; ?></td>
                </tr>
            </tfoot>
        </table>
        <p class="spedizione-stimata"><i class="fas fa-lg fa-shipping-fast"></i> Giorno di spedizione stimato: <?php echo date('d/m/Y', $spedizione);?></p>

    </section>
    <div class="col-md-1"></div>
</div>