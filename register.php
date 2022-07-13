<?php
session_start();

include('filters/guest_filter.php');
require('config/db.php');
require('include/functions.php');
require('include/constants.php');

//Si le formulaire a été soumis
if (isset($_POST['register'])) {

	//Si tous les champs ont été remplis
	if (not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])) {

		$errors = []; //Tableau contenant l'esemble des erreurs

		extract($_POST);

		if (mb_strlen($pseudo) < 3) {
			$errors[] = "Pseudo trop court! (Minimum trois(3) caractère)";
		}//fin if

		if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[] = "Adresse email invalid!";
		}//fin if

			if (mb_strlen($password) < 6) {
			$errors[] = "Password trop court! (Minimum six(6) caractère)";
		}else{
			if($password != $password_confirm){
				$errors[] = "Les deux password ne concordent pas!";
			}//fin if
		}//fin else

    if (is_already_in_use('pseudo', $pseudo, 'users')) {
     	$errors[] = "Pseudo déjas utilisé!";
     }// fin if

       if (is_already_in_use('email', $email, 'users')) {
     	$errors[] = "Adresse E-mail déjas utilisé!";
     }// fin if

     if (count($errors) == 0) {
     	// Envoi d'un mail d'activation
     	$to = $email;
     	$subject = WEBSITE_NAME. "- ACTIVATION DE COMPTE";
     	$password = sha1($password);
     	$token = sha1($pseudo.$email.$password);

     	ob_start();
     	require ('templates/emails/activation.tmpl.php');
     	$content = ob_get_clean();

     	$headers = 'MINE-Version: 1.0'. "\r\n";
     	$headers = 'Content-type: text/html; charset = iso-8859-1'. "\r\n";
     	mail($to, $subject, $content, $headers); 

     	//Informer l'utilisateur de verifier sa boite de reception
     	set_flash("Mail d'activation envoye!", 'success');
     	$query = $db->prepare('insert into users(name, pseudo,email, password) values(:name, :pseudo, :email, :password) ');
     	$query->execute(['name' => $name, 'pseudo' => $pseudo, 'email' => $email, 'password' => sha1($password)
     ]);
     	redirect('index.php');
     }else{
     	save_input_data();
     }


	}else{
		$errors[] = "s'il vous plaît veuilllez remplir tous les champs! ";
			save_input_data();

	}

}else{
	clear_input_data();
}
?>
<?php
require('views/register.view.php');
?> 