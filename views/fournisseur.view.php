
        <?php $title = "Accueil";?>
        <?php include('include/constants.php'); ?>
        <!-- Masthead-->
        
   <?php 
 

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
        <header class="masthead" style="height: 15%;">
            <div class="container px-4 px-lg-3 " style="height: 15%;">
                <?php include('partials/_flash.php'); ?>
                <div class="row gx-4 gx-lg-3  align-items-center justify-content-center text-center" style="height: 15%;">

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

                        
                        <a class="btn btn-primary btn-lg" href="produit.php">New Commande</a>
                    </div>
                </div>
            </div>
        </header>
        
    
                        
    
       
       <section>
            <div class="container">
                <div class="row pt-5 justify-content-center my-5">
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h3>Provider List</h3>
                            </div>
                            <div class="card-body justify-content-center">
             <table id="example" class='table  table-bordered table-stripedtable-condensed' style="font-size:12px;">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th> Telephone </th>
                        <th> Adresse </th>
                        <th> Login </th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                      <?php

          //====liste des utilisateurs=========
        // ========la valeur par defaut est true========
        $critere = true;

        $result = printFournisseur($critere);
        $i = 0;
        foreach ($result as $row) {
          $id = $row['id_fournisseur'];
        ?>
           <tr>
              <td><?php echo $i++;?></td>
              <td><?php echo $row['nom']; ?></td>
              <td><?php echo $row['prenom']; ?></td>
              <td><?php echo $row['telephone']; ?></td>
              <td><?php echo $row['adresse']; ?></td>
              <td><?php echo $row['login']; ?></td>
              <td>
                <a href="traitement_fournisseur.php?
                id_delete=<?=$id;?>" onclick="return confirm('Confirmer la suppression!')"  title="Supprimer un Fournisseur" 
                   class="supprimer">
                    <i class="fa fa- fa-trash-o"
                      style="color: red;"></i>
                </a>
                    |
                <a href="Addfournisseur.php?id_modifier=<?=$id;?>" title="Modifier un Fournisseur ">
                      <i class="fa fa-edit"
                      style="color:green;"></i>
                </a>
              </td>
           </tr>
        <?php } ?>
                    <!-- } -->
                </tbody>

            </table>
            <a href="index.php" class="btn btn-success">Back</a>
              <a href="Addfournisseur.php" class="btn btn-primary">Add</a>
        </div>
    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

</body>
</html>
        
        <!-- Services-->
       
        <!-- Portfolio-->

      
        <!-- Call to action-->
       
        <!-- Contact-->
        <script type="text/javascript">
  $(document).ready(function(){
    $(".supprimer").click(function(){
        if(!confirm("Vous voulez terminé cette suppression")){
          return false;
        }
    });




  });
</script>
</script>


  <script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
  $('#example').dataTable( {
  "iDisplayLength": 5,
  "aLengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "Tout"]],
  "sPaginationType": "full_numbers"
  });





  }); 
  </script>
        <?php include('partials/_footer.php'); ?>

