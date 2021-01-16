<?php if (isset($_SESSION["id"]) && $_SESSION["tipo"] == 1): ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-12 col-md-8 text-center my-4 nopadding">
        <h1>Elenco Clienti</h1>
        <?php if (count($templateParams["clienti"]) > 0) : ?>
            <table class=" table text-center admin-basic-table mt-4">
                <div class="row ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" id="nome"> Nome </th>
                            <th scope="col" id="cognome"> Cognome </th>
                            <th scope="col" id="email"> Email </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($templateParams["clienti"] as $cliente) : ?>
                            <tr class="py-3 my-3">
                                <td header="nome"><?php echo ($cliente["nome"]); ?></td>
                                <td header="cognome"><?php echo ($cliente["cognome"]); ?></td>
                                <td header="email"><?php echo ($cliente["email"]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        <?php else : ?>
            <p> Non ci sono clienti da visualizzare. </p>
        <?php endif; ?>
    </div>
    <div class="col-md-2"></div>
</div>

<?php endif; ?>
