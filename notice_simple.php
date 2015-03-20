<html>
<body>
<?php
require 'connexion.php';

$results=$idcom->query("SELECT *
								
						FROM hippolyte.document
						left join auteur_document on auteur_document.id_document=document.id_document
						left join auteur on auteur.id_auteur=auteur_document.id_auteur
						left join type on document.id_type=type.id_type
						left join support on document.id_support=support.id_support 
						left join theme_document on theme_document.id_document=document.id_document
						left join theme on theme.id_theme=theme_document.id_theme
						WHERE document.id_document = '$_POST[id]'LIMIT 1");

$rows=$results->fetch_array(MYSQLI_ASSOC);

				echo $rows['titre'];
				echo " ";
				echo $rows['soustitre'];
				echo("<br/>");
				echo $rows['auteur'];
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
$idcom->close();
?>
</body>
</html>