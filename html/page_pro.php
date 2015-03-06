<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> Bibliothèque municipale de Villebon-sur-Yvette </title>
        <meta charset="UTF-8" />
        <!-- Icone du site-->
        <link href="blason.png" type="image/png" rel="icon"/>
        <!-- <meta name="author" content="Anne-Cécile et Constance" /> -->
        <!-- <meta name="keywords" lang="fr" content="catalogue bibliothèque" /> -->
        <!-- <meta name="Description"
            content="Site internet de la bibliothèque municipale de " /> -->
        <link href="../css/face_pro.css" rel="stylesheet" />
    </head>
    
    <body>
        <header>
            <div id="titrepp"><h1>Bibliothèque municipale de Villebon-sur-Yvette</h1></div>
            <h2>Accès réservé</h2>
        </header>

        <!-- menu : présentation, aide, catalogue, accès réservé -->
            <nav>
                <ul id="menu" class="niveau1">
                    <li><a href="homepage.php">ACCUEIL</a></li>
                    <li><a href="">PRESENTATION</a>
                        <ul class="niveau2">
                            <li><a href="">Informations pratiques</a></li>
                            <li><a href="">Histoire</a></li>
                            <li><a href="">...</a>
                            </li>
                        </ul></li>
                    <li><a href="">CATALOGUE<ul class="niveau2">
                            <li><a href="">Recherche simple</a>
                            </li>
                            <li><a href="">Recherche avancée</a></li>
                        </ul>
                    </a></li>
                </ul>
            </nav>

            <!--Aide et menu de l'aide-->
            <div class="menu_aide">
                <h1><a href="aide_pro.html">AIDE</a></h1>
                <!-- Sommaire de l'aide professionnelle -->
            
        <ol id="sommaire">
            <li><a href="#interfacepro">L'interface professionnelle</a>
                <ul>
                    <li><a href="#whyinterfacepro">Pourquoi une interface professionnelle?</a></li>
                    <li><a href="#geninterfacepro">Généralités sur l'interface professionnelle</a></li>
                </ul>
            </li>
            <li><a href="#googlepro">Le moteur de recherche avancé</a>
                <ul>
                    <li><a href="#showgooglepro">Présentation du moteur de recherche</a></li>
                    <li><a href="#diffgoogle">Quelles différences avec le moteur de recherche de l'interface publique?</a></li>
                    <li><a href="#advicegoogle">Conseils pour l'utilisation du moteur de recherche</a></li>
                </ul>
            </li>
            <li><a href="#noticepro">Le formulaire de création et de modification des notices</a>
                <ul>
                    <li><a href="#noticeplus">Comment ajouter une notice ?</a></li>
                    <li><a href="#noticechange">Comment modifier une notice ?</a></li>
                    <li><a href="#noticemoins">Comment supprimer une notice ?</a></li>
                </ul>
            </li>
        </ol>
    </div>
            </div>

            <!-- Encart gauche avec la recherche -->
            <div class="encart_recherche"> <!-- pourquoi mettre une class ici ? Il n'y aura pas plusieurs encart_recherche dans la même page ? -->
                <aside>
                    <h3 id="recherche">Recherche simple</h3>
                    <!--formulaire recherche simple avec 2 boutons "envoyer" et "effacer"-->
                        <div id="recherche">
                            <form action="../interrogation_rech_simple.php" method="POST"> <!--il manque le fichier php bien sûr-->
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
                                   <img src="../images/recherche.jpg">                           
                                </a>                                
                            </td>
                            <td>
                                <a href="">
                                    <img src="../images/notice.jpg"/>
                                    <h2 id="ajouter">Ajouter une notice</h2>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>    
            </div> 

    </body>
</html>