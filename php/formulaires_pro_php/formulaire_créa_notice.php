<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulaire de création de notice</title>

		<!-- Liens CSS -->
        <link href="../../css/style_pro.css" rel="stylesheet" />
        <link href="../../css/css_formulairecreanotice.css" rel="stylesheet" />
		
		<!-- Icone du site-->
		<link href="../../css/images_css/blason.png" type="image/png" rel="icon" />

	</head>

	<body>
		  <div class="conteneur">

		<!-- header pro -->
                <?php include("../invariants/header_pro.php") ?>

        <!-- menu : présentation, aide, catalogue, accès réservé -->
                <?php include("../invariants/menu_pro.php") ?>

        <!-- Encart gauche avec la recherche -->
                <?php include("../invariants/recherche.php") ?>


         <!-- tout le contenu de la notice est dans cette partie -->
         <div class="contenu">

		<h2>Créer une nouvelle notice</h2>
		<p>
			Ce formulaire permet d'intégrer un nouvel ouvrage au catalogue de la bibliothèque.
			<br/>
			L'ensemble des champs doivent être remplis pour effectuer la création de la notice !
		</p>
		<form action="créa.php" method="POST"/>
		<fieldset>
			<h3>Informations générales</h3>
			<h4>Auteur</h4>
		<br/>
			Nom : 
			<input type="text" name="nomauteur"/>
			Prénom : 
			<input type="text" name="prenomauteur"/>

		<br/>
			<h4>Ouvrage</h4>
		<br/>
			Titre :
			<input type="text" name="titre"/>
		</br>
			Sous-titre :
			<input type="text" name="soustitre"/>
		</br>
			Editeur :
			<input type="text" name="editeur"/>
			Lieu d'édition :
			<input type="text" name="lieuedition"/>
			Date d'édition :
			<input type="date" name="dateedition"/>
		<br/>
			<h4>Repères</h4>
		<br/>
			ISBN :
			<input type="text" name="isbn"/>
		<br/>
			Cote : 
			<input type="text" name='cote'/>
		<br/>
		</fieldset>
		<fieldset>
		<h4>Langue </h4>
		<br>
			Langue :
			<select name="langue">
				<option value="francais">Français</option>
				<option value="anglais">Anglais</option>
				<option value="allemand">Allemand</option>
				<option value="italien">Italien</option>
				<option value="espagnol">Espagnol</option>				
				<option value="neerlandais">Néérlandais</option>
				<option value="russe">Russe</option>
				<option value="japonais">Japonais</option>
				<option value="latin">Latin</option>
				<option value="grec">Grec</option>			
			</select>
		<br/>
		<br/>
			Langue d'origine :
			<select name="langueorig">
				<option value="francais">Français</option>
				<option value="anglais">Anglais</option>
				<option value="allemand">Allemand</option>
				<option value="italien">Italien</option>
				<option value="espagnol">Espagnol</option>				
				<option value="neerlandais">Néérlandais</option>
				<option value="russe">Russe</option>
				<option value="japonais">Japonais</option>
				<option value="latin">Latin</option>
				<option value="grec">Grec</option>			
			</select>
		<br/>
			<!-- Traducteur : 
		<br/>
			Nom : 
				<input type='text' name='nomtraducteur'/>
			Prénom : 
				<input type='text' name='prenomtraducteur'/>
		<br/> -->
		</fieldset>
		<fieldset>
			<h4>Thème </h4>
			<input type="radio" name="theme" value="philo"/> <label for="philo">Philosophie</label>
			<input type="radio" name="theme" value="histoire"/> <label for="histoire">Histoire</label>
			<input type="radio" name="theme" value="economie"/> <label for="economie">Economie</label>
			<input type="radio" name="theme" value="science"/> <label for="science">Science</label>
			<input type="radio" name="theme" value="litterature"/> <label for="litterature">Littérature</label>
			<input type="radio" name="theme" value="art"/> <label for="art">Art</label>
			<input type="radio" name="theme" value="geographie"/> <label for="geographie">Géographie</label>
			<input type="radio" name="theme" value="sciencepo"/> <label for="sciencepo">Science politique</label>
			<input type="radio" name="theme" value="biographie"/> <label for="biographie">Biographie</label>
			<input type="radio" name="theme" value="religion"/> <label for="religion">Religion</label>
			<input type="radio" name="theme" value="tragedie"/> <label for="tragedie">Tragédie</label>
			<input type="radio" name="theme" value="amour"/> <label for="amour">Amour</label>
			<input type="radio" name="theme" value="enfance"/> <label for="enfance">Enfance</label>
			<input type="radio" name="theme" value="humour"/> <label for="humour">Humour</label>
			<input type="radio" name="theme" value="policier"/> <label for="policier">Policier</label>
			<input type="radio" name="theme" value="manga"/> <label for="manga">Manga</label>
			<input type="radio" name="theme" value="fantastique"/> <label for="fantastique">Fantastique</label>
			<input type="radio" name="theme" value="histoirevraie"/> <label for="histoirevraie">Histoire vraie</label>
			<input type="radio" name="theme" value="voyage"/> <label for="voyage">Voyage</label>
			<input type="radio" name="theme" value="provence"/> <label for="provence">Provence</label>
			<input type="radio" name="theme" value="amerique"/> <label for="amerique">Amérique</label>
			<input type="radio" name="theme" value="russie"/> <label for="russie">Russie</label>
			<input type="radio" name="theme" value="japon"/> <label for="japon">Japon</label>
			<input type="radio" name="theme" value="afrique"/> <label for="afrique">Afrique</label>
		<br/>
		<br/>
			Type :
			<input type="radio" name="rayon" value="enfant"/> <label for="enfant">Rayon enfant</label>
			<input type="radio" name="rayon" value="adulte"/> <label for="adulte">Rayon adulte</label>
			<input type="radio" name="rayon" value="usuel"/> <label for="usuel">Usuel</label>
		<br/>
		</fieldset>
		<br/>
			<input type="submit" value="Créer"/>
		</form>
		</div> 

		<!-- footer -->
            <?php include("../invariants/footer.php") ?>

		</div>	
	</body>
</html>