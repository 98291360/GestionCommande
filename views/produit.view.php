
        <?php $title = "Accueil";?>
        <?php include('include/constants.php'); ?>
        <!-- Masthead-->
        
   <?php 

   $criter = true;
     $data = printProduct($criter);
       

    ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
         <?= isset($title)
            ? $title . WEBSITE_NAME
            : WEBSITE_NAME. ',Simple, Rapide et Efficace!';
        ?>
        </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/main.css">

 

  <!-- Custom Fonts -->
  <link href="../uit/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top">

         <?php include('partials/_nav.php'); ?>

        <!-- Masthead-->
        <header class="masthead" style="height: 30px;">
            <div class="container px-4 px-lg-3 h-30" style="height: 30px;">
                <?php include('partials/_flash.php'); ?>
                <div class="row gx-4 gx-lg-3 h-30 align-items-center justify-content-center text-center" style="height: 30px;">

                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"><?= WEBSITE_NAME;?> ?</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"> <?= WEBSITE_NAME;?> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum  .</p>

                        
                        <a class="btn btn-primary btn-lg" href="#services">New Commande</a>
                    </div>
                </div>
            </div>
        </header>
        
    </body>
          
      
   
        <h2 class="text-center mt-0 "  id="services">Nos Produits</h2>
                <hr class="divider" />
 <div class="card shadow-sm" >

     <div class="card-body">

        <div class="container px-4 px-lg-5">
      <div class="row">
          <?php foreach($data as $produit):?>
                    <div class="col-lg-4 text-center mt-3 ">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle h-50 w-50" src="  <?php echo $produit->image; ?>" style="height: 150px ; width: 150px;" >
                                <h4 class="mt-2"><?= $produit->libelle;?></h4>

                               <p class="text-muted"><?= substr($produit->description, 0, 200); ?></p>
                              
                         
                             <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                      
                                  
                                     
                                    </div>
                                    <small class="text-muted"><b>Prix:</b> <?= $produit->prix;?> cfa</small>
                                    <b>
                                        <small>Stock:<?= $produit->stock ; ?></small>
                                    </b>
                                     <a href="commande.php" class="btn btn-primary btn-lg"> Add </a>
                             </div>

                             <div  class="mt-3">

                           
                            </div>
                        </div>
                    </div>

         <?php endforeach;?>
        
        <!-- Services-->
       
        <!-- Portfolio-->

      
        <!-- Call to action-->
       
        <!-- Contact-->
        <?php include('partials/_footer.php'); ?>

