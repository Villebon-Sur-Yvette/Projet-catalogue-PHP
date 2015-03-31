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
			$auteur=$_POST['auteur'];
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
			$type=$_POST['type'];

			//Pour supprimer les espaces avant ou après les données entrées
			$auteur=trim($auteur);
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
			$type=trim($type);

			//Test pour vérifier que les données entrées ne sont pas vides
			if ($auteur=="" 
				or $titre==""
				or $editeur==""
				or $lieuedition==""
				or $dateedition==""
				or $cote==""
				or $isbn==""
				or $langue==""
				or $langueorig==""
				or $theme==""
				or $type=="") 
			{
				echo "Tous les champs ne sont pas remplis";
			}
			else {
				
				// Set de l'utf8 pour les caractères spéciaux	
				$idcom->query("SET NAMES UTF8");
				
				$requete_document="INSERT INTO document (titre, soustitre, editeur, lieuedition, dateedition, isbn, cote, id_langue, id_langueoriginale, id_type)
							   VALUES ('$titre',
							   		   '$soustitre',
							   		   '$editeur',
							   		   '$lieuedition',
							   		   '$dateedition',
							   		   '$isbn',
							   		   '$cote',
									   '$langue',
									   '$langueorig',
									   '$type')
							   ";
		   
							   
		

				//Envoi de la requête SQL
				$results_document = $idcom->query($requete_document);
				
				// On récupère l'id du nouveau document créé
				$UID=$idcom->insert_id;
				
				// Insertion dans auteur_document
				$requete_auteur_document = "INSERT INTO auteur_document (id_auteur, id_document)
			   VALUES ('$auteur',
					   '$UID')
			   ";	
				$results_auteur = $idcom->query($requete_auteur_document);
				
				// Insertion dans theme_document
				$requete_theme_document = "INSERT INTO theme_document (id_theme, id_document)
			   VALUES ('$theme',
					   '$UID')
			   ";	
				$results_theme = $idcom->query($requete_theme_document);
				

				if ($results_document==1 and $results_auteur==1 and $results_theme==1) 
				{
					echo "L'insertion a été effectuée avec succès !<br/>";
					echo "<a href='../pages_php/page_pro.php'/>Retour page pro</a>";  
				}
				else {
					echo "L'opération a échoué...";
				}
			}

			//Deconnexion
			$idcom->close();
		?>
		
	</body>
</html>