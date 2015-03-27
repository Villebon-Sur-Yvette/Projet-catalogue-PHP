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

            <!-- Le texte de l'histoire de la bibliothèque va être intégré à cette page. Il est en cours de correction. -->
            <section class="informationspratiques">
                <article id="histoire">
                    <h2>Une bibliothèque digne des plus grandes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet
                        risus nec aliquam iaculis. Cras fringilla hendrerit justo, in hendrerit ex
                        fermentum in. Nunc tristique semper augue, sed porttitor diam aliquet quis.
                        Sed faucibus est feugiat lectus commodo, nec accumsan turpis porttitor.
                        Aliquam elementum nibh sed turpis ultrices, eu vehicula orci luctus.
                        Maecenas ut convallis purus, malesuada aliquam arcu. Nunc pharetra leo at
                        nulla lobortis dapibus. Quisque pretium tellus ut euismod condimentum.
                        Phasellus eget auctor turpis, a tempor neque. Mauris pellentesque sem a urna
                        commodo, at tristique augue tempus. Aenean auctor aliquet velit, eu
                        consectetur erat laoreet nec. Curabitur nec bibendum lectus. Maecenas
                        facilisis, ligula ac vulputate ultrices, odio diam dictum tortor, pulvinar
                        ullamcorper lacus diam non orci. Aenean sagittis nisi ut enim vulputate, non
                        mollis metus pharetra. In egestas ligula eget nisi dictum rhoncus. </p>
                    <p>Quisque aliquam, nibh vitae semper dapibus, nulla sem blandit odio, a finibus
                        diam metus vel sem. Aenean efficitur efficitur vulputate. Duis bibendum est
                        sit amet tristique semper. Curabitur pretium felis lorem, ut tempor eros
                        fermentum sed. Nunc auctor ac nibh a iaculis. Etiam convallis elit vel
                        dictum tristique. In lectus magna, tincidunt eget diam nec, accumsan blandit
                        metus. Fusce cursus congue magna ac hendrerit. </p>
                    <p>Nullam vel orci a felis lacinia efficitur. Nam fermentum ornare pharetra.
                        Suspendisse faucibus gravida elit interdum tristique. Etiam in pharetra
                        lorem, in tempus lectus. Sed at nisl in mauris iaculis commodo dictum ac
                        lacus. Morbi interdum felis nec est malesuada sagittis. Fusce vel sodales
                        odio. </p>
                </article>
            </section>

            <!-- footer -->
            <?php include("../invariants/footer.php") ?>

        </div>
    </body>
</html>
