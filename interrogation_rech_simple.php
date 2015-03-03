<html>
<head>
	<meta charset="UTF-8">
	<title>interrogation_recherche_simple</title>
<head>

<body>
<?php
require 'connexion_test.txt';

$results=$idcom->query("SELECT * FROM auteur, titre, editeur WHERE nom LIKE '$_POST[recherche_simple]' OR title LIKE '$_POST[recherche_simple]' OR editeur LIKE '$_POST[recherche_simple]'");

$rows=$results->fetch_array(MYSQLI_ASSOC);
echo("<br/>");

$idcom->close();
?>
</body>
</html>
