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
        <title>Accès à l'interface professionnelle</title>

        <!-- Liens CSS -->
        <link href="../../css/authentification.css" rel="stylesheet" />
  
    </head>

	<body>
		<!-- Formulaire d'authentification pour accèder à l'interface professionnelle -->
		<form action='authentification.php' method='POST'>
		
		<h2>Accès restreint</h2>

		<fieldset>
			<div id="authent">
		Adresse mail : 
			<input type='email' name='email_usager'/>
		<br/>
		<br/>
		Mot de passe : 
			<input type='password' name='pw_usager'/>
		<br/>
		<br/>
			<input type='submit' value='S&#39;identifier'/>
		<br/>
		</div>
		</fieldset>
		
		</form>

		<p>
			Cette page permet aux personnels de la bibliothèque de Villebon-sur-Yvette d'accéder à la partie privé de ce site.
			L'identification est obligatoire. 
			<br/>
			Si vous n'êtes pas concerné, merci de bien vouloir quitter cette page.
		</p>

		<img src="../../css/images_css/authentification.PNG" alt="pile de livres"/>

	</body>
</html>