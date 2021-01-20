<div class="row text-center mt-4">
    <div class="col-md-4"></div>
    <div class="col-12 col-md-4">
        <h2 class="text-center text-bold"> PASSWORD DIMENTICATA?</h2>
        <h3 class="text-center page-title"> STEP-2</h3>
        <p class="mt-3 mb-4 reset-paragraph">Inserisci il codice che ti abbiamo inviato via email</p>
        <form action="#" method="POST">
            <input type="hidden" id="confirmed_email" name="confirmed_email" value="<?php echo $templateParams["email"] ?>">
            <input type="number" id="code" name="code" class="input col-7" placeholder="Inserisci il codice" required autocomplete="TRUE" />
            <input type="submit" name="submit" class="button mt-1 pt-2 col-3  mb-4 btn-search" value="OK">
        </form>
        <a href="password_reset.php">Non ho ricevuto il codice</a>
    </div>
    <div class="col-md-4"></div>
</div>