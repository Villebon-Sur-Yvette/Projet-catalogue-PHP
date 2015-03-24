<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulaire de création de notice</title>
	</head>
	<body>
		<form action='notice.php' method="POST"/>
		<fieldset>
			Auteur
		</br>
			Nom : 
			<input type='text' name='nomauteur'/>
			Prénom : 
			<input type='text' name='prenomauteur'/>

		</br>
			Ouvrage
			Titre :
			<input type='text' name='titre'/>
		</br>
			Sous-titre :
			<input type='text' name='soustitre'/>
		</br>
			Editeur :
			<input type='text' name='editeur'/>
			Lieu d'édition :
			<input type='text' name='lieuedition'/>
			Date d'édition :
			<input type='date' name='dateedition'/>
		</br>
			ISBN :
			<input type='text' name='isbn'/>
		</br>
			Description : 
			Cote : 
			<input type="text" name='cote'/>
		</br>
		</fieldset>
		<fieldset>
		Langue
		</br>
			Langue : 
			<select name='langue'>
				<option value='francais'>Français</option>
				<option value='anglais'>Anglais</option>
				<option value='allemand'>Allemand</option>
				<option value='italien'>Italien</option>
				<option value='espagnol'>Espagnol</option>				
				<option value='neerlandais'>Néérlandais</option>
				<option value='russe'>Russe</option>
				<option value='japonais'>Japonais</option>
				<option value='latin'>Latin</option>
				<option value='grec'>Grec</option>			
			</select>
		</br>
			Langue d'origine : 
			<select name='langue'>
				<option value='francais'>Français</option>
				<option value='anglais'>Anglais</option>
				<option value='allemand'>Allemand</option>
				<option value='italien'>Italien</option>
				<option value='espagnol'>Espagnol</option>				
				<option value='neerlandais'>Néérlandais</option>
				<option value='russe'>Russe</option>
				<option value='japonais'>Japonais</option>
				<option value='latin'>Latin</option>
				<option value='grec'>Grec</option>			
			</select>
		</br>
			Traducteur : 
		</br>
			Nom : 
				<input type='text' name='nomtraducteur'/>
			Prénom : 
				<input type='text' name='prenomtraducteur'/>
		</br>
		</fieldset>
		<fieldset>
			Thème 
			<input type='checkbox' name='philo'/> <label for='philo'>Philosophie</label>
			<input type='checkbox' name='histoire'/> <label for='histoire'>Histoire</label>
			<input type='checkbox' name='economie'/> <label for='economie'>Economie</label>
			<input type='checkbox' name='science'/> <label for='science'>Science</label>
			<input type='checkbox' name='litterature'/> <label for='litterature'>Littérature</label>
			<input type='checkbox' name='art'/> <label for='art'>Art</label>
			<input type='checkbox' name='geographie'/> <label for='geographie'>Géographie</label>
			<input type='checkbox' name='sciencepo'/> <label for='sciencepo'>Science politique</label>
			<input type='checkbox' name='biographie'/> <label for='biographie'>Biographie</label>
			<input type='checkbox' name='religion'/> <label for='religion'>Religion</label>
			<input type='checkbox' name='tragedie'/> <label for='tragedie'>Tragédie</label>
			<input type='checkbox' name='amour'/> <label for='amour'>Amour</label>
			<input type='checkbox' name='enfance'/> <label for='enfance'>Enfance</label>
			<input type='checkbox' name='humour'/> <label for='humour'>Humour</label>
			<input type='checkbox' name='policier'/> <label for='policier'>Policier</label>
			<input type='checkbox' name='manga'/> <label for='manga'>Manga</label>
			<input type='checkbox' name='fantastique'/> <label for='fantastique'>Fantastique</label>
			<input type='checkbox' name='histoirevraie'/> <label for='histoirevraie'>Histoire vraie</label>
			<input type='checkbox' name='voyage'/> <label for='voyage'>Voyage</label>
			<input type='checkbox' name='provence'/> <label for='provence'>Provence</label>
			<input type='checkbox' name='amerique'/> <label for='amerique'>Amérique</label>
			<input type='checkbox' name='russie'/> <label for='russie'>Russie</label>
			<input type='checkbox' name='japon'/> <label for='japon'>Japon</label>
			<input type='checkbox' name='afrique'/> <label for='afrique'>Afrique</label>
	</br>
			Type :
			<input type='radio' name='rayon' value='enfant'/> <label for='enfant'>Rayon enfant</label>
			<input type='radio' name='rayon' value='adulte'/> <label for='adulte'>Rayon adulte</label>
			<input type='radio' name='rayon' value='usuel'/> <label for='usuel'>Usuel</label>
		</br>
		</fieldset>
		<br/>
			<input type='submit' value='Créer'/>
		</form>	
	</body>
</html>