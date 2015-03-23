<html>
<head>
	<meta http-equiv="Content-type" content="text/html/php"  charset="UTF-8" /> 
</head>

<body>
<?php
require '../connexion.php';

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

$rows=$results->fetch_array(MYSQLI_ASSOC);

				echo "<br/>";
				echo "<h2>Notice ISBD </h2>";
				/* ne marche pas encore
				echo "<form action='interrogation_rech_simple.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='retour aux résultats'/>";
				echo "</form>"; */
				
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
				//attention, que faire qd il y a trois auteurs ??? machin et machin et machin => c'est moche; 
				
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
				
				echo "<br/>";
				echo ('<img src="../base_de_données/imagescouvertures/'.$rows['lienimage'].'"  />'); 
				echo "<br/>";
				
				echo "<br/>";
				echo "<form action='notice_simple.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='notice simple'/>";
				echo "</form>";
				echo "<br/>";
				
$idcom->close();
?>
</body>
</html>