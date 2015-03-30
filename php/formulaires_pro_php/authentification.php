<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Module d'authentification</title>

		<!-- Mise en place du charset -->
        <meta charset="UTF-8" />

        <!-- Icone du site-->
        <link href="../../css/images_css/blason.png" type="image/png" rel="icon" />

        <!-- Métadonnées -->
        <meta name="author" content="Anne-Cécile Schreiner, Clément Cros, Constance Le Roux, Domitille Guerrier de Dumast, Marie Guyot" />
	</head>
	<body>
		<?php
			require '../../connexion.php';

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
				$pw_usager= crypt($pw_usager, "lam");

				//Envoi de la requête SQL
				$results=$idcom->query("SELECT * FROM utilisateur WHERE mail LIKE '$email_usager' AND motdepasse LIKE '$pw_usager' LIMIT=1");

				if ($results->num_rows==0) 
				{
					echo "<a href='../pages_php/page_pro.php'/>";  
				}
				else {
					echo "Vous n'avez pas le droit d'accéder à cette partie du site.";
				}
			}

			//Deconnexion
			$idcom->close ();
		?>
		
	</body>
</html>