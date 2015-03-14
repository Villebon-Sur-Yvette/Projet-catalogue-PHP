<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>Histoire de la bibliothèque</title>
<link href="../css/css_projet_biblio.css" rel="stylesheet" />
<link href="../css/css_page_recherche_easy.css" rel="stylesheet" />

</head>
<body>
<div class="conteneur">
<!-- header -->
<?php include("./invariants/header.php") ?>

<!-- menu 2 : avec retour page accueil -->
<?php include("./invariants/menu2.php") ?>


<!-- Encart gauche avec la recherche : supprimé -->


<section class="rechercheeasy"> <!-- reprise du code utilisé pour l'encart de recherche simple -->

<aside>
<h2>Recherche simple</h3>
<!--formulaire recherche simple avec 2 boutons "envoyer" et "effacer"-->
<div id="caserecherche">
<form action="../interrogation_rech_simple.php" method="POST"> <!--revoir le chemin accès-->
<input type ="text" name="recherche_simple"/>
<br/>
<input type ="submit" value="Chercher"/>
<input type ="reset" value="Effacer"/>
</form>
</div>
<h3><a href="./formulaire_rech_avancee.php"> Recherche avancée<a></h3>
</aside>


</section>

<!-- footer -->
<?php include("./invariants/footer.php") ?>

</div>
</body>
</html>
