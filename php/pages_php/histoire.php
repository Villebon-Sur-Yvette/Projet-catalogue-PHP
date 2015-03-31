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
        <title>Histoire de la bibliothèque de Villebon-sur-Yvette</title>

        <!-- Liens CSS -->
        <link href="../../css/invariants.css" rel="stylesheet" />
        <link href="../../css/histoire_biblio.css" rel="stylesheet" />
   
    </head>

    <body>
        <div class="conteneur">
            <!-- header -->
            <?php include("../invariants/header.php") ?>

           <!-- menu 2 : avec retour page accueil -->
            <?php include("../invariants/menu2.php") ?>
                

            <!-- Encart gauche avec la recherche -->
            <?php include("../invariants/recherche.php") ?>

            <section class="informationspratiques">
                <article id="histoire">
                    <h2>Histoire de la bibliothèque de Villebon-sur-Yvette</h2>
                    <p>
                        La bibliothèque de Villebon-sur-Yvette date des années 1960 c'est-à-dire au moment de l'essor démographique
                        de la commune de Villebon-sur-Yvette. En effet entre 1946 et 2000 la commune passe de 1456 à 9912 habitants 
                        (soit une hausse de 681%). Par ailleurs en 1962, la ville de Villebon-sur-Yvette est considéré comme une cité
                        residentielle. 
                    </p>
                    <p>
                        De part cette forte augmentation de la population, les années 1960-1970 sont des années de construction et de développement
                        de Villebon-sur-Yvette. C'est durant cette période que sont construit les services publics : agence de La Poste, première
                        MJC, maison de retraite, et bien entendu la bibliothèque qui deviendre médiathèque en 1999. Dans les années 1980, pour 
                        faciliter l'accès aux livres pour les plus jeunes, une ludothèque sera créé à proximité de la crèche municipale. Cette 
                        ludothèque fait officiellement partie de la bibliothèque de Villebon-sur-Yvette. 
                    </p>
                    <p>
                        D'abord logé dans une annexe municipale, la bibliothèque a son propre batîment depuis 1989, aujourd'hui encore
                        elle se situe au même endroit dans ce batîment qui se veut moderne et le plus pratique possible pour accueillir
                        tous les lecteurs de la bibliothèque 
                    </p>
                    <p>
                        Dès la mise en place du site Web de la commune de Villebon-sur-Yvette, la médiathèque a eu une place de premier
                        ordre. Aujourd'hui sous l'impulsion de sa directrice Catherine Foly, la médiathèque propose son propre site pour
                        gagner encore en visibilité et en praticité. C'est la raison d'être de ce nouveau site.
                    </p>
                    <img src="../../css/images_css/photo_biblio.jpg" name="photo bibliothèque" id="photobiblio" />
                </article>
            </section>

            <!-- footer -->
            <?php include("../invariants/footer.php") ?>

        </div>
    </body>
</html>
