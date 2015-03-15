<!-- Encart gauche avec la recherche -->
<div class="encart_recherche"> <!-- pourquoi mettre une class ici ? Il n'y aura pas plusieurs encart_recherche dans la même page ? -->
<aside>
<h4 id="recherche">Recherche simple</h4>
<!--formulaire recherche simple avec 2 boutons "envoyer" et "effacer"-->
<div id="caserecherche">
<form action="../interrogation_rech_simple.php" method="POST"> <!--il manque le fichier php bien sûr-->
<input type ="text" name="recherche_simple"/>
<br/>
<input type ="submit" value="Chercher"/>
<input type ="reset" value="Effacer"/>
</form>
</div>
<h4 id="recherche"><a href="./formulaire_rech_avancee.php"> Recherche avancée<a></h4>
</aside>
</div>