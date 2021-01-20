<div class="row text-center mt-4">
    <div class="col-md-4"></div>
    <div class="col-12 col-md-4">
        <h2 class="text-center text-bold"> PASSWORD DIMENTICATA?</h2>
        <h3 class="text-center page-title"> STEP 1</h3>
        <p class="mt-3 mb-4 reset-paragraph">Inserisci qui il tuo indirizzo email e ti invieremo un codice per reimpostare la tua password</p>
        <form action="#" method="POST">
            <input type="email" id="email" name="email" class="input col-7" placeholder="Inserisci la tua email" required autocomplete="TRUE" />
            <input type="submit" name="submit" class="button mt-1 pt-2 col-3  btn-search" value="Invia">
        </form>
        <?php if (isset($templateParams["erroreEmail"])) : ?>
            <p><?php echo $templateParams["erroreEmail"]; ?></p>
        <?php endif; ?>
    </div>
    <div class="col-md-4"></div>
</div>