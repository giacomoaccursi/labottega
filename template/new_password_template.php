<div class="row text-center mt-4">
    <div class="col-md-4"></div>
    <div class="col-12 col-md-4">
        <h2 class="text-center text-bold"> INSERISCI UNA NUOVA PASSWORD</h2>
        <h3 class="text-center page-title"> STEP 3 </h3>
        <div class="new-password-form">
        <form action="#" method="POST">
            <input type="hidden" id="confirmed_email" name="confirmed_email" value="<?php echo $templateParams["email"] ?>">
            <div class="col-12"><input type="password" id="pass_1" name="pass_1" class="input col-8 mt-4" placeholder="Inserisci la nuova password" required/></div>
            <div class="col-12"> <input type="password" id="pass_2" name="pass_2" class="input col-8 mt-2 mb-2" placeholder="Ripeti la nuova password" required/> </div>
            <input type="submit" class="button mt-3 pt-2 col-3 btn-search" value="OK"> 
        </form>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>