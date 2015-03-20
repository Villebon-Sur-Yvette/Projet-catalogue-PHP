<html>
<head>
	<meta http-equiv="Content-type" content="text/html/php"  charset="UTF-8" /> 
</head>

<body>
<?php
require 'connexion.php';

//prise en compte des caractères spéciaux
$idcom->query("SET NAMES UTF8");

$results=$idcom->query("SELECT document.id_document,
								group_concat(distinct concat(auteur.nom, auteur.prenom) ) as auteur, 
								document.titre, 
								document.soustitre, 
								document.editeur, 
								document.dateedition, 
								support.intitule as support, 
								type.intitule as type, 
								document.lieuedition,
								document.description,
								genre.intitule as genre,
								group_concat(distinct theme.intitule) as theme
								
						FROM hippolyte.document
						left join auteur_document on auteur_document.id_document=document.id_document
						left join auteur on auteur.id_auteur=auteur_document.id_auteur
						left join type on document.id_type=type.id_type
						left join support on document.id_support=support.id_support 
						left join theme_document on theme_document.id_document=document.id_document
						left join theme on theme.id_theme=theme_document.id_theme
						left join genre on document.id_genre=genre.id_genre
						WHERE document.id_document = '$_POST[id]'LIMIT 1");

$rows=$results->fetch_array(MYSQLI_ASSOC);

				echo "Titre : ";
				echo $rows['titre'];
				echo " ";
				echo $rows['soustitre'];
				echo("<br/>");
				echo "Auteur : ";
				echo $rows['auteur'];
				echo "<br/>";
				echo "Editeur : ";
				echo $rows['editeur'];
				echo ", ";
				echo $rows['dateedition'];
				echo ", ";
				echo $rows['lieuedition'];
				echo "<br/>";
				echo "Description/Format : ";
				echo $rows['description'];
				echo "<br/>";
				echo "Thèmes : ";
				echo $rows['theme'];
				echo("<br/>");
				echo "Genre : ";
				echo $rows['genre'];
				echo("<br/>");
				echo "Type de document : ";
				echo $rows['support'];
				echo " - ";
				echo $rows['type'];
				echo "<br/>";
				echo "<br/>";
$idcom->close();
?>
</body>
</html>