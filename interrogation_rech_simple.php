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
$results=$idcom->query("SELECT  auteur.nom, 
								auteur.prenom, 
								document.titre, 
								document.soustitre, 
								document.editeur, 
								document.dateedition, 
								support.intitule as support, 
								type.intitule as type, 
								theme.intitule as theme  

						FROM hippolyte.document
						left join auteur_document on auteur_document.id_document=document.id_document
						left join auteur on auteur.id_auteur=auteur_document.id_auteur
						left join type on document.id_type=type.id_type
						left join support on document.id_support=support.id_support 
						left join theme_document on theme_document.id_document=document.id_document
						left join theme on theme.id_theme=theme_document.id_theme
						WHERE titre LIKE '%$recherche_simple%' 
						OR document.soustitre LIKE '%$recherche_simple%' 
						OR auteur.nom LIKE '%$recherche_simple%'
						OR theme.intitule LIKE '%$recherche_simple%'");


//Traitement du cas de zéro réponse
  
		if ($results->num_rows==0)
		{
				echo "Aucune réponse"; 
		}
		else
			{
			 while($rows=$results->fetch_array(MYSQLI_ASSOC)) 
			{
				echo $rows['titre'];
				echo $rows['soustitre'];
				echo("<br/>");
				echo $rows['nom'];
				echo " ";
				echo $rows['prenom'];
				echo "<br/>";
				echo $rows['editeur'];
				echo " - ";
				echo $rows['dateedition'];
				echo "<br/>";
				echo "<br/>";
				
				
				
			}
			
			
			}
  

$idcom->close();
?>
</body>
</html>
