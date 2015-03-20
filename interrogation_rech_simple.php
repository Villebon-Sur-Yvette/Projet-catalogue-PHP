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
$results=$idcom->query("SELECT  SELECT document.id_document, group_concat(distinct concat(auteur.nom,", ", auteur.prenom) separator "; " ) as auteur , titre, soustitre, concat(lieuedition, ":", editeur, ", ", dateedition) as edition, isbn, description, cote, langue.intitule as langue , langueoriginale.intitule as langueoriginale,concat(traducteur.nom, traducteur.prenom) as traducteur, support.intitule as support, type.intitule as type, genre.intitule as genre, group_concat(distinct theme.intitule separator "; ") as theme
from `document`
left join auteur_document on auteur_document.id_document=document.id_document
left join auteur on auteur.id_auteur=auteur_document.id_auteur
left join langue on langue.id_langue=document.id_langue
left join langueoriginale on langueoriginale.id_langueoriginale=document.id_langueoriginale
left join traducteur on traducteur.id_traducteur=document.id_traducteur
left join support on support.id_support=document.id_support
left join type on type.id_type=document.id_type
left join genre on genre.id_genre=document.id_genre
left join theme_document on theme_document.id_document=document.id_document
left join theme on theme.id_theme=theme_document.id_theme
where titre like "%$recherche_simple%"
group by document.id_document
");


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
				echo " ";
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
				echo $rows['support'];
				echo " - ";
				echo $rows['type'];
				echo "<br/>";
				echo "<br/>";
				
				
				
			}
			
			
			}
  

$idcom->close();
?>
</body>
</html>
