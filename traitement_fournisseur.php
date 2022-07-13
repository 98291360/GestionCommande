
<?php 
require('include/functions.php');

?>
<?php 



 /////////////DELETE Function//////////////////////
if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    $result = deleteFournisseur($id);
    if ($result == true) {
        $statut = 1;
        $message = "La suppression a ete effectuer avec succès";
        header("location:fournisseur.php?message=$message&statut=$statut");
    }else{
             $statut = 0;
             $message = "La suppression a echouer";

             header("location:fournisseur.php?message=$message&statut=$statut");
    }
}





//==============recupère la variable à la BD
$connexion = $GLOBALS['connexion'];

//Si le formulaire a été soumis
if (isset($_POST['valider']) && empty($_POST['id'])) {

    //Si tous les champs ont été remplis
    if (not_empty(['nom', 'prenom', 'telephone', 'adresse', 'login','password'])) {

        $errors = []; //Tableau contenant l'esemble des erreurs

        extract($_POST);


      
      $password = sha1($_POST['password']);

        $result = fournisseurAdd($nom, 
                            $prenom, 
                            $telephone, 
                            $adresse,
                            $login,
                            $password);
        if ($result == true) {
            $statut = 0;
            $message = "Fournisseur enregistrer avec succès";
            header("location:fournisseur.php?message=$message&statut=$statut");
        }
    

        
}

}


//==============recupère la variable à la BD
$connexion = $GLOBALS['connexion'];

//Si le formulaire a été soumis
if (isset($_POST['valider']) && !empty($_POST['id']) && !empty($_POST['login'])) {

    //Si tous les champs ont été remplis
    if (not_empty(['nom', 'prenom', 'telephone', 'adresse', 'login','password','id'])) {

        $errors = []; //Tableau contenant l'esemble des erreurs

        extract($_POST);


        
         
      $password = sha1($_POST['password']);

        $result = fournisseurUpdate($nom, 
                            $prenom, 
                            $telephone, 
                            $adresse,
                            $login,
                            $password,
                             $id);
        if ($result == true) {
            $statut = 0;
            $message = "Fournisseur enregistrer avec succès";
            header("location:fournisseur.php?message=$message&statut=$statut");
        }
    

        
}

}


