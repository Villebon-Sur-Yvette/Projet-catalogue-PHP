<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> Bibliothèque municipale de Villebon-sur-Yvette </title>
        <meta charset="UTF-8" />
        <!-- Icone du site-->
        <link href="../../css/images_css/blason.png" type="image/png" rel="icon"/>
        <!-- <meta name="author" content="Anne-Cécile et Constance" /> -->
        <!-- <meta name="keywords" lang="fr" content="catalogue bibliothèque" /> -->
        <!-- <meta name="Description"
            content="Site internet de la bibliothèque municipale de " /> -->
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

            <div class="actions_pro">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <a href="">
                                   <h2 id="rechercher">Rechercher</h2>
                                   <img src="../../css/images_css/recherche.jpg">                           
                                </a>                                
                            </td>
                            <td>
                                <a href="">
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