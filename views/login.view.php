
        <?php $title = "Connexion";?>
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

          <!-- Custom CSS -->
  <link href="../uit/dist/css/sb-admin-2.css" rel="stylesheet">
   <!-- Custom Fonts -->
  <link href="../uit/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body id="page-top">
       
        <!-- Masthead-->
        
        <header class="masthead">

            <div class="container px-4 px-lg-5 h-100 well">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center well ">
                    <div class="col-lg-8 align-self-end">

                    <fieldset>   <legend> <h1 class="text-white font-weight-bold text-center">Connexion</h1></legend>
                        <hr class="divider" />
                    </div >
                <?php include 'partials/_errors.php';?>

                    <form action="login.php" method="post" class="well col-md-6" autocomplete="off">
                        <!--Identifiant field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="login">Login:</label>
                              <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                                <small style="color: red">*</small>
                              </span>
                            <input type="text" name="login" class="form-control" id="login" autofocus required >   

                        </div>

                        
                           <!--Password field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="password" >Password:</label>
                             <span class="input-group-addon">
                                 <i class="fa fa-key"></i>
                                 <small style="color: red">*</small>
                               </span>
                            <input type="password" name="password" class="form-control" id="password" autofocus placeholder="">
                        </div>

                      
                         
                        <input type="submit" name="submit" class="btn btn-primary btn-login mt-3" value="Connexion">
                     
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

