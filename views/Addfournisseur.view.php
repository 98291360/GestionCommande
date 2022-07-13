 
      <?php include('include/constants.php'); ?>
        <!-- Masthead-->
        
   <?php 
   if (isset($_GET['id_modifier'])) {
       $id_fournisseur = $_GET['id_modifier'];
       $critere = "id_fournisseur=$id_fournisseur";
       $result = printFournisseur($critere);
       $row = $result->fetch();
         $id_modifier = $row['id_fournisseur'];
        $nom_modifier = $row['nom'];
        $prenom_modifier = $row['prenom'];
        $telephone_modifier = $row['telephone'];
        $adresse_modifier = $row['adresse'];
        $login_modifier = $row['login'];
   }
  

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
         <link href="css/style.css" rel="stylesheet" />

 

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
                    <fieldset>   <legend> <h1 class="text-white font-weight-bold text-center"> Provider</h1></legend>
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

                    <form name="Myform" action="traitement_fournisseur.php" method="post" class="well col-md-6" autocomplete="off" onsubmit="return Mydocs()" class="Mydocs">
                        <!--Name field-->
                        <div class="form-groupe">

                            <label class="control-label text-white font-weight-bold" for="nom">Nom:</label>
                               <span class="input-group-addon">
                               <i class="fa fa-male"></i>
                             <small>*</small>
                               </span>

                            <input type="text" name="nom" class="form-control" id="nom"  value="<?php if(isset($nom_modifier)) {echo $nom_modifier;} ?>" placeholder="" size="60">                        
                        </div>


                            <!--prenom field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="prenom" >Prenom:</label>
                               <span class="input-group-addon">
                                     <i class="fa fa-male"></i>
                                   <small>*</small>
                               </span>
                            <input type="text" name="prenom" class="form-control" id="prenom"  value="<?php if(isset($prenom_modifier)) {echo $prenom_modifier;} ?>"placeholder=" " size="60">
                        </div>




                           <!--Tel field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="telephone" >Telephone:</label>
                             <span class="input-group-addon">
                              <i class="fa fa-phone-square"></i>
                              <small>*</small>
                               </span>
                            <input type="text" name="telephone"  class="form-control" id="telephone" value="<?php if(isset($telephone_modifier)) {echo $telephone_modifier;} ?>"placeholder=" " size="60">
                        </div>

                        <!--Adresse field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="adresse" >Adresse:</label>
                              <span class="input-group-addon">
                             <i class="fa fa-home fa-fw"></i> 
                              <small>*</small>
                               </span>
                              
                            <input type="text" name="adresse" class="form-control" id="adresse" value="<?php if(isset($adresse_modifier)) {echo $adresse_modifier;} ?>" placeholder="   " size="60"> </div>


                           <!--Login field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="login" >Login:</label>
                              <span class="input-group-addon">
                             <i class="fa fa-key"></i>
                             <small style="color: red">*</small>
                             </span>
                            <input type="password" name="login" class="form-control" id="login"  value="<?php if(isset($login_modifier)) {echo $login_modifier;} ?>" placeholder="   " size="60"> </div>

                           <!--Login_confirme field-->
                        <div class="form-groupe" >
                            <label class="control-label text-white font-weight-bold" for="password" >Password:</label>
                              <span class="input-group-addon">
                             <i class="fa fa-key"></i>
                             <small style="color: red">*</small>
                             </span>
                            <input type="password" name="password" class="form-control" id="password" value="" placeholder="   " size="60"> </div>

                    

                    
                          <a href="fournisseur.php" class="btn btn-success mt-3">Back</a>
                        <input type="submit" name="valider" class="btn btn-primary mt-3" value="valider">
                     
                    </form>
                    </fieldset>
                 
                </div>
            </div>
        </header>
</div>
</header>
<script type="text/javascript">
    
    function Mydocs(){
        var name = document.forms["Myform"]["nom"];
        var prenom = document.forms["Myform"]["prenom"];
        var telephone = document.forms["Myform"]["telephone"];
        var adresse =document.forms["Myform"]["adresse"];
        var login = document.forms["Myform"]["login"];
        var password =document.forms["Myform"]["password"];

        if (name.value == "") {
            alert("Mettez votre nom.");
            name.focus();
            return false;
        }

         if (prenom.value == "") {
            alert("Mettez votre prenom.");
            prenom.focus();
            return false;
        }

         if (telephone.value == "") {
            alert("Mettez votre telephone.");
            telephone.focus();
            return false;
        }

       if (login.value == "") {
            alert("Mettez votre Login.");
            login.focus();
            return false;
        }
        

         if (password.value == "") {
            alert("Mettez votre mot de passe.");
            password.focus();
            return false;
        }
        
       




        return true;
    }
</script>
</body>
</html>