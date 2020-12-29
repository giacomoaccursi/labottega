<div class="row col-12">
  <div class="col-lg-1"></div>
  <div class="dashboard-tab col-lg-10">
    <div class="row ">
      <a href="#Ordini" class="btn tablinks col-3 py-2">ORDINI</a>
      <a href="#Notifiche" class="btn tablinks col-3 py-2">NOTIFICHE</a>
      <a href="#Account" class="btn tablinks col-3 py-2">ACCOUNT</a>
      <a href="logout.php" class="btn tablinks col-3 py-2">LOGOUT</a>
    </div>
  </div>
  <div class="col-lg-1"></div>
</div>
<div class="row text-center pt-4">
  <div class="col-md-1"></div>
  <div id="Ordini" class="text-center col-md-10 col-12 pt-3">
    <h3 class="dashboard-section-title">I miei ordini </h3>
    <?php if (count($templateParams["ordini"]) > 0) : ?>
      <table class=" table text-center col-12">
        <div class="row ">
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
                <td header="totale"><?php echo ($ordine["totaleOrdine"]); ?> €</td>
                <td header="dettagli"><a href="#">Visualizza articoli </a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
    <?php else : ?>
      <p> Non ci sono ordini da visualizzare. </p>
    <?php endif; ?>
  </div>
  <div class="col-md-1"></div>


</div>

<div class="row text-center mt-2 pt-2">
  <div id="Notifiche" class="col-12 text-center pt-3">
    <h3 class="dashboard-section-title">Notifiche</h3>
    <?php if (isset($templateParams["notifiche"]) ) : ?>
      <?php foreach ($templateParams["notifiche"] as $notifica) : ?>
        <p> <?php echo $templateParams["notifiche"]; ?> </p>
      <?php endforeach; ?>
    <?php else : ?>
      <p> Non ci sono notifiche da visualizzare. </p>
    <?php endif; ?>
  </div>
  <div class="col-md-1"></div>
</div>

<div class="row text-center mt-2 pt-2">
  <div id="Account" class="col-12 text-center">
    <h3 class="dashboard-section-title">Account</h3>
    <a href="logout.php" class=" btn btn-dark mt-3" >LOGOUT</a>
    <a href="#" class="btn btn-dark mt-3" >CAMBIA PASSWORD</a>
  </div>
</div>