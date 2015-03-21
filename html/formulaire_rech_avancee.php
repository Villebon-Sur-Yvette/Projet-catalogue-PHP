<!DOCTYPE html>
<html lang="fr">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulaire recherche avancée</title>
		<meta name="author" content="Marie Guyot"/>
        <link href="../css/css_formulaire_recherche_avancee.css" rel="stylesheet" />
        <link href="../css/invariants.css" rel="stylesheet" />

	</head>
	<body>
        <!-- div qui contient l'ensemble du site web -->
        <div class="conteneur">
<!-- header -->
<?php include("./invariants/header.php") ?>

<!-- menu : présentation, aide, catalogue, accès réservé -->
<?php include("./invariants/menu2.php") ?>

<!-- Encart gauche avec la recherche : supprimé, mise en place d'un lien vers recherche simple -->

    <section id="avancee">
	<h2>Recherche avancée</h2>
	<!--différents encarts pour une recherche croisée-->
	<form action="../interrogation_rech_avancee.php"  method="POST"> 
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
		</select>

		
		<!--champ de recherche 3-->
		<input type="text" name="recherche_3"/>
		</br>
	    </br>
		
		<input type ="submit" value="Chercher"/> 
		<input type ="reset"/>
	</form>
	<h4><a href="recherche_easy.php">Faire une recherche simple</a></h2> <!-- liens à faire -->
  </section>

<!-- footer -->
<?php include("./invariants/footer.php") ?>
    </div>
	</body>
</html>
