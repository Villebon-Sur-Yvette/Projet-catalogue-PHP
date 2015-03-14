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

//récupération d'une variable
$recherche_simple=$_POST["recherche_simple"];

//suppression des blancs
$recherche_simple=trim($recherche_simple);

$idcom->query("SET NAMES UTF8");

//$results=$idcom->query("SELECT * FROM document WHERE auteur LIKE '$recherche_simple' OR titre LIKE '$recherche_simple' OR editeur LIKE '$recherche_simple'");
$results=$idcom->query("SELECT * FROM document WHERE titre LIKE '$recherche_simple' OR editeur LIKE '$recherche_simple'");



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
?>
</body>
</html>
