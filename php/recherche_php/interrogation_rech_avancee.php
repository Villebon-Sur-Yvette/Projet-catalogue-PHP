<html>
<head>
	
	<meta http-equiv="Content-type" content="text/html/php"  charset="UTF-8" /> 
	<title>interrogation_recherche_simple</title>

	<link href=".css" rel="stylesheet"/> <!--il faut encore faire la css bien sûr-->
	<!-- Par contre, est-il utile d'ajouter des métadonnées?? Je ne sais pas, je veux ton avis! 
	On peut peut-être mettre en mot clef les différentes recherches possibles par ce formulaire, exemple : auteur/éditeur/titre-->
<head>

<body>
<?php
require '../../connexion.php';

// Constante
$nbre_recherche = 3;
	
// Récupération des variables du post
for ($a = 1; $a <= $nbre_recherche; $a++) {
	
	$recherche[$a]=trim($_POST["recherche_".$a]);
	$choix[$a]= $_POST["select_choix_".$a];
	// Pas d'opérateur pour le dernier champ recherche
	if ($a!= $nbre_recherche){
		$operateur[$a]= $_POST["select_operateur_".$a];
	}
	
}

// Remplissage tableau de recherche ordonnée
$j=1 ;
$recherche_ordonnee=NULL;
for ($i = 1; $i <= $nbre_recherche; $i++) {
	
	// Si le champs recherche est rempli, on l'ajoute à la recherche ordonnée
	if (strlen($recherche[$i])!=0){	
		$recherche_ordonnee[$j]['recherche']= $recherche[$i];
		$recherche_ordonnee[$j]['choix']= $choix[$i];
		if ($i!=$nbre_recherche){
			$recherche_ordonnee[$j]['operateur']= $operateur[$i];
		}
		$j++;
		
	}	
}

// Récupératon de la taille du tableau de recherche ordonnée
$taille_recherche_ordonnee = count($recherche_ordonnee);

// Génération de la requête sql quand au moins un champ recherche est rempli
if ($taille_recherche_ordonnee!=0){

	$sql_select_avancee = "SELECT document.id_document,
								group_concat(distinct concat(auteur.nom, ', ', auteur.prenom) separator '; ' ) as auteur,  
								document.titre, 
								document.soustitre, 
								document.editeur, 
								document.dateedition, 
								support.intitule as support, 
								type.intitule as type, 
								group_concat(distinct theme.intitule) as theme,
								document.lienimage
								
								FROM hippolyte.document  
								left join auteur_document on auteur_document.id_document=document.id_document
								left join auteur on auteur.id_auteur=auteur_document.id_auteur 
								left join theme_document on theme_document.id_document=document.id_document
								left join theme on theme.id_theme=theme_document.id_theme
								left join support on document.id_support=support.id_support 		
								left join type on document.id_type=type.id_type
								left join genre on document.id_genre=genre.id_genre
								WHERE";
	for ($k = 1; $k <= $taille_recherche_ordonnee; $k++) {
		
		// On prépare les sous-appels au table de lien si nécessaire
		switch ($recherche_ordonnee[$k]['choix']) {
			case "titre":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'"; 
				$recherche_ordonnee[$k]['choix'] = "titre";
				break;
			case "soustitre":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'"; 
				$recherche_ordonnee[$k]['choix'] = "soustitre";
				break;
			case "auteur":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'"; 
				$recherche_ordonnee[$k]['choix'] = "auteur.nom";
				break;	
			case "editeur":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'"; 
				$recherche_ordonnee[$k]['choix'] = "editeur";
				break;
			case "type":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'";
				$recherche_ordonnee[$k]['choix'] = "type.intitule";
				break;
			case "genre":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'";
				$recherche_ordonnee[$k]['choix'] = "genre.intitule";
				break;
			case "theme":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'"; 
				$recherche_ordonnee[$k]['choix'] = "theme.intitule";
				break;
			case "cote":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'"; 
				$recherche_ordonnee[$k]['choix'] = "cote";
				break;		
			case "support":
				$recherche_ordonnee[$k]['recherche'] = "'%".$recherche_ordonnee[$k]['recherche']."%'"; 
				$recherche_ordonnee[$k]['choix'] = "support.intitule";
				break;
		}
		
		$sql_select_avancee .= 	" ".$recherche_ordonnee[$k]['choix']." LIKE ".$recherche_ordonnee[$k]['recherche'];
		if ($k!=$taille_recherche_ordonnee){
			$sql_select_avancee .= " ".$recherche_ordonnee[$k]['operateur'];
		}
	}	
	$sql_select_avancee .= "group by document.id_document ORDER BY titre ASC";

	// Set de l'utf8 pour les caractères spéciaux	
	$idcom->query("SET NAMES UTF8");

	//$results=$idcom->query("SELECT * FROM document WHERE auteur LIKE '$recherche_simple' OR titre LIKE '$recherche_simple' OR editeur LIKE '$recherche_simple'");
	$results=$idcom->query($sql_select_avancee);


	//Traitement du cas de zéro réponse
	  
			if ($results->num_rows==0)
				{ 
					echo "Aucune réponse"; 
				} 
			else 
				{
				
				// Nombre de résultants
					$nb_rows = mysqli_num_rows($results);
					echo $nb_rows." résultat(s)<br/><br/>";
					
				while ( $rows=$results->fetch_array(MYSQLI_ASSOC) ) {
								
					echo ('<img src="../../base_de_données/images_couvertures/'.$rows['lienimage'].'" width="100"  />');
					echo "<br/>";
					echo $rows['titre'];
					
					
					if ($rows['soustitre']) {
					echo " : ";	
					echo $rows['soustitre'];
					}
					
					echo(";<br/>");
					if ($rows['auteur']) {
					echo $rows['auteur'];
					echo ";<br/>";
					}
					echo $rows['editeur'];
					echo " - ";
					echo $rows['dateedition'];
					echo "<br/>";
					echo $rows['support'];
					echo " - ";
					echo $rows['type'];
					echo "<br/>";
					echo "<br/>";
					//bouton d'envoi vers fiches-notices
					echo "<form action='../notices_php/notice_simple.php' method='POST'>";
					echo "<input type='hidden' name='id' value='$rows[id_document]'>";
					echo "<input type='submit' value='notice simple'/>";
					echo "</form>";
					
					//bouton envoie notice isbd
					echo "<form action='../notices_php/notice_isbd.php' method='POST'>";
					echo "<input type='hidden' name='id' value='$rows[id_document]'>";
					echo "<input type='submit' value='notice ISBD'/>";
					echo "</form>";
					echo "<br/>";
					
				}
				
				}



	$idcom->close();
	
}
else {
	
	echo "Veuillez remplir au moins un champ !";
	
}	
?>
</body>
</html>
