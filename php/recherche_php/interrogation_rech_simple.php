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
require '../../connexion.php';

//récupération d'une variable
$recherche_simple=$_POST["recherche_simple"];

//suppression des blancs
$recherche_simple=trim($recherche_simple);

//prise en compte des caractères spéciaux
$idcom->query("SET NAMES UTF8");

//envoi de la requête SQL
if (!empty($recherche_simple)){
	
$results=$idcom->query("SELECT  document.id_document,
								group_concat(distinct concat(auteur.nom, ', ', auteur.prenom) separator ' et ' ) as auteur, 
								document.titre, 
								document.soustitre, 
								document.editeur, 
								document.dateedition, 
								document.lieuedition,
								document.isbn,
								document.Cote,
								langue.intitule as langue,
								group_concat(distinct concat(traducteur.nom, ', ', traducteur.prenom) separator '; ' ) as traducteur,
								support.intitule as support, 
								type.intitule as type, 
								group_concat(distinct theme.intitule) as theme,
								document.lienimage
								
						FROM hippolyte.document
						left join auteur_document on auteur_document.id_document=document.id_document
						left join auteur on auteur.id_auteur=auteur_document.id_auteur
						left join type on document.id_type=type.id_type
						left join support on document.id_support=support.id_support 
						left join theme_document on theme_document.id_document=document.id_document
						left join theme on theme.id_theme=theme_document.id_theme
						left join traducteur on document.id_traducteur=traducteur.id_traducteur
						left join langue on document.id_langue=langue.id_langue

						WHERE titre LIKE '%$recherche_simple%' 
						OR document.soustitre LIKE '%$recherche_simple%' 
						OR auteur.nom LIKE '%$recherche_simple%'
						OR auteur.prenom LIKE '%$recherche_simple%'
						OR theme.intitule LIKE '%$recherche_simple%'
						OR traducteur.nom LIKE '%$recherche_simple%'
						OR traducteur.prenom LIKE '%$recherche_simple%'
						OR document.lieuedition LIKE '%$recherche_simple%'
						OR document.isbn LIKE '%$recherche_simple%'
						OR document.Cote LIKE '%$recherche_simple%'
						OR type.intitule LIKE '%$recherche_simple%'
						OR langue.intitule LIKE '%$recherche_simple%'
						group by document.id_document");


//Traitement du cas de zéro réponse
  
		if ($results->num_rows==0)
		{
				echo "Aucune réponse"; 
		}
		else
			{
			// Nombre de résultants
					$nb_rows = mysqli_num_rows($results);
					echo $nb_rows." résultat(s)<br/><br/>";
					
			 while($rows=$results->fetch_array(MYSQLI_ASSOC)) 
			{
				echo ('<img src="../../base_de_données/images_couvertures/'.$rows['lienimage'].'" width="100"  />');
				echo "<br/>";
				echo $rows['titre'];
				echo " ";
				echo $rows['soustitre'];
				echo("<br/>");
				
				if ($rows['auteur']) {
				echo $rows['auteur'];
				echo ";<br/>";
				}
				echo $rows['editeur'];
				echo " - ";
				echo $rows['dateedition'];
				echo "<br/>";
				echo $rows['support'];
				echo " - ";
				echo $rows['type'];
				echo "<br/>";
				echo "<br/>";
				//bouton d'envoi vers fiches-notices
				echo "<form action='../notices_php/notice_simple.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='notice simple'/>";
				echo "</form>";
				echo "<br/>";
				//bouton envoie notice idbd
				echo "<form action='../notices_php/notice_isbd.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='notice ISBD'/>";
				echo "</form>";
				echo "<br/>";
				
			}
			
			
			}
  }
else {
	
	echo "Veuillez remplir le champ !";
	
}	

$idcom->close();
?>
</body>
</html>
