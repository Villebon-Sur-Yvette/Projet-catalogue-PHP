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
        <title>Recherche professionnelle de la bibliothèque municipale de Villebon-sur-Yvette</title>

        <!-- Liens CSS -->
        <link href="../../css/recherche_avancee.css" rel="stylesheet" />
        <link href="../../css/style_pro.css" rel="stylesheet" />

    </head>

	<body>
        <!-- div qui contient l'ensemble du site web -->
        <div class="conteneur">

		<!-- header -->
		<?php include("../invariants/header_pro.php") ?>

		<!-- menu : présentation, aide, catalogue, accès réservé -->
		<?php include("../invariants/menu_pro.php") ?>

		<!-- illustration -->
  		<aside>
  			<figure>
  				<img src="../../css/images_css/tour_livres.jpg"/>
  			</figure>
  		</aside>

  	<section id="avancee">
		<h2>Recherche professionnelle</h2>

		<!--différents encarts pour une recherche croisée-->
		<form action="interrogation_rech_avancee_pro.php"  method="POST"> 
		<!--liste déroulante 1 -->
		<select name="select_choix_1">
			<option value="titre" selected>Titre</option>
			<option value="soustitre">Sous-titre</option>
			<option value="auteur">Auteur</option>
			<option value="theme">Thème</option>
			<option value="editeur">Editeur</option>
			<option value="genre">Genre</option>
			<option value="type">Type</option>
			<option value="support">Support</option>
			<option value="cote">Cote</option>
			<option value="isbn">ISBN</option>
			<option value="langue">Langue</option>
		</select>
		
		<!--champ de recherche 1-->
		<input type="text" name="recherche_1"/>
		
		<!--liste déroulante et/ou-->
		<select name="select_operateur_1">
			<option value="and">Et</option>
			<option value="or">Ou</option>
		</select>
		</br>
		
		<!--liste déroulante 2 -->
		<select name="select_choix_2">
			<option value="titre">Titre</option>
			<option value="soustitre">Sous-titre</option>
			<option value="auteur" selected>Auteur</option>
			<option value="theme">Thème</option>
			<option value="editeur">Editeur</option>
			<option value="genre">Genre</option>
			<option value="type">Type</option>
			<option value="support">Support</option>
			<option value="cote">Cote</option>
			<option value="isbn">ISBN</option>
			<option value="langue">Langue</option>
		</select>
		
		<!--champ de recherche 2-->
		<input type="text" name="recherche_2"/>
		
		
		<!--liste déroulante et/ou-->
		<select name="select_operateur_2">
			<option value="and">Et</option>
			<option value="or">Ou</option>
		</select>
		</br>
		
		
		<!--liste déroulante 3 -->
		<select name="select_choix_3">
			<option value="titre">Titre</option>
			<option value="soustitre">Sous-titre</option>
			<option value="auteur">Auteur</option>
			<option value="theme" selected>Thème</option>
			<option value="editeur">Editeur</option>
			<option value="genre">Genre</option>
			<option value="type">Type</option>
			<option value="support">Support</option>
			<option value="cote">Cote</option>
			<option value="isbn">ISBN</option>
			<option value="langue">Langue</option>
		</select>

		
		<!--champ de recherche 3-->
		<input type="text" name="recherche_3"/>

		</br>
	    </br>
		
		<input type ="submit" name="submit" value="Chercher"/> 
		<input type ="reset"/>
	</form> 
  
  </section>
  
	<!-- footer -->
	<?php include("../invariants/footer.php") ?>
	
    </div>
	</body>
</html>
