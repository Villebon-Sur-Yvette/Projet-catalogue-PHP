<html>
<head>
	<meta charset="UTF-8">
	<!--  <meta http-equiv="Content-type" content="text/html/php , charset=utf-8" /> -->
	<title>interrogation_recherche_simple</title>

	<!-- Il manque le lien pour la CSS. -->
	<!-- Par contre, est-il utile d'ajouter des métadonnées?? Je ne sais pas, je veux ton avis! -->
<head>

<body>
<?php
require 'connexion_test.txt';

//Nettoyage des résultats
/*Je sais que je verse un peu dans la sodomie de dyptères mais ça permet d'éviter des erreurs à la con.
	$recherche_simple=trim($recherche_simple); */

$results=$idcom->query("SELECT * FROM auteur, titre, editeur WHERE nom LIKE '$_POST[recherche_simple]' OR title LIKE '$_POST[recherche_simple]' OR editeur LIKE '$_POST[recherche_simple]'");

//Je réecris la requête : $results=$idcom->("SELECT * FROM auteur, titre, editeur WHERE auteur LIKE '$recherche_simple' OR titre LIKE '$recherche_simple' OR editeur LIKE '$recherche_simple'");
//$recherche_simple=$_POST['recherche_simple'];

/*
Je détaille la requête est bonne dans l'ensemble. Le seul problème c'est que tu n'as pas défini la variable "recherche simple" avant.
Une fois cela fait, la requête fonctionne normalement.
Bon après le coup du $_POST c'est parce que je suis flemmard et que ça économise des caractères dans la requête SQL.
*/



/* Je propose que l'on mette ça en cas d'erreur mais je ne sais pas trop car c'est un module de recherche facilement accessible.

Traitement du cas de zéro réponse
  
		if ($results->num_rows==0) 
			{ 
				echo "Aucune réponse"; 
			} 
		else 
			{ 
*/

		$rows=$results->fetch_array(MYSQLI_ASSOC);

			//echo $rows['auteur'];
			//echo "<br/>";
			//echo $rows['titre'];
			//echo "<br/>";

		//Je te laisse faire le reste.
			echo("<br/>");

$idcom->close();
?>
</body>
</html>
