<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Module de création des notices</title>

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

			//Les données reçues du formulaire sont placés dans une variable
			$nomauteur=$_POST['nomauteur'];
			$prenomauteur=$_POST['prenomauteur'];
			$titre=$_POST['titre'];
			$soustitre=$_POST['soustitre'];
			$editeur=$_POST['editeur'];
			$lieuedition=$_POST['lieuedition'];
			$dateedition=$_POST['dateedition'];
			$cote=$_POST['cote'];
			$isbn=$_POST['isbn'];
			$langue=$_POST['langue'];
			$langueorig=$_POST['langueorig'];
			$theme=$_POST['theme'];
			$rayon=$_POST['rayon'];

			//Pour supprimer les espaces avant ou après les données entrées
			$nomauteur=trim($nomauteur);
			$prenomauteur=trim($prenomauteur);
			$titre=trim($titre);
			$soustitre=trim($soustitre);
			$editeur=trim($editeur);
			$lieuedition=trim($lieuedition);
			$dateedition=trim($dateedition);
			$cote=trim($cote);
			$isbn=trim($isbn);
			$langue=trim($langue);
			$langueorig=trim($langueorig);
			$theme=trim($theme);
			$rayon=trim($rayon);

			//Test pour vérifier que les données entrées ne sont pas vides
			if ($nomauteur="" 
				or $prenomauteur=""
				or $titre=""
				or $soustitre=""
				or $editeur=""
				or $lieuedition=""
				or $dateedition=""
				or $cote=""
				or $isbn=""
				or $langue=""
				or $langueorig=""
				or $theme=""
				or $rayon="") 
			{
				echo "Tous les champs ne sont pas remplis";
			}
			else {
				
				//Envoi de la requête SQL
				$idcom->query("INSERT INTO document (titre, soustitre, editeur, lieuedition, dateedition, isbn, cote),
										   auteur (nomauteur, prenomauteur),
										   langueoriginale (intitule),
										   langue (intitule), 
										   type (intitule)
							   VALUES ('$titre',
							   		   '$soustitre',
							   		   '$editeur',
							   		   '$lieuedition',
							   		   '$dateedition',
							   		   '$isbn',
							   		   '$cote',
							   		   '$nomauteur',
							   		   '$prenomauteur',
							   		   '$langueorig',
							   		   '$langue',
							   		   '$rayon'
							   ");

				if ($idcom->num_rows==1) 
				{
					echo "<a href='../pages_php/page_pro.php'/>";  
				}
				else {
					echo "L'opération a échoué...";
				}
			}

			//Deconnexion
			$idcom->close ();
		?>
		
	</body>
</html>