<?php

require('include/functions.php');
require('include/constants.php');

//Si le formulaire a été soumis
if (isset($_POST['submit']) && isset($_POST['login']) && isset($_POST['password']) ) {

                 $login = $_POST['login'];
		$password = sha1($_POST['password']);

	
$sql="SELECT * FROM fournisseur WHERE login ='".$login."' and password='".$password."' limit 1";
$result = $connexion->exec([$sql]);
$nbr = $result->rowCount();
if ($nbr==1) {
	//Les informations de l'utilisateur
			$row  = $result->fetch();
			$id_fournisseur = $row['id_fournisseur'];
			$nom     = $row['nom'];
			$prenom  = $row['prenom'];


			//Utilisatio des session demarre la session//////////
			session_start();//demarrer la session

			$_SESSION['id_fournisseur']  = $id_fournisseur;
			$_SESSION['nom']  = $nom;
			$_SESSION['prenom'] = $prenom;
			$_SESSION['adresse'] = $adresse;
			$_SESSION['login'] = $login;
			$_SESSION['password'] = $password;
			
	echo "You have Successfully Legged in";
	header("index.php");
}else{
	echo "You have Entered Incorrect Password";
	header("login.php");
}

}

?>
<?php require "views/login.view.php";?>
