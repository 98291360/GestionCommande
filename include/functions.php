<?php

require('config/db.php');

/////////////////////////////////////Function Commende Insert///////////////////////////////
function orderAdd(          $quantite, 
	                        $date_commande, 
	                        $id_fournisseur, 
	                        $id_produit, 
	                        ){
	                        //connexion à la base de donnée
	$connexion = $GLOBALS['connexion'];	
	try {
		//demarer une transaction
		$connexion ->beginTransaction();
		$connexion->exec ("INSERT INTO        commande(quantite,
		                                   date_commande,
		                                   id_fournisseur, 
		                                   id_produit) 
			                        VALUES('$quantite', 
			                        	   '$date_commande', 
			                        	   '$id_fournisseur', 
			                        	   '$id_produit')");
			             $connexion ->commit();
			             return true;
	 	
	 } catch (Exception $e) {
	 	$connexion -> rollback();
	 	return $e->getMessage();
	 	
	 } 

}///////////////Fin Function///////////////////////////


/////////////////////////////////////Function Commende update///////////////////////////////
function orderUpdate(      $id_commande,  
                            $quantite, 
	                        $date_commande, 
	                        $id_fournisseur, 
	                        $id_produit, 
	                        ){
	                        //connexion à la base de donnée
	$connexion = $GLOBALS['connexion'];	
	try {
		//demarer une transaction
		$connexion ->beginTransaction();
		$connexion->exec ("UPDATE     commande   SET (quantite = '$quantite',
		                                   date_commande = '$date_commande',
		                                   id_fournisseur =  '$id_fournisseur', 
		                                   id_produit = '$id_produit'
		                                   WHERE id_commande = $id_commande"); 
			                        
			             $connexion ->commit();
			             return true;
	 	
	 } catch (Exception $e) {
	 	$connexion -> rollback();
	 	return $e->getMessage();
	 	
	 } 

}///////////////Fin Function///////////////////////////


////////////////////Order Function Print///////////////
function printCommande($criter){
		$connexion = $GLOBALS['connexion'];
try {
     $connexion -> beginTransaction();

    $result = $connexion->query("SELECT * FROM commande WHERE $criter ORDER BY id_commande DESC");
    
    $connexion->commit();
    return $result;
   
} catch (Exception $e) {
	$connexion ->rollback();
	return $e->getMessage();
	
}

}/////////////END FUNCTION////////////////////////////////

/////////////Delete  Function/////////////////////////////
function orderDelete($id_commande){
	$connexion = $GLOBALS['connexion'];
	try {
		$connexion ->beginTransaction();
		$connexion ->exec("DELETE FROM commande WHERE id_commande = $id_commande");
		$connexion->commit();
		return true;
	} catch (Exception $e) {
		$connexion ->rollback();
		$connexion->getMessage();
	}
}

///////////////////////////////////////TRAITEMENT ///////////////////////////////////////////
///                                         FOURNISSEUR                                   ///
/////////////////////////////////////Function Commende Insert///////////////////////////////
function fournisseurAdd(    $nom, 
	                        $prenom, 
	                        $telephone, 
	                        $adresse, 
	                        $login,
	                        $password
	                        ){
	                        //connexion à la base de donnée
	$connexion = $GLOBALS['connexion'];	
	try {
		//demarer une transaction
		$connexion ->beginTransaction();
		$connexion->exec("INSERT INTO     fournisseur(nom,
		                                   prenom,
		                                   telephone, 
		                                   adresse,
		                                   login,
		                                   password) 
			                        VALUES('$nom', 
			                        	   '$prenom', 
			                        	   '$telephone', 
			                        	   '$adresse',
			                        	   '$login',
			                        	   '$password')");
			             $connexion ->commit();
			             return true;
	 	
	 } catch (Exception $e) {
	 	$connexion -> rollback();
	 	return $e->getMessage();
	 	
	 } 

}///////////////Fin Function///////////////////////////

/////////////////////////////////////Function Commende Insert///////////////////////////////
function fournisseurUpdate(         $id_fournisseur, 
	                        $nom, 
	                        $prenom, 
	                        $adresse,
	                        $login, 
	                        $password
	                        ){
	                        //connexion à la base de donnée
	$connexion = $GLOBALS['connexion'];	
	try {
		//demarer une transaction
		$connexion ->beginTransaction();
		$connexion->exec ("UPDATE     fournisseur   SET (nom = '$nom',
		                                   prenom = '$prenom',
		                                   adresse =  '$adresse', 
		                                   login = '$login',
		                                   password = '$password'
		                                   WHERE id_fournisseur = $id_fournisseur"); 
			                        
			             $connexion ->commit();
			             return true;
	 	
	 } catch (Exception $e) {
	 	$connexion -> rollback();
	 	return $e->getMessage();
	 	
	 } 

}///////////////Fin Function///////////////////////////


////////////////////Function Fournisseur Print///////////////
function printFournisseur($criter){
		$connexion = $GLOBALS['connexion'];
try {
    $connexion -> beginTransaction();

    $result = $connexion->query("SELECT * FROM fournisseur WHERE $criter ORDER BY id_fournisseur DESC");
    
    $connexion->commit();
    return $result;
   
} catch (Exception $e) {
	$connexion ->rollback();
	return $e->getMessage();
	
}

}/////////////END FUNCTION////////////////////////////////


/////////////Delete  Function/////////////////////////////
function deleteFournisseur($id_fournisseur){
	$connexion = $GLOBALS['connexion'];
	try {
		$connexion ->beginTransaction();
		$connexion ->exec("DELETE FROM fournisseur WHERE id_fournisseur = $id_fournisseur");
		$connexion->commit();
		return true;
	} catch (Exception $e) {
		$connexion ->rollback();
		$connexion->getMessage();
	}
}


///////////////////////////////////////TRAITEMENT ///////////////////////////////////////////
///                                         PRODUCT                                      ///
////////////////////////////////////////////////////////////////////////////////////////////

////////////////////Produit Function Print///////////////
function printProduct($criter){
		$connexion = $GLOBALS['connexion'];
try {
    $connexion -> beginTransaction();
$result=$connexion->prepare("SELECT * FROM produit WHERE $criter ORDER BY id_produit DESC");
			$result->execute();
			$data = $result->fetchAll(PDO::FETCH_OBJ);
			return $data;
			$result->closeCursor();
   
} catch (Exception $e) {
	$connexion ->rollback();
	return $e->getMessage();
	
}

}/////////////END FUNCTION////////////////////////////////


//connexion à la base de donnée
	$connexion = $GLOBALS['connexion'];
//check si tous les champ existent et ne sont pas vides
if (! function_exists('not_empty')) {
	function not_empty($fields = []){
		if (count($fields) != 0) {
			foreach ($fields as $field) {
				if (empty($_POST[$field]) || trim($_POST[$field]) == "") {
					return false;
				}//fin if
			}//fin foreach
			return true;
		}//fin if
	}//fin function
}//fin if


if (!function_exists('set_flash')) {
	function set_flash ($message, $type = 'info'){
		$_SESSION['notification']['message'] = $message;
		$_SESSION['notification']['type'] = $type;
	}
}
if(!function_exists('redirect')){
	function redirect($page){
		header('Location:'.$page);
		exit();
	}
}



//Gere l'etat actif de nos differents liens
if(!function_exists('set_active')){
	function set_active($file, $class = 'active'){
		$page == array_pop(explode('/', $_SERVER['SCRIPT_NAME']));
		if ($page == $file.'.php') {
			return $class;
		}else{
			return "";
		}
	}
		
}     



