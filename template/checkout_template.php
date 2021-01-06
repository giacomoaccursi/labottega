<div class="container">
    <div class="py-5 text-center">
        <h2>Checkout</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 order-md-1">
            <h4 class="mb-3">Indirizzo di spedizione</h4>
            <form id="checkout-form" class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="" value="" required/>
                        <div class="invalid-feedback"> Questo campo è obbligatorio.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cognome">Cognome</label>
                        <input type="text" class="form-control" id="cognome" placeholder="" value="" required/>
                        <div class="invalid-feedback"> Questo campo è obbligatorio. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="indirizzo">Indirizzo</label>
                    <input type="text" class="form-control" id="indirizzo" placeholder="" required/>
                    <div class="invalid-feedback"> Questo campo è obbligatorio. </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="città">Città</label>
                        <input type="text" class="form-control" id="città" placeholder="" required/>
                        <div class="invalid-feedback">Questo campo è obbligatorio. </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="stato">Stato</label>
                        <input type="text" class="form-control" id="stato" placeholder="" required/>
                        <div class="invalid-feedback">Questo campo è obbligatorio. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cap">Cap</label>
                        <input type="text" class="form-control" id="cap" placeholder="" required/>
                        <div class="invalid-feedback"> Questo campo è obbligatorio. </div>
                    </div>
                </div>
                <hr />
                <h4 class="mb-3">Pagamento</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">PayPal</label>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Concludi Pagamento</button>
            </form>
        </div>
    </div>
</div>