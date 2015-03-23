<!DOCTYPE html>
<html lang="fr">

    <!-- métadonnées -->
    <head>
        <meta charset="UTF-8" />
        <!-- Icone du site-->
        <link href="../css/images_css/blason.png" type="image/png" rel="icon" />
        <!-- <meta name="author" content="Anne-Cécile et Constance" /> -->
        <!-- <meta name="keywords" lang="fr" content="catalogue bibliothèque" /> -->
        <!-- <meta name="Description"
            content="Site internet de la bibliothèque municipale de " /> -->
        <title>Bibliothèque municipale de Villebon-sur-Yvette</title>
        <link href="../css/invariants.css" rel="stylesheet" />
        <link href="../css/homepage.css" rel="stylesheet" />

        <!-- Javascript et CSS nécessaires pour le maintien du slideshow -->

        <script type="text/javascript" src="../javascript/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="../javascript/coin-slider.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/coin-slider-styles.css" />
        
    </head>

    <body>
        <!-- div qui contient l'ensemble du site web -->
        <div class="conteneur">

            <!-- header -->
            <?php include("../invariants/header.php") ?>
                          
            <!-- menu : présentation, aide, catalogue, accès réservé -->
            <?php include("../invariants/menu.php") ?>


            <!-- Encart gauche avec la recherche -->
            <?php include("../invariants/recherche.php") ?>

            <!-- soit un calendrier de la bibliothèque, soit les horaires d'ouverture -->
            <!--<div id="encart_calendrier"><aside class="calendrier">26 février 2015</aside></div>-->

            <div class="encart_actualite">
                <section class="actualite">
                    <h2>ACTUALITES</h2>
                    <article class="actu">
                        <h3>Le 28 février 2015 : discussion manga avec dégustation de thé</h3>
                        <p>Venez discuter de vos mangas préférés en dégustant une délicieuse tasse
                            de thé sencha uji de chez Mariage Frères. </p>
                    </article>
                    <article class="actu">
                        <h3>Le 31 mars 2015 : Jam session poésie et slam </h3>
                        <p>La bibliothèque de Villebon-sur-Yvette vous donne l'opportunité de monter
                            sur scène pour lire vos créations poétiques. Poètes en herbe et
                            slammeurs urbains seront à l'honneur ! Et n'oubliez pas "Il n'y a pas de
                            grands poètes sans grand public" ("to have great poets, there must be
                            great audiences." Walt Whitman), nous espérons donc vous voir nombreux !
                        </p>
                    </article>
                </section>
            </div>

            <!-- contenu de la page active -->
            <div id="contenu">
                <div id="slideshow">
                    <div id="coin-slider">
                        <img src="../css/images_css/villebon.jpg" alt="Villebon-sur-Yvette"/>
                            <span>
                                Bienvenue dans la commune de Villebon-sur-Yvette!
                            </span>
                        <img src="../css/images_css/bm_villebon.jpg" alt="BM Villebon-sur-Yvette"/>
                            <span>
                                L'ensemble du personnel de la bibliothèque de Villebon-sur-Yvette vous souhaite un bon accueil!
                            </span>
                        <img src="../css/images_css/monde_bibliotheque.png" alt="Le monde des bibliothèques"/>
                            <span>
                                Venez à apprendre plus sur l'histoire de notre bibliothèque!
                            </span>
                        <img src="../css/images_css/livre_poesie.jpg" alt="Soirée Poésie"/>
                            <span>
                                Le 31 mars 2015 : Jam session poésie et slam à la bibliothèque!
                            </span>
                        <img src="../css/images_css/manga.jpg" alt="Soirée manga"/>
                            <span>
                                Le 28 février 2015 : Discussion manga. 
                            </span>
                    </div>
                </div>
            </div>
            
            <!-- footer -->
            <?php include("../invariants/footer.php") ?>
            

        </div>

            <!-- Script nécessaire au slideshow -->

            <script type="text/javascript">
                $(document).ready(function(){
                $('#coin-slider').coinslider({ width: 700, height: 400, delay: 4000, navigation: true, links: false, hoverPause: false });
                });
        </script>
    </body>
</html>
