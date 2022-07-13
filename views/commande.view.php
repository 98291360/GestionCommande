
    <?php $title = "Inscription"; ?>
     <?php include('include/constants.php'); ?>

      <?php 
   if (isset($_GET['id_modifier'])) {
       $id_commande = $_GET['id_modifier'];
       $critere = "id_commande=$id_commande";
       $resultat = printCommande($critere);
       $row = $resultat->fetch();
         $id_modifier = $row['id_commande'];
        $quantite_modifier = $row['quantite'];
        $date_modifier = $row['date_commande'];
        $id_fournisseur_modifier = $row['id_fournisseur'];
        $id_produit_modifier = $row['id_produit'];
      
   }
  

    ?>

   <?php 

   $criter = true;
     $result = printFournisseur($criter);
     $data = printProduct($criter);
     
       

    ?>

  
        <!-- Masthead-->

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
          <link href="css/style.css" rel="stylesheet" />

                 <!-- Bootstrap Core CSS -->


  <!-- Custom CSS -->
  <link href="../uit/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../uit/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top">
         <?php include('partials/_nav.php'); ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100 well">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center well ">
                    <div class="col-lg-8 align-self-end">
                    <fieldset>   <legend> <h1 class="text-white font-weight-bold text-center">New Order !</h1></legend>
                        <hr class="divider" />

                    </div >
                       <?php
      if(isset($_GET['message'])){
        $message= $_GET['message'];
        $statut= $_GET['statut'];
        if($statut==0){
          echo "<b style='color:red'>$message</b>";
        } else{
          echo "<b style='color:green'>$message</b>";
        }
      }
      ?>
                <?php include 'partials/_errors.php';?>

                    <form action="traitement_commande.php" method="post" class="well col-md-6" autocomplete="off">
                        <!--Name field-->
                        <div class="form-groupe">

                            <label class="control-label text-white font-weight-bold" for="name">Quantity:</label>
                               <span class="input-group-addon">
                               <i class="fa fa-male"></i>
                             <small>*</small>
                               </span>

                            <input type="text" name="quantite" class="form-control" id="quantite" required="required"  placeholder=" " value="<?php if(isset($quantite_modifier)) {echo $quantite_modifier;} ?>">                        
                        </div>


                            <!--Date field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="date" >Date:</label>
                               <span class="input-group-addon">
                                     <i class="fa fa-date"></i>
                                   <small>*</small>
                               </span>
                            <input type="date" name="date_commande" class="form-control" id="date" required="required" placeholder=" " value="<?php if(isset($date_modifier)) {echo $date_modifier;} ?>">
                        </div>



                           <!--fournisseur field-->
                        <div class="form-groupe">
                           
                          <label class="control-label text-white font-weight-bold" for="date" > Fournisseur:</label>   
                          <span class="input-group-addon">
                               <i class="fa fa-male"></i>
                             <small>*</small>
                               </span><br>
                            <select name="id_fournisseur" type="text" value="<?php if(isset($id_fournisseur_modifier)) {echo $id_fournisseur_modifier;} ?>" style="height:40px; width: 590px" >
                                <option>------selectionner un fournisseur------------</option>
                             <?php foreach ($result as $fournisseur): ?>
                                <option  > <?=  $fournisseur['nom']." ".$fournisseur['prenom'] ?> </option><?php  ?>
                             <?php endforeach ?>
                        
                               </select>
                         
                        </div>

                           <!--Produit field-->
                       <div class="form-groupe">
                           
                          <label class="control-label text-white font-weight-bold" for="date" > Produit:</label><br>
                            <select name="id_produit"  type="text" value="<?php if(isset($id_produit_modifier)) {echo $id_produit_modifier;} ?>" style="height:40px; width: 590px">
                                <option>------selectionner un produit------------</option>
                             <?php foreach ($data as $produit): ?>
                                <option > <?= $produit->libelle; ?> </option>
                             <?php endforeach ?>
                        
                               </select>
                         
                        </div>
                              <a href="commandeList.php" class="btn btn-success mt-3">Back</a>
                        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Valid">
                     
                    </form>
                    </fieldset>
                 
                </div>
            </div>
        </header>
    </body>
          
   

  
        <!-- Services-->
       
        <!-- Portfolio-->

      
        <!-- Call to action-->
       
        <!-- Contact-->
        <?php include('partials/_footer.php'); ?>

