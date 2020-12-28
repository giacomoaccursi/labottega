<div class="row ">
<div class="dashboard-tab">
  <button class="tablinks" onclick="openSection(event, 'Ordini')" id="defaultOpen">ORDINI</button>
  <button class="tablinks" onclick="openSection(event, 'Notifiche')">NOTIFICHE</button>
  <button class="tablinks" onclick="openSection(event, 'Account')">ACCOUNT</button>
</div>

<div id="Ordini" class="tabcontent">
  <h3>Ordini Recenti</h3>

  <?php  if( count($templateParams["ordini"]) > 0): ?>
  <table class="table nopadding text-center col-9">
  <div class="row p-0 mb-3">
  <tr class="my-3 py-3">
  <th id="id"> IdOrdine </th>
  <th id="data"> Data </th>
  <th id="stato"> Stato ordine </th>
  <th id="totale"> Totale </th>
  <th id="dettagli"> Dettagli ordine </th>
  </tr>
  <?php foreach($templateParams["ordini"] as $ordine): ?>
    <tr class="py-3 my-3">
    <td header="id"><?php echo ($ordine["id"]); ?></td>
    <td header="data"><?php echo ($ordine["dataOrdine"]); ?></td>
    <td header="stato"><?php echo ($ordine["stato"]); ?></td>
    <td header="totale"><?php echo ($ordine["totaleOrdine"]); ?> €</td>
    <td header="dettagli"><a href="#">Visualizza dettagli </a></td>
    </tr>
    <?php endforeach; ?>
  </table>
  </div>
  <?php else: ?>
    <p> Non ci sono ordini da visualizzare. </p>
  <?php endif; ?>

</div>

<div id="Notifiche" class="tabcontent">
  <h3>Notifiche</h3>
</div>

<div id="Account" class="tabcontent">
  <h3>Account</h3>
</div>
</div>