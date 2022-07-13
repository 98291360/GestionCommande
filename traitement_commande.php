
<?php 
require('include/functions.php');

?>
<?php 
//==============recupère la variable à la BD
$connexion = $GLOBALS['connexion'];

//Si le formulaire a été soumis
if (isset($_POST['submit']) && empty($_POST['id_commande'])) {

    //Si tous les champs ont été remplis
    if (not_empty(['quantite', 'date_commande', 'id_fournisseur', 'id_produit'])) {

$errors = []; //Tableau contenant l'esemble des erreurs

        extract($_POST);
        $result = orderAdd($quantite, 
                            $date_commande, 
                            $id_fournisseur, 
                            $id_produit);
        if ($result == true) {
            $statut = 0;
            $message = "Commande enregistrer avec succès";
            header("location:commandeList.php?message=$message&statut=$statut");
        
}
}
}



 /////////////DELETE Function//////////////////////
if (isset($_GET['id_delete'])) {
    $id_commande = $_GET['id_delete'];
    $result = orderDelete($id_commande);
    if ($result == true) {
        $statut = 1;
        $message = "La commande suppression a ete effectuer avec succès";
        header("location:commandeList.php?message=$message&statut=$statut");
    }else{
             $statut = 0;
             $message = "La suppression a echouer";

             header("location:commandeList.php?message=$message&statut=$statut");
    }
}


//==============recupère la variable à la BD
$connexion = $GLOBALS['connexion'];

//Si le formulaire a été soumis
if (isset($_POST['submit']) && !empty($_POST['id_commande'])) {

    //Si tous les champs ont été remplis
    if (not_empty(['quantite', 'date_commande', 'id_fournisseur', 'id_produit', 'id_commande'])) {

        $errors = []; //Tableau contenant l'esemble des erreurs

        extract($_POST);

        $result = orderUpdate($quantite, 
                            $date_commande, 
                            $id_fournisseur, 
                            $id_produit,
                            $id_commande);
        if ($result == true) {
            $statut = 0;
            $message = "commande modifier avec succès";
            header("location:commandeList.php?message=$message&statut=$statut");
        }
    

        
}

}


?>