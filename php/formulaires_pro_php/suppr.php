<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Module de suppression des notices</title>

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

		// Requête de suppression de la notice

			$idcom->query("DELETE FROM document WHERE $id_document='$id_document'");

		// Deconnexion

			$idcom->close();

		?>
	</body>
</html>
