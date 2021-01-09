<div class="container">
    <div class="py-5 text-center">
        <h2>Checkout</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 order-md-1">
            <h4 class="mb-3">Indirizzo di spedizione</h4>
            <form action="checkout.php?payed=1" method="POST" id="checkout-form" class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="" value="" required />
                        <div class="invalid-feedback"> Questo campo è obbligatorio.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cognome">Cognome</label>
                        <input type="text" class="form-control" name="cognome" id="cognome" placeholder="" value="" required />
                        <div class="invalid-feedback"> Questo campo è obbligatorio. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="indirizzo">Indirizzo</label>
                    <input type="text" class="form-control" name="indirizzo" id="indirizzo" placeholder="" required />
                    <div class="invalid-feedback"> Questo campo è obbligatorio. </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="città">Città</label>
                        <input type="text" class="form-control" name="città" id="città" placeholder="" required />
                        <div class="invalid-feedback">Questo campo è obbligatorio. </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="nazione">Nazione</label>
                        <input type="text" class="form-control" name="nazione" id="nazione" placeholder="" required />
                        <div class="invalid-feedback">Questo campo è obbligatorio. </div>
                    </div>
                </div>
                <hr />
                <h4 class="mb-3">Pagamento</h4>
                <div class="d-block my-3">
                    <?php foreach($templateParams["pagamenti"] as $pagamento):?>
                    <div class="">
                        <input id="<?php echo $pagamento["id"];?>" value="<?php echo $pagamento["id"];?>" name="metodoPagamento" type="radio" class="" <?php if($pagamento["id"] == 1){echo "checked";}?> >
                        <label class="" for="<?php echo $pagamento["id"];?>"><?php echo $pagamento["nomeCircuito"];?></label>
                    </div>
                    <?php endforeach;?>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Concludi Pagamento</button>
            </form>
        </div>
    </div>
</div>