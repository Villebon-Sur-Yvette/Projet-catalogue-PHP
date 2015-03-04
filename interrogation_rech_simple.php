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
require 'connexion_test.txt';


	$recherche_simple=trim($recherche_simple);


$results=$idcom->query("SELECT * FROM auteur, titre, editeur WHERE auteur LIKE '$recherche_simple' OR titre LIKE '$recherche_simple' OR editeur LIKE '$recherche_simple'");



//Traitement du cas de zéro réponse
  
		if ($results->num_rows==0) 
			{ 
				echo "Aucune réponse"; 
			} 
		else 
			{ 
			$rows=$results->fetch_array(MYSQLI_ASSOC);
			}

			echo $rows['auteur'];
			echo "<br/>";
			echo $rows['titre'];
			echo "<br/>";
			echo $rows ['editeur'];
			echo("<br/>");

$idcom->close();
?>
</body>
</html>
