<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulaire de création de notice</title>
		
		<!-- Icone du site-->
		<link href="../../css/images_css/blason.png" type="image/png" rel="icon" />
		
		<!-- Métadonnées -->
		<meta name="author" content="Anne-Cécile Schreiner, Clément Cros, Constance Le Roux, Domitille Guerrier de Dumast, Marie Guyot" />
	</head>
	<body>
		<h2>Créer une nouvelle notice</h2>
		<p>
			Ce formulaire permet d'intégrer un nouvel ouvrage au catalogue de la bibliothèque.
			<br/>
			L'ensemble des champs doivent être remplis pour effectuer la création de la notice !
		</p>
		
		<?php
		require '../../connexion.php';
		
		// Set de l'utf8 pour les caractères spéciaux	
		$idcom->query("SET NAMES UTF8");
		
		$sql_select_auteur = "SELECT * FROM hippolyte.auteur";  
		$results_auteur=$idcom->query($sql_select_auteur);

		$sql_select_langue = "SELECT * FROM hippolyte.langue";  
		$results_langue=$idcom->query($sql_select_langue);	

		$sql_select_langue_ori = "SELECT * FROM hippolyte.langueoriginale";  
		$results_langue_ori=$idcom->query($sql_select_langue_ori);	
		
		$sql_select_type = "SELECT * FROM hippolyte.type";  
		$results_type=$idcom->query($sql_select_type);	
		
		$sql_select_theme = "SELECT * FROM hippolyte.theme";  
		$results_theme=$idcom->query($sql_select_theme);
		
		?>
		
		<form action="crea.php" method="POST"/>
		<fieldset>
			<h3>Informations générales</h3>
			<h4>Auteur</h4>
		<br/>
			Prénom / Nom : 
			<select name="auteur">
			<?php
				while ( $rows_auteur=$results_auteur->fetch_array(MYSQLI_ASSOC) ) {
					echo '<option value="'.$rows_auteur['id_auteur'].'">'.$rows_auteur['prenom'].' '.$rows_auteur['nom'].'</option>';
				}
			?>		
			</select>


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
		Langue
		<br>
			Langue : 
			<select name="langue">
			<?php
			while ( $rows_langue=$results_langue->fetch_array(MYSQLI_ASSOC) ) {
				echo '<option value="'.$rows_langue['id_langue'].'">'.$rows_langue['intitule'].'</option>';		
			}
			?>
			</select>
		<br/>
			Langue d'origine : 
			<select name="langueorig">
			<?php
			while ( $rows_langue_ori=$results_langue_ori->fetch_array(MYSQLI_ASSOC) ) {
				echo '<option value="'.$rows_langue_ori['id_langueoriginale'].'">'.$rows_langue_ori['intitule'].'</option>';		
			}
			?>			
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
			Thème :
			<?php
			while ( $rows_theme=$results_theme->fetch_array(MYSQLI_ASSOC) ) {
				echo '<input type="radio" name="theme" value="'.$rows_theme['id_theme'].'"/> <label for="'.$rows_theme['id_theme'].'">'.$rows_theme['intitule'].'</label> ';		
			}
			?>
		<br/>
		<br/>
			Type :
			<?php
			while ( $rows_type=$results_type->fetch_array(MYSQLI_ASSOC) ) {
				echo '<input type="radio" name="type" value="'.$rows_type['id_type'].'"/> <label for="'.$rows_type['id_type'].'">'.$rows_type['intitule'].'</label> ';		
			}
			?>	
		<br/>
		</fieldset>
		<br/>
			<input type="submit" value="Créer"/>
		</form>	
		<?php
		$idcom->close();
		?>
		
	</body>
</html>