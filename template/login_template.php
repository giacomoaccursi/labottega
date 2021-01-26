<div class="row text-center">
    <div class="col-md-2 col-lg-4"></div>
    <div class="col-12 col-md-8 col-lg-4 login-card nopadding">
        <div class="card col-12 login-card">
            <div class="login-box text-center">
                <div class="login-snip text-center"> 
                <?php if(isset($templateParams["erroreEmail"])): ?>
                              <p><?php echo $templateParams["erroreEmail"]; ?></p>
                <?php endif; ?>     
                <i class="fas fa-user fa-2x mr-md-3"></i>
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab ml-3">Accedi</label>
                 <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab ml-3">Registrati</label>
                    <div class="login-space">
                        <div class="login">
                        <form action="login.php?action=login" method="POST">
                        <?php if(isset($templateParams["errorelogin"])): ?>
                              <p class="my-3"><?php echo $templateParams["errorelogin"]; ?></p>
                            <?php endif; ?>
                            <div class="group "> <label for="email" class="label mt-3 mb-0">Email</label> <input type="email"  id="email" name="email" class="input col-10" placeholder="Inserisci la tua email" required  autocomplete="on"/> </div>
                            <div class="group "> <label for="pass" class="label mt-4 mb-0 pb-3">Password</label> <input type="password" id="pass" name="pass" class="input col-10 mb-3" data-type="password" placeholder="Inserisci la tua password" required /> </div>
                            <a href="password_reset.php">Password dimenticata ?</a>
                            <div class="group"> <input type="submit" name="submit" class="button mt-1 pt-2 col-5 " value="accedi"></div>
                            <div class="hr"></div>
                        </form>
                        </div>
                        <div class="sign-up-form">  
                        <form action="login.php?action=register" method="POST">
                             <div class="group"> <label for="nome" class="label mt-3">Nome</label> <input id="nome" name="nome" type="text" class="input col-10" placeholder="Inserisci il tuo nome" required/> </div>
                             <div class="group"> <label for="cognome" class="label mt-3">Cognome</label> <input id="cognome" name="cognome" type="text" class="input col-10" placeholder="Inserisci il tuo cognome" required /> </div>
                            <div class="group"> <label for="email" class="label mt-3">Email</label> <input id="email" name="email" type="email" class="input col-10" placeholder="Inserisci la tua email" required /> </div>
                            <div class="group"> <label for="pass_1" class="label mt-3">Password</label> <input id="pass_1" name="pass_1" type="password" class="pass_1 input col-10" data-type="password" placeholder="Inserisci la tua password" required /> </div>
                            <div class="group"> <label for="pass_2" class="label mt-3">Ripeti Password</label> <input id="pass_2" name="pass_2" type="password" class="pass_2 input col-10" data-type="password" placeholder="Ripeti la tua password" required/> </div>
                            <div class="group"> <input type="submit" class="button mt-3 pt-2 col-5" value="registrati"> </div>
                            <div class="hr"></div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-lg-4"></div>
</div>