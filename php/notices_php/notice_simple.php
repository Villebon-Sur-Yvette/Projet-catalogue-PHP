<!DOCTYPE html>
<html lang="fr">
<head>

		<meta http-equiv="Content-type" content="text/html/php" meta charset="UTF-8" />
		<title>Notice ISBD</title>
		<link href="../../css/invariants.css" rel="stylesheet" />
		<link href="../../css/css_noticesimple.css" rel="stylesheet" />
		
		<!-- Icone du site-->
    <link href="../../css/images_css/blason.png" type="image/png" rel="icon" />
</head>

<body>
<div class="conteneur">

<!-- header -->
<?php include("../invariants/header.php") ?>

<!-- menu 2 : avec retour page accueil -->
<?php include("../invariants/menu2.php") ?>

<!-- Encart gauche avec la recherche -->
<?php include("../invariants/recherche.php") ?>


<section> <!-- tout la notice est dans la section-->
<?php
require '../../connexion.php';

//bouton retour en arrière    => inutile finalement avec les invariants??? 
//echo "<input type='button' value='Retour' onclick='history.go(-1)'  />";

//prise en compte des caractères spéciaux
$idcom->query("SET NAMES UTF8");

$results=$idcom->query("SELECT document.id_document,
								group_concat(distinct concat(auteur.nom, ', ', auteur.prenom) separator '; ' ) as auteur, 
								document.titre, 
								document.soustitre, 
								document.editeur, 
								document.dateedition, 
								support.intitule as support, 
								type.intitule as type, 
								document.lieuedition,
								document.description,
								genre.intitule as genre,
								group_concat(distinct theme.intitule separator ', ') as theme,
								document.lienimage,
								document.cote,
								document.isbn,
								concat(traducteur.prenom, ' ', traducteur.nom) as traducteur,
								langueoriginale.intitule as langueoriginale,
								langue.intitule as langue
								
						FROM hippolyte.document
						left join auteur_document on auteur_document.id_document=document.id_document
						left join auteur on auteur.id_auteur=auteur_document.id_auteur
						left join type on document.id_type=type.id_type
						left join support on document.id_support=support.id_support 
						left join theme_document on theme_document.id_document=document.id_document
						left join theme on theme.id_theme=theme_document.id_theme
						left join genre on document.id_genre=genre.id_genre
						left join traducteur on document.id_traducteur=traducteur.id_traducteur
						left join langueoriginale on document.id_langueoriginale=langueoriginale.id_langueoriginale
						left join langue on document.id_langue=langue.id_langue
						WHERE document.id_document = '$_POST[id]'LIMIT 1");

//affichage des résulats selon un modèle simple						
$rows=$results->fetch_array(MYSQLI_ASSOC);

				echo "<br/>";
				echo "<h2>Notice simple</h2>";
				echo "<br/>";
				echo "Auteur : ";
				echo $rows['auteur'];
				echo ".";
				echo "<br/>";
				echo "Titre : ";
				echo $rows['titre'];
				
				if ($rows['soustitre']) {	
					echo ", ";
					echo $rows['soustitre'];
					echo "; "; 
				}
				else {
					echo ";";
				}
				
				if ($rows['traducteur']) {
					echo " trad. de la langue ";
					echo $rows['langueoriginale'];
					echo " par ";
					echo $rows['traducteur'];
					echo ".";
				}
			
				echo "<br/>";
				echo "<br/>";
				echo "Editeur : ";
				echo $rows['lieuedition'];
				echo ": ";
				echo $rows['editeur'];
				echo ", ";
				echo $rows['dateedition'];
				echo ".";
				echo "<br/>";
				echo "Langue : ";
				echo $rows['langue'];
				echo ".";
				echo "<br/>";
				echo "Type de document : ";
				echo $rows['support'];
				echo ".";
				echo "<br/>";
				echo "Description/Format : ";
				echo $rows['description'];
				echo ".<br/>";
				echo "Genre : ";
				echo $rows['genre'];
				echo ".<br/>";
				echo "Thèmes : ";
				echo $rows['theme'];
				echo(".<br/>");
				echo "ISBN : ";
				echo $rows['isbn'];
				echo ".<br/>";
				
				echo "<br/>";
				echo "Exemplaire :";
				echo "<br/>";
				echo $rows['type'];
				echo ".-  ";
				echo $rows['cote'];
				echo ".<br/>";
				

				//affichage de l'image
				echo "<br/>";
				echo ('<img src="../../base_de_données/images_couvertures/'.$rows['lienimage'].'"  />'); 
				echo "<br/>";
				
				//bouton vers la notice idbd
				echo "<br/>";
				echo "<form action='notice_isbd.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='ISBD'/>";
				echo "</form>";
				echo "<br/>";
				
$idcom->close();
?>
</section>

<!-- footer -->
<?php include("../invariants/footer.php") ?>

</div>
</body>
</html>