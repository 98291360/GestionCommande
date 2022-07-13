
        <?php $title = "Accueil";?>
        <?php include('include/constants.php'); ?>
        <!-- Masthead-->
         <?php include('partials/_header.php');
         ?>
<?php
 
$dataPoints = array(
    array("label"=> 2022, "y"=> 19),
    array("label"=> 2021, "y"=> 45),
    array("label"=> 2022, "y"=> 20),
    array("label"=> 2022, "y"=> 30),
    array("label"=> 2021, "y"=> 15),
    array("label"=> 2021, "y"=> 10)
);
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
   <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    //theme: "light2",
    title:{
        text: "Order quantity variation"
    },
    axisX:{
        crosshair: {
            enabled: true,
            snapToDataPoint: true
        }
    },
    axisY:{
        title: "order quantity",
        includeZero: true,
        crosshair: {
            enabled: true,
            snapToDataPoint: true
        }
    },
    toolTip:{
        enabled: false
    },
    data: [{
        type: "area",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
</head>
<body>

      
     <!--Dashboard-->
        <section  style="background-color: #FF9955">
            <div class="container"  style="background-color: #FF9955">
                <div class="row text-light">
                    <span><h1><i class="fa fa-gear" aria-hidden="true"></i>Tableau de bord </h1></span>
                </div>
            </div>
        </section>
    
       <section>
            <div class="container">
                <div class="row pt-5 justify-content-center my-5">
                    <div class="col-12 col-md-9">
                        <div class="card">
                          
                            <div class="card-body justify-content-center">
                       <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3  justify-content-center">
                        <div class="card bg-primary mb-1 text-center">
                            <div class="card-body text-light ">
                                <h4>Commandes</h4>
                                <h1><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php $req = $db->query('SELECT COUNT(id_commande) AS nb_order FROM commande WHERE id_commande != ""') or die(print_r($db->errorInfo()));
                                $donne = $req -> fetch(); echo $donne['nb_order'];  ?></h1>
                              <a href="commandeList.php" type="button" class="btn btn-transeparent border-light text-light">View</a>
                            </div>

                        </div>
                        <div class="card bg-success mb-1 text-center ">
                            <div class="card-body text-light ">
                                <h4>Produits</h4>
                                <h1><i class="fa fa-first-order" aria-hidden="true"></i></i>  <?php $req = $db->query('SELECT COUNT(id_produit) AS nb_produit FROM produit WHERE id_produit != ""') or die(print_r($db->errorInfo()));
                                $donne = $req -> fetch(); echo $donne['nb_produit'];  ?></h1>
                              <a href="produit.php" type="button" class="btn btn-transparent border-light text-light">View</a>
                            </div>
                        </div>
                        <div class="card bg-warning text-center justify-content-center">
                            <div class="card-body text-light ">
                                <h4>Fournisseurs</h4>
                                <h1><i class="fa fa-users" aria-hidden="true"></i><?php $req = $db->query('SELECT COUNT(login) AS nb_fournisseur FROM fournisseur WHERE login != ""') or die(print_r($db->errorInfo()));
                                $donne = $req -> fetch(); echo $donne['nb_fournisseur'];  ?></h1>
                                <a href="fournisseur.php" type="button" class="btn btn-transparent border-light text-light">View</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>


</body>
 
                                    <?php include('partials/_footer.php'); ?>


</html>
            

        <!-- Services-->
       
        <!-- Portfolio-->

      
        <!-- Call to action-->
       
        <!-- Contact-->
  

