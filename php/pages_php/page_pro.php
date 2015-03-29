<!-- Ouverture de la session PHP pour ouvrir l'interface sécurisée -->
<?php
session_start();
?>

<!-- Début de la page HTML -->
<!DOCTYPE html>
<html lang="fr">

    <head>

        <!-- Mise en place du charset -->
        <meta charset="UTF-8" />

        <!-- Icone du site-->
        <link href="../../css/images_css/blason.png" type="image/png" rel="icon" />

        <!-- Métadonnées -->
        <meta name="author" content="Anne-Cécile Schreiner, Clément Cros, Constance Le Roux, Domitille Guerrier de Dumast, Marie Guyot" />
        <meta name="keywords" lang="fr" content="catalogue bibliothèque Villebon-sur-Yvette " />
        <meta name="Description" content="Site internet de la bibliothèque municipale de Villebon-sur-Yvette " />
        
        <!-- Titre de la page -->
        <title>Interface professionnelle de la bibliothèque municipale de Villebon-sur-Yvette</title>

        <!-- Liens CSS -->
        <link href="../../css/style_pro.css" rel="stylesheet" />

    </head>

    <body>
        <!-- header pro -->
                 <?php include("../invariants/header_pro.php") ?>

        <!-- menu : présentation, aide, catalogue, accès réservé -->
               <?php include("../invariants/menu_pro.php") ?>

            <!-- Encart gauche avec la recherche -->
            <div class="encart_recherche"> <!-- pourquoi mettre une class ici ? Il n'y aura pas plusieurs encart_recherche dans la même page ? -->
                <aside>
                    <h3 id="recherche">Recherche simple</h3>
                    <!--formulaire recherche simple avec 2 boutons "envoyer" et "effacer"-->
                        <div id="recherche">
                            <form action="../recherche_php/interrogation_rech_simple.php" method="POST"> <!--il manque le fichier php bien sûr-->
                                <input type ="text" name="recherche_simple"/>
                                <br/>
                                <input type ="submit" value="Chercher"/> 
                                <input type ="reset" value="Effacer"/>
                            </form> 
                        </div>
                    <h3 id="recherche">Recherche avancée</h3>
                </aside>
            </div>

            <!-- Contenu central avec les deux images "dynamiques" -->
            <div class="actions_pro">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <a href="../recherche_php/formulaire_recherche_avancee_pro.php">
                                   <h2 id="rechercher">Rechercher</h2>
                                   <img src="../../css/images_css/recherche.jpg">                           
                                </a>                                
                            </td>
                            <td>
                                <a href="../formulaires_pro_php/formulaire_notice.php">
                                    <img src="../../css/images_css/notice.jpg"/>
                                    <h2 id="ajouter">Ajouter une notice</h2>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            <!-- footer -->
            <?php include("../invariants/footer.php") ?>
            </div> 
 
    </body>
</html>