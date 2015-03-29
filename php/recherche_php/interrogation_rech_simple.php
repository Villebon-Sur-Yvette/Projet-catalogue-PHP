<html>
<head>
	
	<meta http-equiv="Content-type" content="text/html/php"  charset="UTF-8" /> 
	<title>interrogation_recherche_simple</title>

	<link href"=../../css/invariants.css" rel="stylesheet"/> 
	<link href"=../../css/css_interrogation_rech_simple.css" rel="stylesheet"/> 

<head>

<body>
<div class="conteneur">

<!-- header -->
<?php include("../invariants/header.php") ?>

<!-- menu 2 : avec retour page accueil -->
<?php include("../invariants/menu2.php") ?>

<!-- Encart gauche avec la recherche -->
<?php include("../invariants/recherche.php") ?>

<section> 

<?php
// On teste si le fomulaire a été appelé 
if (isset($_POST['submit'])) {

//Connexion à la base de données
require '../../connexion.php';

//récupération d'une variable
$recherche_simple=$_POST["recherche_simple"];

//suppression des blancs
$recherche_simple=trim($recherche_simple);

//prise en compte des caractères spéciaux
$idcom->query("SET NAMES UTF8");

// Génération d'un message si le champ n'est pas rempli
if (!empty($recherche_simple)){

//envoi de la requête SQL	
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
				echo "<h2>Aucune réponse<h2>"; 
		}
		else
			{
			// Nombre de résultants
					$nb_rows = mysqli_num_rows($results);
					echo $nb_rows." résultat(s)<br/><br/>";
			
			//affichage des résultats
			 while($rows=$results->fetch_array(MYSQLI_ASSOC)) 
			{
				//affichage de la couverture du livre
				echo ('<img src="../../base_de_données/images_couvertures/'.$rows['lienimage'].'" width="100"  />');
				echo "<br/>";
				//affichage du titre
				echo $rows['titre'];
				
				//affichage du sous-titre si besoin
				if ($rows['soustitre']) {
				echo " : ";	
				echo $rows['soustitre'];
				}
				
				//affichage de nom et prénom de l'auteur
				echo(";<br/>");
				if ($rows['auteur']) {
				echo $rows['auteur'];
				echo ";<br/>";
				}
				
				//affichage de l'éditeur, date d'édition
				echo $rows['editeur'];
				echo " - ";
				echo $rows['dateedition'];
				echo "<br/>";
				
				//affichage du support et du type de document
				echo $rows['support'];
				echo " - ";
				echo $rows['type'];
				echo "<br/>";
				echo "<br/>";
				
				//bouton d'envoi vers notice simple 
				echo "<form action='../notices_php/notice_simple.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='notice simple'/>";
				echo "</form>";
				
				//bouton d'envoi notice isbd
				echo "<form action='../notices_php/notice_isbd.php' method='POST'>";
				echo "<input type='hidden' name='id' value='$rows[id_document]'>";
				echo "<input type='submit' value='notice ISBD'/>";
				echo "</form>";
				echo "<br/>";
				
			}
			
			
			}
  }
else {
	
	echo "<h2>Veuillez remplir le champ !<h2>";
	
	}

}	
	//chemin vers formulaire recherche_simple
else {
	header("Location: recherche_simple.php");
}			

$idcom->close();
?>
</section>

<!-- footer -->
<?php include("../invariants/footer.php") ?>

</div>
</body>
</html>
