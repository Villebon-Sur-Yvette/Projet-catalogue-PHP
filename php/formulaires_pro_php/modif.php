<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Module de modification des notices</title>

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

		// Réception des données du formulaire précédent et mise en place d'une variable

			$id_document=$_POST['id_document'];
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

		// Requête de modification de la notice

			$idcom->query(" UPDATE  document,
									auteur,
									langueoriginale,
									langue, 
									type 

							SET 	document.titre='$titre',
							   		document.soustitre='$soustitre',
							   		document.editeur='$editeur',
							   		document.lieuedition='$lieuedition',
							   		document.dateedition='$dateedition',
							   		document.isbn='$isbn',
							   		document.cote='$cote',
							   		auteur.nom='$nomauteur',
							   		auteur.prenom='$prenomauteur',
							   		langueoriginale.intitule='$langueorig',
							   		langue.intitule='$langue',
							   		type.intitule='$rayon'
						");


		// Deconnexion

			$idcom->close();

		?>
	</body>
</html>