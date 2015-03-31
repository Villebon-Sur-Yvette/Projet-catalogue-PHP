<!DOCTYPE html>
<html lang="fr">
<head>

		<meta http-equiv="Content-type" content="text/html/php"  charset="UTF-8" /> 
		<title>Notice suppression</title>
		<link href="../../css/invariants.css" rel="stylesheet" />
		<link href="../../css/css_noticeISBD.css" rel="stylesheet" />

</head>

<body>
<div class="conteneur">

<!-- header -->
<?php include("../invariants/header.php") ?>

<!-- menu 2 : avec retour page accueil -->
<?php include("../invariants/menu2.php") ?>

<!-- Encart gauche avec la recherche -->
<?php include("../invariants/recherche.php") ?>

<section> <!--  j'ai mis tout le php de la notice dans une section-->
 
<?php
require '../../connexion.php';

//bouton retour en arrière    => inutile finalement avec les invariants??? 
//echo "<input type='button' value='Retour' onclick='history.go(-1)'  />";

//prise en compte des caractères spéciaux
$idcom->query("SET NAMES UTF8");

$results=$idcom->query("SELECT document.id_document,
								group_concat(distinct concat(auteur.prenom, ' ', auteur.nom) separator ' et ' ) as auteur, 
								document.titre, 
								document.soustitre, 
								document.editeur, 
								document.dateedition, 
								support.intitule as support, 
								type.intitule as type, 
								document.lieuedition,
								document.description,
								genre.intitule as genre,
								group_concat(distinct theme.intitule) as theme,
								document.lienimage,
								document.cote,
								document.isbn,
								langueoriginale.intitule as langueoriginale,
								concat(traducteur.prenom, ' ', traducteur.nom) as traducteur
																						
						FROM hippolyte.document
						left join auteur_document on auteur_document.id_document=document.id_document
						left join auteur on auteur.id_auteur=auteur_document.id_auteur
						left join type on document.id_type=type.id_type
						left join support on document.id_support=support.id_support 
						left join theme_document on theme_document.id_document=document.id_document
						left join theme on theme.id_theme=theme_document.id_theme
						left join genre on document.id_genre=genre.id_genre
						left join langueoriginale on document.id_langueoriginale=langueoriginale.id_langueoriginale
						left join traducteur on document.id_traducteur=traducteur.id_traducteur
						
						WHERE document.id_document = '$_POST[id]'LIMIT 1");

//affichage des résulats selon la norme isbd					
$rows=$results->fetch_array(MYSQLI_ASSOC);

				echo "<br/>";
				echo "<h2>Notice ISBD </h2>";				
				echo "<br/>";
				
				echo $rows['titre'];
				echo " [";
				echo $rows['support'];
				echo "] ";
				
				if ($rows['soustitre']) {
					echo ":";
					echo $rows['soustitre'];
				}
				
				echo "/ par ";
				echo $rows['auteur'];
				 
				if ($rows['langueoriginale']) {
					echo "; traduit de la langue ";
					echo $rows['langueoriginale'];
					echo " par ";
					echo $rows['traducteur'];
				}
				echo " .- ";
				echo $rows['description'];
				echo " .- ";
				echo "ISBN : ";
				echo $rows['isbn'];
				echo ".";
				echo"<br/>";
				
				echo "<br/>";
				echo "Exemplaire :";
				echo "<br/>";
				echo $rows['type'];
				echo ".-  ";
				echo $rows['cote'];
				echo ".<br/>";
				
				//image de la couverture; remarque: aucune indication de taille
				echo "<br/>";
				echo ('<img src="../../base_de_données/images_couvertures/'.$rows['lienimage'].'"  />'); 
				echo "<br/>";
				
				//bouton vers la notice simple
				echo "<br/>";
				echo "<form action='suppr.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='Supprimer'/>";
				echo "</form>";
				echo "<br/>";
				
$idcom->close();
?>
</section> 


<!-- footer -->
<?php include("../invariants/footer.php") ?>