<!DOCTYPE html>
<html lang="fr">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulaire recherche avancée</title>
		<meta name="author" content="Marie Guyot"/>
        <link href="../css/css_projet_biblio.css" rel="stylesheet" />
	</head>
	<body>
        <!-- div qui contient l'ensemble du site web -->
        <div class="conteneur">
<!-- header -->
<?php include("./invariants/header.php") ?>

<!-- menu : présentation, aide, catalogue, accès réservé -->
<?php include("./invariants/menu2.php") ?>

<!-- Encart gauche avec la recherche -->
<?php include("./invariants/recherche.php") ?>

    <section id="avancee">
	<h2>Recherche avancée</h2>
	<!--différents encarts pour une recherche croisée-->
	<form action=".php"  method="POST"> <!--il manque le fichier php bien sûr-->
	<!--liste déroulante 1 -->
		<select name="select_1">
			<option value="titre" selected>Titre</option>
			<option value="auteur">Auteur</option>
			<option value="theme">Thème</option>
			<option value="editeur">Editeur</option>
			<option value="genre">Genre</option>
			<option value="type">Type</option>
			<option value="cote">Cote</option>
		</select>
		<input type="text" name="recherche_1"/>
		<!--liste déroulante et/ou-->
		<select name="select_et_ou">
			<option>Et</option>
			<option>Ou</option>
		</select>
		</br>
		
		<!--liste déroulante 2 -->
		<select name="select_2">
			<option value="titre">Titre</option>
			<option value="auteur" selected>Auteur</option>
			<option value="theme">Thème</option>
			<option value="editeur">Editeur</option>
			<option value="genre">Genre</option>
			<option value="type">Type</option>
			<option value="cote">Cote</option>
		</select>
		<input type="text" name="recherche_1"/>
		<!--liste déroulante et/ou-->
		<select name="select_et_ou">
			<option>Et</option>
			<option>Ou</option>
		</select>
		</br>
		
		<!--liste déroulante 3 -->
		<select name="select_3">
			<option value="titre">Titre</option>
			<option value="auteur">Auteur</option>
			<option value="theme" selected>Thème</option>
			<option value="editeur">Editeur</option>
			<option value="genre">Genre</option>
			<option value="type">Type</option>
			<option value="cote">Cote</option>
		</select>
		<input type="text" name="recherche_1"/>
		<!--liste déroulante et/ou-->
		<select name="select_et_ou">
			<option>Et</option>
			<option>Ou</option>
		</select>
		</br>
		
		<input type ="submit" value="Chercher"/> 
		<input type ="reset"/>
	</form>
  </section>

<!-- footer -->
<?php include("./invariants/footer.php") ?>
    </div>
	</body>
</html>
