<!DOCTYPE html>
<html>
<head>
    <title>Aide à l'utilisateur</title>

    <!-- Je laisse nos géniaux graphistes le bon soin (et le bon goût) de mettre un style élégant à tout cela -->
    <link rel="stylesheet" type="text/css" href="../css/aide.css">

    <meta http-equiv="Content-type" content="text/html, charset= utf-8"/>

    <!-- Pour ce qui est des métadonnées il faut voir en commun ce que l'on veut mettre. -->
    <meta name="description"/>
    <meta type="robots/keywords"/>
</head>

<body>
    <div class="conteneur">
<!-- bandeau sup : logo, titre et image de la ville -->
<header>
    <div class="logo"><figure><img src="../images/blason.png" /></figure></div>
    <div id="titrepp"><h1>Bibliothèque municipale</h1><h1>de Villebon-sur-Yvette</h1></div>
</header>


<!-- menu : présentation, aide, catalogue, accès réservé -->
 <?php include("./invariants/menu2.php") ?>
 
<!-- Encart gauche avec la recherche -->
 <?php include("./invariants/recherche.php") ?>
 
 
    <div class="menu_aide">
        <h2>Sommaire</h2>
        <!-- Sommaire "Wikipédia" de l'aide à l'utilisateur -->
        <ol id="sommaire">
            <li><a href="#apropos">A propos du site</a>
                <ul>
                    <li><a href="#sitebut">Un site dans quel but</a></li>
                    <li><a href="#proposesite">Que propose ce site</a></li>
                </ul>
            </li>
            <li><a href="#infopra">Informations pratiques</a>
                <li><a href="#google">Utilisation du moteur de recherche</a>
                    <ul>
                        <li><a href="#rechsimple">Le module de recherche simple</a></li>
                        <li><a href="#rechavancee">La recherche avancée</a></li>
                        <li><a href="#fructu">Conseils pour une recherche fructueuse</a></li>
                    </ul>
                </li>
                <li><a href="#notice">Comment bien utiliser une notice ?</a>
                    <ul>
                        <li><a href="#infoessens">Les informations essentielles</a></li>
                        <li><a href="#searchbook">Comment retrouver mon ouvrage à partir d'une notice?</a></li>
                        <li><a href="#avconseil">Conseils avancés pour les notices</a></li>
                    </ul>
                </li>   
                <li><a href="#accesreserve">Accès réservé</a>
                    <ul>
                        <li><a href="#concerned">Qui est concerné?</a></li>
                        <li><a href="#reserved">Pourquoi cette partie réservée?</a></li>
                    </ul>
                </li>   
                <li><a href="#accueilgo">Retour en haut de la page</a></li>
            </ol>
        </div>

        <!-- Texte de l'aide à l'utilisateur -->
        <a id="accueilgo"></a>
        <div class="help">
            <!-- Peut-on remettre le titre comme il était et faire du small-caps dans la CSS ? -->
            <h2>Conseils à l'utilisateur de ce site</h2>
            <p>
                Cette rubrique a pour but d'aider l'utilisateur à exploiter au mieux toutes les ressources de ce site. Dans ce but, nous allons ici nous attarder sur l'ensemble des fonctionnalités du site et les expliquer en détail une à une. Si vous rencontrez un problème particulier vous pouvez cliquer sur le sommaire ci-dessus pour aller directement à la rubrique qui vous intéresse. 
            </p>
            <h3>A propos de ce site</h3>
            <a id="apropos"></a>
            <h5>Un site dans quel but?</h5>
            <a id="sitebut"></a>
            <p>
                Ce site a pour but de rendre plus accessible la bibliothèque municipale de Villebon-sur-Yvette. Il permet à chaque utilisateur de consulter le catalogue de la bibliothèque (plus de 1500 références actuellement), d'effectuer des recherches précises dans l'ensemble du catalogue et d'obtenir les renseignements pratiques pour accèder à la bibliothèque. 
            </p>
            <p>
                Nous espèrons qu'avec cette aide ce site vous offrira toutes les réponses et les services que vous souhaitez.
                Bonne lecture!
            </p>
            <br/>
            <h5>Que propose ce site?</h5>
            <a id="proposesite"></a>
            <p>
                Ce site propose plusieurs services à nos utilisateurs :
                <ul>
                    <li>Une présentation de la bibliothèque de Villebon-sur-Yvette</li>
                    <li>L'histoire de la bibliothèque de Villebon-sur-Yvette</li>
                    <li>Un module pour recherche immédiatement un ouvrage dans le catalogue</li>
                    <li>Une recherche avancée pour trouver efficacement tous les ouvrages du catalogue</li>
                    <li>L'ensemble des notices du catalogue</li>
                    <li>Une aide afin d'utiliser au mieux tous ces services</li>
                </ul>
            </p>
            <p>
                Ce site se veut le plus simple et le plus pratique possible. Il doit permettre aux utlisateurs d'utiliser le catalogue de la bibliothèque au mieux. Nous souhaitons que l'ensemble des ouvrages vous soit accessible et vous permette de découvrir de nouvelles choses. 
            </p>
            <br/>
            <h3>Informations pratiques</h3>
            <a id="infopra"></a>
            <p>
                L'ensemble des informations pratiques concernant la biliothèque de Villebon-sur-Yvette se trouve sur la page d'accueil du site de la bibliothèque. Elles sont facilement accessibles grâce à leur présence sur le bord droit de la page.
            </p>

            <!-- Toutes les fonctionnalités peuvent être modifiées en focntion de ce qu'il ser adécidé de mettre sur le site. -->
            
            <p>
                Parmi ces informations pratiques, vous trouverez :
                <ul>
                    <li>Les horaires d'ouverture et de fermeture de la bibliothèque</li>
                    <li>Les dernières actualités de la bibliothèque</li>
                    <li>Un calendrier présentant les événements liés à la bibliothèque</li>
                    <li>Les tarifs d'abonnement annuel à la bibliothèque</li>
                    <li>L'adresse et les coordonnées téléphoniques de la bibliothèque</li>
                </ul>
            </p>
            <p>
                Précisons que les horaires d'ouvertures et de fermeture de la bibliothèque sont les horaires généraux. Dans le cas d'une fermeture exceptionnelle, une information sera postée sur la page d'accueil du site de la bibliothèque. 
            </p>
            <p>
                Les actualités postées sur le site de la bibliothèque sont libras d'accès à tous les adhérants de la bibliothèque gratuitement (sauf contre-indication précisée dans la description de l'actualité). Pour certaines activités où les places sont limitées, un système de reservation sera mis en place et signalé dans la description de l'actualité. 
                Sont postés comme actualités de la bibliothèque, les différentes réunions de lecture et autres activités culturelles (conférences, atelier de lecture et d'écriture, atelier de découverte musicale), un point mensuel sur les nouvelles acquisitions et les informations urgentes comme par exemple une fermeture exceptionnelle de la bibliothèque. Seront aussi publiées les informations importantes concernant la ville de Villebon-sur-Yvete. 
            </p>
            <br/>
            <h3>Utilisation du moteur de recherche</h3>
            <a id="google"></a>
            <p>
                Ce site offre de nombreux moyens de recherche dans le catalogue de la bilbiothèque de Villebon-sur-Yvette. Notre objectif est que chaque utilisateur puisse rechercher simplement et trouver l'ouvrage qu'il cherche. Nous allons détailler comment fonctionne chacun de ces outils de recherche. 
            </p>
            <br/>
            <h5>Le module de recherche simple</h5>
            <a id="rechsimple"></a>

            <!-- Ceci peut être modifié selon comment le moteur de recherche sera établi dans le site en cours de création -->

            <p>
                Ce petit module se trouve sur la page d'accueil du site. Ce petit module est là pour faire une recherche rapide dans le catalogue de la bilbiothèque. L'utilisateur ne choisit aucune option de recherche il rentre juste un ou plusieurs mots dans un champ de saisie de texte. Le module recherche ensuite dans le catalogue l'ensemble des ouvrages qui contiennent le ou les mots saisis et renvoie les résultats trouvés. C'est le moyen le plus rapide pour effectuer une rechercher et obtenir un résultat. Cependant, la recherche simple pose plusieurs problèmes. Elle peut ramener des résultats non voulus ou peu cohérents (cela dépend des mots utilisés dans le cadre de la recherche) ou à l'inverse ne rien trouver si les détails de la recherche sont très parcellaires. 
            </p>
            <p>
                Prenons un exemple, si l'on cherche un livre d'Emile Zola sans connaître le titre du livre, la recherche rapide va fournir un grand nombre de résultats sans que l'utilisateur puisse donner d'autres critères de recherche. 
                Un autre exemple, il est compliqué de trouver un livre sans connaître le titre ou l'auteur dans le module de recherche simple.
            </p>
            <p>
                Pour conclure, le module de recherche est un moyen simple et facile de trouver un ouvrage quand on connaît le titre ou le nom de l'auteur. Dans les autres cas, il est préférable que l'utilisateur passe par la recherche avancée pour avoir de meilleurs résultats et passer à côté de l'ouvrage qu'il convoite. 
            </p>
            <br/>
            <h5>La recherche avancée</h5>
            <a id="rechavancee"></a>    

            <!-- Ceci peut être modifié selon comment le moteur de recherche sera établi dans le site en cours de création -->

            <p>
                La recherche avancée est un autre moyen de trouver un ouvrage dans le catalogue de la bibliothèque. Il s'adresse à tous les utilisateurs de la bilbiothèque. La recherche avancée est accessible par la barre de menu qui se trouve en haut de chaque page du site de la bibliothèque. L'utilisateur arrive sur une page spécifique que nous allons détailler. 
            </p>
            <p>
                Sur cette page, l'utilisateur peut effectuer une recherche très précise en mélant plusieurs critères de recherches à sa convenance. Pour cela il peut choisir les critères qu'il utilise parmi un menu déroulant avec chaque champ de saisie de texte (auteur, date, titre, édition, ...) puis remplir le champ de saisie de texte en fonction du critère choisi. 
                Il peut aussi choisir un thème ou un genre littéraire par un choix issu de deux menus déroulants. 
                Sur la droite de chacune des barres de recherches, il peut choisir un ensemble vide, un "et" et un "ou" pour préciser si tous les critères de recherche doivent être présents ou non. Par défaut, ce menu déroulant laisse un ensemble vide qui a pour valeur un "ou" non inclusif. 
            </p>
            <br/>
            <h5>Conseils pour des recherches fructueuses</h5>
            <a id="fructu"></a>
            <p>
                Le moteur de recherche est conçu de telle sorte que les résultats ne sont pas sensible à la casse (c'est-à-dire que les résultats ne sont pas modifiés que l'on mette ou pas des majuscules.) et que les espaces vides soit correctement interprétés. Dans le cas où une lettre manquerait ou serait fausse (par erreur de frappe par exemple), le moteur serait quand même capable de retourner des résultats approximatifs. 
            </p>
            <p>
                Pour utiliser au mieux ce moteur de recherche voici quelques conseils.
                <ul>
                    <li>Remplir un maximum de critères permet de réduire le plus possible le nombre de résultats rétournés par le moteur de recherche.</li>
                    <li>L'utilisation des compléments boléens permet de faire du "sur-mesure" au niveau de la recherche et d'obtenir les résultats les plus efficaces. Vous êtes sur que tous les résultats susceptibles de vous intéresser seront retournés par le moteur de recherche.</li>
                    <li>Multiplier le nombre de mots dans les champs de saisie de texte permet aussi de rationnaliser au maximum les résultats retournés.</li>
                    <li>L'utilisation du critère "thème" peut permettre d'obtenir des suggestions autour du résultat principal que l'utilisateur recherche en priorité.</li>
                    <li>De même pour l'utilisation du critère "genre littéraire" qui peut à la fois préciser et étendre les résulats vers des ouvrages qui peuvent intéresser l'auteur de la recherche.</li>
                </ul>
            </p>
            <p>
                Pour conclure sur les différents moyens de recherche qu'offre le site, l'utilisateur peut et doit naviguer entre les deux selon le contexte de sa recherche. La recherche simple bien que peu maniable permet un résultat rapide et efficace tout en manquant de souplesse. La recherche avancée permet d'obtenir les résultats les plus pertinents et précis possible tout en permettant aussi d'étendre ceux-ci en cas de besoin. Dans tout les cas, le catalogue est ainsi le plus accesible possible pour tous les utilisateurs de la bibliothèque et de son site. 
            </p>
            <br/>
            <h3>Comment bien utiliser une notice?</h3>
            <a id="notice"></a>
            <p>
                Après une recherche dans les différents outils de recherche du site de la bibliothèque, l'utilisateur a accès aux notices des ouvrages qui correspondent à sa recherche. Nous allons maintenant vous expliquez tout ce que les notices peuvent vous apprendre. 
            </p>
            <br/>
            <h5>Les informations essentielles</h5>
            <a id="infoessen"></a>
            <p>

                <!-- A modifier ceci n'est décrit que sur la base du projet initial des notices. -->

                Dans chaque notice l'utilisateur peut trouver les informations essentielles pour connaître l'ouvrage en question.
                <ul>
                    <li>Le titre de l'ouvrage (et éventuellement le sous-titre)</li>
                    <li>L'identité de l'auteur</li>
                    <li>La date et le lieu de production de l'ouvrage</li>
                    <li>Le genre littéraire et le thème de l'ouvrage</li>
                    <li>Une image de la couverture du livre</li>
                    <li>La côte de l'ouvrage</li>
                </ul>
            </p>
            <p>
                Ces informations permettent à l'utilisateur de trouver ce livre en bibliothèque mais aussi de pouvoir l'inscrire dans une bibliographie ou prendre ces caractéristiques dans un but académique. 
            </p>
            <br/>
            <h5>Comment retrouver mon ouvrage à partir d'une notice?</h5>
            <a id="searchbook"></a>
            <p>
                Grâce à la notice, l'utilisateur du site peut retrouver l'ouvrage qu'il désire. Il y a plusieurs moyens pour cela.
            </p>
            <p>
                La côte de l'ouvrage (présente dans la notice) permet de retrouver rapidement l'ouvrage dans les rayons de la bibliothèque. Si jamais, l'utilisateur ne connaît pas le système de rangement et de cotation de la bibliothèque, le personnel de la bibliothèque est à sa disposition pour l'aider à trouver son ouvrage. La côte reste le moyen le plus sûr et le plus rapide d'obtenir un ouvrage. 
            </p>
            <p>
                Le thème et le genre littéraire peuvent aussi permettre de retrouver un livre qui sera rangée en fonction de ces deux critères. Tout cela se fait par le même principe que la côte de l'ouvrage. 
            </p>
            <br/>
            <h5>Conseils avancés sur les notices</h5>
            <a id="avconseil"></a>
            <p>
                Les notices peuvent aussi révéler d'autres informations. Par exemple, le thème et le genre d'un ouvrage peut permettre de trouver d'autres ouvrages sur le même sujet ou un sujet proche susceptible d'intéresser l'utilisateur concerné.

                <!-- Pour s'ajouter ici le système de fonctionnement du panier et des tags de préférence si tout cela est mis en place pour le site-->

            </p>
            <br/>
            <h3>Accès réservé</h3>
            <a id="accesreserve"></a>
            <p>
                Comme vous aves pu le remarquer, nous avons parlé de l'ensemble des fonctionnalités présentes sur le site. Pourtant, il reste une partie du site qui ne vous a pas été présenté. Cette partie si mystérieuse est l'accès réservé qui est situé dans la barre de menu présente en haut de toutes les pages du site. Bien que comme l'indique son énoncé, cette partie ne concerne pas la plupart des utilisateurs qui consulte le site de la bibliothèque de Villebon-sur-Yvette. 
            </p>
            <br/>
            <h5>Qui est concerné?</h5>
            <a id="concerned"></a>
            <p>
                Cette partie concerne avant toute chose, le personnel de la bibliothèque de Villebon-sur-Yvette. Elle leur permet de fournir et remplir le catalogue de la bibliothèque, de faire des modifications dans celui-ci. Elle leur permet aussi d'effectuer certaines recherches pour les lecteurs demandant de l'aide en bibliothèque ou d'autres renseignements (comme où se situe un livre dans la bibliothèque par exemple)
            </p>
            <br/>
            <h5>Pourquoi cette partie réservée?</h5>
            <a id="reserved"></a>
            <p>
                Bien que les utilisateurs puissent faire remonter leurs remarques au personnel de la bibliothèque, il appartient à la bibliohtèque de préserver son catalogue de tout acte malveillant. De plus, l'entretien et l'etoffement du catalogue fait partie des missions du personnel de la bibliothèque qui utilise les outils de cette partie réservée au mieux pour aider les utilisateurs de la bibliothèque. Il s'agit d'outils professionnels dont l'usage ne serait pas profitable au grand public. C'est pour cela que cette partie du site est filtré par une authentification numérique afin d'en préserver la sécurité. 
            </p>
            <br/>

            <!-- Bouton retour en haut de la page. Je ne sais pas si tu veux que le bouton soit compris dans la div. -->
            <a id="retourhautpage" href="#accueilgo">Retour en haut de la page</a>

        </div>

        <!-- Il faudra peut-être ajouter à cette aide à l'utilisateur le fonctionnement du panier si celui-ci est mis en place. Il faudra faire de même si l'idée des tags et des propositions spontannées est aussi retenue. -->

  <!-- footer -->
 <?php include("./invariants/footer.php") ?>
 
 </div>
 </body>
    

    </html>