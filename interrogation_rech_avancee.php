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
require 'connexion.php';

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

	$sql_select_avancee = "SELECT * FROM document WHERE";
	for ($k = 1; $k <= $taille_recherche_ordonnee; $k++) {
		
		// On prépare les sous-appels au table de lien si nécessaire
		switch ($recherche_ordonnee[$k]['choix']) {
			case "genre":
				$recherche_ordonnee[$k]['recherche'] = "(SELECT id_genre FROM genre WHERE intitule='".$recherche_ordonnee[$k]['recherche']."')";
				$recherche_ordonnee[$k]['choix'] = "id_genre";
				break;
			case "editeur":
				$recherche_ordonnee[$k]['recherche'] = "'".$recherche_ordonnee[$k]['recherche']."'"; 
				$recherche_ordonnee[$k]['choix'] = "editeur";
				break;
			case "titre":
				$recherche_ordonnee[$k]['recherche'] = "'".$recherche_ordonnee[$k]['recherche']."'"; 
				$recherche_ordonnee[$k]['choix'] = "titre";
				break;
			case "auteur":
				$recherche_ordonnee[$k]['recherche'] = "'".$recherche_ordonnee[$k]['recherche']."'"; 
				$recherche_ordonnee[$k]['choix'] = "auteur";
				break;	
			case "theme":
				$recherche_ordonnee[$k]['recherche'] = "'".$recherche_ordonnee[$k]['recherche']."'"; 
				$recherche_ordonnee[$k]['choix'] = "theme";
				break;
			case "type":
				$recherche_ordonnee[$k]['recherche'] = "(SELECT id_type FROM type WHERE intitule='".$recherche_ordonnee[$k]['recherche']."')";
				$recherche_ordonnee[$k]['choix'] = "id_type";
				break;
			case "cote":
				$recherche_ordonnee[$k]['recherche'] = "'".$recherche_ordonnee[$k]['recherche']."'"; 
				$recherche_ordonnee[$k]['choix'] = "cote";
				break;				
		}
		
		$sql_select_avancee .= 	" ".$recherche_ordonnee[$k]['choix']." LIKE ".$recherche_ordonnee[$k]['recherche'];
		if ($k!=$taille_recherche_ordonnee){
			$sql_select_avancee .= " ".$recherche_ordonnee[$k]['operateur'];
		}
	}	
	$sql_select_avancee .= " ORDER BY titre ASC";

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

				while ( $rows=$results->fetch_array(MYSQLI_ASSOC) ) {
					//pour l'instant la recherche par auteur ne marche pas parce qu'il y a un problème avec la base (pas de champs auteur ou id_auteur dans la table document)
					//echo $rows['auteur'];
					//echo "<br/>";
					//echo " - ";
					echo $rows['titre'];
					echo " - ";
					echo $rows['editeur'];
					echo("<br/>");
					
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
