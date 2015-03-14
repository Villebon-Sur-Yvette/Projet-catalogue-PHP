<html>
	<head>
		<meta charset="UTF-8">
		<title>Inscription</title>
	</head>
	<body>
		<?php
			require '../connexion.php';

			//Les données reçues du formulaire (formulaire_inscription) sont placés dans une variable
			$email_usager=$_POST['email_usager'];
			$pw_usager=$_POST['pw_usager'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];

			//Pour supprimer les espaces avant ou après les données entrées
			$email_usager = trim($email_usager);
			$pw_usager = trim($pw_usager);
			$nom = trim($nom);
			$prenom = trim($prenom);

			//Test pour vérifier que les données entrées ne sont pas vides
			if ($email_usager="" or $pw_usager="" or $nom="" or $prenom="") {
				echo "Tous les champs ne sont pas remplis";
			}
			else {
				//contrôle de la longueur du password
				if (strlen($pw_usager)<6) {
					echo "Mot de passe trop court";
			}
			else {
				//cryptage du password 
				$pw_usager= crypt($pw_usager, "lam");

				//Envoi de la requête SQL
				$idcom->query("INSERT INTO utilisateur (mail, motdepasse, nom, prenom) VALUES ('$email_usager', '$pw_usager', '$nom', '$prenom')");
			}
			}

			//Deconnexion
			$idcom->close ();
		?>
	</body>
</html>