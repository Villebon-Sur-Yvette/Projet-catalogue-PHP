<!DOCTYPE html>
<html lang="fr">

    <head>

        <!-- Mise en place du charset -->
        <meta charset="UTF-8" />

        <!-- Icone du site-->
        <link href="../../css/images_css/blason.png" type="image/png" rel="icon" />

        <!-- Métadonnées -->
        <meta name="author" content="Anne-Cécile Schreiner, Clément Cros, Constance Le Roux, Domitille Guerrier de Dumast, Marie Guyot" />
        <meta name="keywords" lang="fr" content="catalogue bibliothèque Villebon-sur-Yvette " />
        <meta name="Description" content="Site internet de la bibliothèque municipale de Villebon-sur-Yvette " />
        
        <!-- Titre de la page -->
        <title>Recherche simple du catalogue de la bibliothèque de Villebon-sur-Yvette</title>

        <!-- Liens CSS -->
        <link href="../../css/invariants.css" rel="stylesheet" />
        <link href="../../css/recherche_simple.css" rel="stylesheet" />
   
    </head>

	<body>
	<div class="conteneur">

		<!-- header -->
		<?php include("../invariants/header.php") ?>

		<!-- menu 2 : avec retour page accueil -->
		<?php include("../invariants/menu2.php") ?>


	<!-- Encart gauche avec la recherche : supprimé -->


	<section class="rechercheeasy"> <!-- reprise du code utilisé pour l'encart de recherche simple -->

	<aside>
	<h2>Recherche simple</h3>

	<!--formulaire recherche simple avec 2 boutons "envoyer" et "effacer"-->
	<div id="caserecherche">
		<form action="interrogation_rech_simple.php" method="POST"> <!--revoir le chemin accès-->
			<input type ="text" name="recherche_simple"/>
			<br/>
			<input type ="submit" value="Chercher"/>
			<input type ="reset" value="Effacer"/>
		</form>
	</div>
	<h4><a href="formulaire_recherche_avancee.php"> Recherche avancée<a></h4>
	</aside>

	<!-- illustration -->
	<aside class="illustration">
  		<figure>
  			<img src="../../css/images_css/livre_recherche_simple.jpg"/>
  		</figure>
	</aside>

	</section>

	<!-- footer -->
	<?php include("../invariants/footer.php") ?>

	</div>
	</body>
</html>
