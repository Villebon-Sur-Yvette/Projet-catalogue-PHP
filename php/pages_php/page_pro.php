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
    <div class="conteneur">

        <!-- header pro -->
                <?php include("../invariants/header_pro.php") ?>

        <!-- menu : présentation, aide, catalogue, accès réservé -->
                <?php include("../invariants/menu_pro.php") ?>

        <!-- Encart gauche avec la recherche -->
                <?php include("../invariants/recherche.php") ?>

            <!-- Contenu central avec les deux images "dynamiques" -->
            <div class="actions_pro">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <a href="../recherche_php/formulaire_recherche_avancee_pro">
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
                
            </div> 

            <!-- footer -->
            <?php include("../invariants/footer.php") ?>
            
    </div>
    </body>
</html>