<html>
	<head>
		<meta charset="UTF-8">
		<title>Inscription</title>
	</head>
	<body>
		<?php
			require '../connexion.txt';

			//Les données reçues du formulaire (formulaire_inscription) sont placés dans une variable
			$email_usager=$_POST['email_usager'];
			$pw_usager=$_POST['pw_usager'];

			//Pour supprimer les espaces avant ou après les données entrées
			$email_usager = trim($email_usager);
			$pw_usager = trim($pw_usager);

			//Test pour vérifier que les données entrées ne sont pas vides
			if ($email_usager="" or $pw_usager="") {
				echo "Tous les champs ne sont pas remplis";
			}
			else {
				
				//cryptage du password 
				$pw_usager= crypt($pw_usager, "blup");

				//Envoi de la requête SQL
				$results=$idcom->query("SELECT * FROM usagers where email='$email_usager' and pw='$pw_usager' LIMIT=1");

				if ($results->num_rows==1) {
					echo "Bienvenue dans la partie réservée aux professionnels !";  
				}
				else {
					echo "Vous n'avez pas le droit d'accéder à cette partie du site";
				}
			}

			//Deconnexion
			$idcom->close ();
		?>
	</body>
</html>