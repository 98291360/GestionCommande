  
 
 <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav"  style="background-color: #483737;" >
            <div class="container px-4 px-lg-5"  style="background-color: #483737">
                <a class="navbar-brand text-light" href="index.php"> <?= WEBSITE_NAME;?> </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item <?php set_active('index') ?>" ><a class="nav-link text-light" href="index.php">Homme</a></li>
                        <li class="nav-item <?php set_active('produit') ?>"><a class="nav-link text-light" href="produit.php">Products</a></li>
                        <li class="nav-item <?php set_active('fournisseur') ?>"><a class="nav-link text-light" href="fournisseur.php">Providers</a></li>
                                               <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right" >
        
        
             <li class="nav-item dropdown " >
             <a class="nav-link text-light " href="#"id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-user fa-fw" aria-hidden="true"></i> </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="dropdownId">
                <a class="nav-link text-light " href="login.php"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> LogOut</a>
                </div>
            </li>
        
     </div>
            <!-- /.dropdown-user -->
        
        <!-- /.dropdown -->
    </ul>
                    </ul>

                </div>
            </div>
        </nav>

     