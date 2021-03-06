<div class="header-section row align-items-center">
    <div class="col-md-3"></div>
    <div class="col-8 col-md-6">
        <div class="row justify-content-md-center">
            <img id="logo" src="public/img/logo2.png" alt="" />
            <h1 class="pt-4"><a class="text-white" href="index.php" id="title-link">LaBottega</a></h1>
        </div>
    </div>
    <div id="icon-container" class="col-md-3 col-4 text-left text-md-center pt-4">
        <div class="row justify-content-left justify-content-md-center">
            <a href="lista_desideri.php" class="icon-link pr-2 pr-md-3"><i class="white-icon fas fa-heart fa-lg "></i></a>
            <a href="carrello.php" class="icon-link pr-2  pr-md-3"><i class="white-icon fas fa-shopping-cart fa-lg "></i> <span class="badge red cart-quantity"></span></a>
            
            <?php if (isUserLoggedIn()) : ?>
                <a class="dropdown icon-link pr-2 pr-md-3" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="white-icon fas fa-user-circle fa-lg "></i></a>
                <div class="mt-2 dropdown-menu color-white dropdown-menu-right dropdown-info">
                    <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            <?php else : ?>
                <a href="login.php" class="icon-link pr-2  pr-md-3"><i class="white-icon fas fa-user-circle fa-lg "></i></a>
            <?php endif; ?>

        </div>
    </div>
</div>

<!-- 
                NAVBAR
            -->
<div class="row navbar-header">
    <div class="col-12 col-md-12 p-0">
        <div class="header-section row pt-3 nopadding">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <nav class="navbar navbar-expand-md navbar-fixed-top justify-content-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="white-icon fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav text-center col-md-12 nopadding">
                            <?php foreach ($templateParams["categorie"] as $categoria) : ?>
                                <li class="nav-item dropdown col-md-3">
                                    <a class="nav-link text-uppercase" href="prodotti.php?cat=<?php echo $categoria["id"]; ?>"><?php echo $categoria["nome"]; ?></a>
                                    <ul class="dropdown-menu text-center col-12 m-0">
                                        <?php foreach ($templateParams["sottoCategorie"] as $subCategoria) :
                                            if ($subCategoria["idCategoria"] == $categoria["id"]) : ?>
                                                <li>
                                                    <a class="dropdown-item" href="prodotti.php?sub=<?php echo $subCategoria["id"]; ?>"><?php echo $subCategoria["nome"]; ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

                            <?php endforeach; ?>
                            <li class="nav-item col-md-3">
                                <a class="btn nav-link" href="prodotti.php?sales=1"><span class="rounded offerte px-md-5 px-3 py-2 text-white font-weight-bold">OFFERTE</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<!-- 
                SEARCH FORM
            -->
<div class="header-section search-header row py-3">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form class="form-inline justify-content-center" action="prodotti.php" method="GET">
            <label for="cerca" class="hidden-label">Cosa stai cercando?</label>
            <input class="form-control col-9 col-md-7" name="cerca" id="cerca" type="text" placeholder="Cosa stai cercando ?" />
            <button class="btn btn-search" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>