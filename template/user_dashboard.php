<div class="row col-12">
  <div class="col-lg-2 col-md-1"></div>
  <div class="dashboard-tab col-12 col-lg-8 col-md-10">
  </div>
  <div class="col-lg-2 col-md-1"></div>
</div>
<div class="row text-center pt-4">
  <div class="col-lg-2 col-md-1"></div>
  <div id="Ordini" class="text-center col-12 col-md-10 col-lg-8 pt-3">
    <h2 class="dashboard-section-title">I miei ordini </h2>
    <?php if (count($templateParams["ordini"]) > 0) : ?>
      <table class=" table text-center col-12">
          <thead class="table-dark">
            <tr>
              <th scope="col" id="id"> IdOrdine </th>
              <th scope="col" id="data"> Data </th>
              <th scope="col" id="stato"> Stato ordine </th>
              <th scope="col" id="totale"> Totale </th>
              <th scope="col" id="dettagli"> Dettagli ordine </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($templateParams["ordini"] as $ordine) : ?>
              <tr class="py-3 my-3">
                <td header="id"><?php echo ($ordine["id"]); ?></td>
                <td header="data"><?php echo ($ordine["dataOrdine"]); ?></td>
                <td header="stato"><?php echo ($ordine["stato"]); ?></td>
                <td header="totale"><?php echo number_format($ordine["totaleOrdine"], 2, ",", ""); ?> €</td>
                <td header="dettagli"><a href="order_details.php?id=<?php echo $ordine["id"] ?>">Visualizza articoli </a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
    <?php else : ?>
      <p> Non ci sono ordini da visualizzare. </p>
    <?php endif; ?>
  </div>
  <div class="col-lg-2 col-md-1"></div>


</div>

<div class="row text-center mt-2 pt-2">
  <div class="col-lg-2 col-md-1"></div>
  <div id="Notifiche" class="col-12 col-lg-8 col-md-10 text-center pt-3">
    <h3 class="dashboard-section-title">Notifiche</h3>
    <?php if (count($templateParams["notifiche"]) > 0) : ?>
      <table class="table text-center">
        <thead class="table-dark">
          <tr>
            <td> Id </td>
            <td>Data</td>
            <td>Messaggio</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($templateParams["notifiche"] as $notifica) : ?>
            <tr>
              <td><?php echo $notifica["id"]; ?> </td>
              <td> <?php echo $notifica["data"]; ?> </td>
              <td> <?php echo $notifica["messaggio"]; ?> </td>
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
  <div class="col-lg-2 col-md-1"></div>
</div>