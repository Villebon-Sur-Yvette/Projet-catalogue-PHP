<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Informations pratiques</title>
        <link href="../css/css_projet_biblio.css" rel="stylesheet" />
    </head>
    <body>
        <div class="conteneur">

        <!-- header -->
        <?php include("./invariants/header.php") ?>

        <!-- menu : présentation, aide, catalogue, accès réservé -->
        <?php include("./invariants/menu2.php") ?>

        <!-- Encart gauche avec la recherche -->
        <?php include("./invariants/recherche.php") ?>

            <section class="informationspratiques">
                <article id="horaires">
                    <h2>Horaires d'ouverture au public</h2>
                    <ul>
                        <li>mardi de 15 h à 19 h,</li>
                        <li>mercredi de 10 h à 12 h et de 14 h à 18 h,</li>
                        <li>jeudi de 15 h à 18 h,</li>
                        <li>samedi de 10 h à 17h30.</li>
                    </ul>
                </article>
                <article class="pret">
                    <h2>Prêt de livres et périodiques</h2>
                    <p> Au maximum 6 livres, 4 revues, 4 bandes dessinées, 2 textes lus et 2
                        documents sonores jeunesse par personne pour une période de trois semaines.  </p>
                    <ul>
                        <li>Villebonnais : gratuit.</li>
                        <li>Non Villebonnais : 28,40 €.</li>
                    </ul>
                </article>
                <article class="pret">
                    <h2>Prêt de DVD et de CD</h2>
                    <p>Un abonnement annuel est nécessaire pour emprunter 10 CD et 4 DVD. Cet
                        abonnement gratuit est réservé aux plus de 11 ans. Cependant, tout enfant de
                        moins 11 ans muni de la carte d'un adulte et d'une autorisation écrite
                        signée par l'un de ses parents peut emprunter. Le prêt est consenti pour une
                        période de trois semaines non renouvelable.</p>
                    <ul>
                        <li>Villebonnais : gratuit.</li>
                        <li>Non Villebonnais : gratuit.</li>
                        <li>Titulaires de la carte Villebon Loisirs ou Villebon Services :
                            gratuit.</li>
                    </ul>
                    <p>Lors du retour, merci de ne pas déposer les documents (DVD et CD) dans la
                        boîte à livres. </p>
                </article>
                <article id="durantannee">
                    <h2>Tout au long de l'année</h2>
                    <p>Expositions et animations temporaires.</p>
                    <p>Bibliographies thématiques et catalogues de nouveautés.</p>
                    <p>Un samedi par mois, le matin :</p>
                    <ul>
                        <li>Racontines (Contes pour les tout-petits).</li>
                    </ul>
                    <p>Un mercredi par mois, le matin :</p>
                    <ul>
                        <li>Heure du conte (tout public).</li>
                        <li>Comité de lecture pour les enfants de 8 à 12 ans.</li>
                        <li>La lanterne magique (séance cinéma pour les 4 - 9 ans).</li>
                    </ul>
                    <p>Rendez-vous bimestriel :</p>
                    <ul>
                        <li>Kestuli : comité de lecture pour les 13-14 ans (mercredi).</li>
                        <li>Thé ou café musical : présentation de nouveautés CD/DVD à l’Espace Image
                            et Son (samedi).</li>
                    </ul>
                    <p>"La lanterne magique" (séance cinéma pour les 5-9 ans).</p>
                    <p>Retrouvez les dates de tous nos prochains rendez-vous en rubrique
                            <emph>Agenda</emph> </p>
                </article>
                <article id="internet">
                    <h2>Consultation Internet</h2>
                    <p>La Médiathèque propose 4 ordinateurs pour une consultation Internet
                        gratuite.</p>
                </article>
            </section>

            <!-- footer -->
            <?php include("./invariants/footer.php") ?>
        </div>
    </body>
</html>
