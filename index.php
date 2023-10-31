<!DOCTYPE html>
<html lang="fr">
<?php
// GETTING THE HEADER AND PASSING $title
$title = "Fly'IT - ESN 3.0";
require_once './components/head.php';
?>

<body>
    <!-- Spinner -->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center bg-white">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <?php
    // TOPBAR inculding NAVBAR
    require_once './components/topbar.php';

    // CAROUSEL
    require_once './components/carousel.php';

    ?>

    <!------------------------------------------------------------ ABOUT START------------------------------------------------------------>
    <section class="container-xxl py-3 about" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100 pt-5" src="img/values.jpeg" alt="" style="object-fit: cover" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="pill-container">
                            <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">
                                À propos de nous
                            </div>
                        </div>
                        <h1 class="display-6 mb-5 text-secondary">Bienveillance, Transparence et Accompagnement</h1>
                        <div class="bg-light border-bottom border-5 border-secondary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Fly'IT met le bien-être de ses collaborateurs au cœur de ses préoccupations, car
                                nous sommes convaincus que chaque levier participe à l'épanouissement et à la
                                performance de chacun. C'est pourquoi nous mettons en place des mesures concrètes
                                sous forme de package : Fly'IT prend en charge à 100% les tickets restaurant, à 100%
                                la mutuelle prévoyance et à 100% les transports. Nous avons également élaboré un
                                catalogue de primes conséquentes qui vous encourage chaque mois à faire du sport et
                                qui participe à la diminution de votre empreinte carbone.
                            </p>
                        </div>

                        <div class="bg-light border-bottom border-5 border-secondary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Nous construisons une relation de confiance avec tous les acteurs de la chaîne. Nous
                                nous engageons à ce que cette relation soit fondée sur l'honnêteté, la transparence
                                et le respect en mettant en place une charte de valeurs qui définit nos principes
                                fondamentaux. Nous communiquons régulièrement avec nos consultants, nos clients et
                                nos partenaires pour les informer de nos projets et de nos décisions.
                            </p>
                        </div>
                        <div class="bg-light border-bottom border-5 border-secondary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Nous te proposons un accompagnement personnalisé pour développer tes compétences et
                                te préparer à de nouvelles opportunités. Chaque année, tu bénéficieras d'une
                                formation financée par nos soins. Tu auras aussi l'opportunité de transmettre tes
                                compétences à travers des formations rémunérées sous forme de séminaires à
                                destination de tes collaborateurs.
                            </p>
                        </div>
                        <div class="btn-container">
                            <a class="btn btn-primary py-2 px-3 animated slideInDown text-secondary" href="contact.php">
                                Montez à bord
                                <div class="d-inline-flex btn-sm-square bg-secondary text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------ About End------------------------------------------------------------>

    <!------------------------------------------------------------ TECH START------------------------------------------------------------>
    <section class="container-xxl bg-light my-5 pb-3" id="tech">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <div class="pill-container">
                    <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">Nos Techs</div>
                </div>
                <h1>Une expertise qui s'adapte à vos besoins</h1>
                <p>
                    Nous maitrisons des technologies de pointe et sommes en capacité de gérer des projets complexes
                    tout en vous conseillant stratégiquement. L'adaptabilité et la sécurité des informations sont au
                    cœur de nos processus innovant.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="techs.-item d-flex flex-column bg-white border-top border-5 border-secondary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-secondary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Java</small>
                            </div>
                            <h5 class="mb-3">Spring</h5>
                            <p>
                                L'un des langages de programmation les plus populaires et les plus polyvalents, Java
                                est célèbre pour sa portabilité, sa sécurité et sa robustesse. Que ce soit pour des
                                applications Web, mobiles, de bureau ou d'entreprise, Java continue d'être un pilier
                                incontournable dans le monde du développement logiciel.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid tech-img" src="img/java.webp" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="techs.-item d-flex flex-column bg-white border-top border-5 border-secondary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-secondary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>PHP</small>
                            </div>
                            <h5 class="mb-3">Symfony</h5>
                            <p>
                                Langage de programmation côté serveur, PHP est largement reconnu pour le
                                développement de sites Web dynamiques et d'applications Web. Avec sa capacité à
                                interagir efficacement avec les bases de données, PHP est la pierre angulaire de
                                nombreux sites Web et systèmes de gestion de contenu populaires.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/symfony.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="techs.-item d-flex flex-column bg-white border-top border-5 border-secondary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-secondary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>.Net</small>
                            </div>
                            <h5 class="mb-3">Core</h5>
                            <p>
                                Plateforme de développement de Microsoft, .NET offre une collection robuste d'outils
                                pour le développement d'applications Web, de bureau, mobiles et de cloud. Avec son
                                support intégré pour plusieurs langages de programmation comme C# et VB.NET, et sa
                                vaste bibliothèque de classes, .NET est un choix solide pour une variété de projets.
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/core-net.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------ TECH END----------------------------------------------------------->

    <!------------------------------------------------------------ SERVICES START------------------------------------------------------------>
    <section class="container-xxl py-5" id="services">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <div class="pill-container">
                    <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">
                        Nos services
                    </div>
                </div>
                <h1 class="display-6 mb-2" style="font-weight: 400">Notre expertise</h1>
                <p>
                    Fly'IT, tel un escadron d'élite du numérique, est votre co-pilote dédié pour tous vos projets de
                    développement aérien. Nos as du joystick, formés aux manœuvres technologiques les plus récentes,
                    sont prêts à décoller. Avec une cartographie sur mesure, nous alignons nos vols à la parfaite
                    trajectoire de vos ambitions.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/fly-conding.png" alt="" />
                        <h4 class="mb-3">Coding</h4>
                        <div class="">
                            <p class="mt-3">
                                Notre équipe de développement maîtrise une large gamme de langages de programmation.
                                Elle est également formée à la gestion de projets sophistiqués: gestion d'équipe,
                                gestion des risques et gestion des délais. Nous sommes en mesure de vous accompagner
                                dans la réalisation de vos projets, des applications simples aux solutions
                                d'intelligence artificielle.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/analyst.png" alt="" />
                        <h4 class="mb-3">Assistance technique</h4>
                        <div class="text-container">
                            <p class="mb-4">
                                Nos consultants accompagnent nos clients dans la transformation de leurs systèmes
                                d'information, dans les domaines de compétences suivants : Angular, JS, React,
                                Symphony, etc.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/support.png" alt="" />
                        <h4 class="mb-3">Analyse fonctionnelle</h4>
                        <div class="text-container">
                            <p class="mb-5">
                                Nous vous aidons à établir une connexion claire et fluide entre les besoins business
                                et les exigences techniques de votre projet.Cette connexion vous permet de
                                visualiser votre projet de manière précise et complète, et de garantir sa réussite.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/computer-app-colored.png" alt="" />
                        <h4 class="mb-3">Applications tierces</h4>
                        <div class="text-container">
                            <p class="mb-4">
                                Nos consultants vous apportent un accompagnement complet et personnalisé sur les
                                applications de toutes tailles et de tous secteurs d'activité, en vous assistant
                                dans le pilotage, le support (N1, N2 et N3), la maintenance et l'évolution de vos
                                applications.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------ SERVICES END------------------------------------------------------------>

    <!------------------------------------------------------------ COUNTER STERT----------------------------------------------------------->

    <section class="container-xxl py-5" id="clients-counter">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <div class="pill-container">
                    <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">Nos cients</div>
                </div>
                <h1 class="display-6 mb-2" style="font-weight: 500">
                    Les entreprises et les talents qui nous ont déjà fait confiance.
                </h1>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-lg-3 wow fadeInUp counter" data-wow-delay="0.1s">
                    <div class="text-center p-1 p-xl-3 pb-2 bg-light">
                        <i class="fa-solid fa-users text-secondary my-3"></i>
                        <h3>Consultants</h3>
                        <h2 class="count">34</h2>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp counter" data-wow-delay="0.3s">
                    <div class="text-center p-1 p-xl-3 pb-2 bg-light">
                        <i class="fa-solid fa-handshake text-secondary my-3"></i>
                        <h3>Clients</h3>
                        <h2 class="count">10</h2>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp counter" data-wow-delay="0.5s">
                    <div class="text-center p-1 p-xl-3 pb-2 bg-light">
                        <i class="fa-solid fa-building text-secondary my-3"></i>
                        <h3>Missions</h3>
                        <h2 class="count">6</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------ COUNTER END----------------------------------------------------------->

    <?php
    // TEAM SECTION
    require_once './components/team.php';

    include './components/contact-banner.php';
    ?>

    <!------------------------------------------------------------ PARTNERS START------------------------------------------------------------>
    <section class="partners py-2" id="partners">
        <div class="container text-center mb-3">
            <div class="pill-container">
                <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">
                    Nos partenaires
                </div>
            </div>
            <h1 class="text-secondary mb-3">Ils nous ont fait confiance.</h1>
            <p>
                Nos clients nous font confiance pour gérer leurs projets avec succès, et les aider à atteindre leurs
                objectifs.
            </p>
        </div>

        <div class="owl-carousel owl-theme mt-5 mx-auto">
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://www.cgi.com/fr">
                            <img src="img/partners/CGI.png" alt="CGI" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://www.edf.fr/edf-recrute">
                            <img src="img/partners/EDF.png" alt="EDF" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="">
                            <img src="img/partners/Enedis.png" alt="Enedis" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://www.havana-it.com">
                            <img src="img/partners/Havana.png" alt="havana-it" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://www.littlebigconnection.com/fr/ ">
                            <img src="img/partners/LBC.png" alt="litt lebig connection" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://luckyou.fr">
                            <img src="img/partners/Luckyou.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://themealprep.shop/">
                            <img src="img/partners/MealPrep.png" alt="Meal Prep" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://www.data.gouv.fr/fr/organizations/ministere-de-l-economie-de-l-industrie-et-du-numerique/ ">
                            <img src="img/partners/Ministère.png" alt="Ministère du numerique logo" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://www.siemens.com/fr/fr/entreprise/emplois.html ">
                            <img src="img/partners/Siemens.png" alt="Siemens" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://www.sncf.com/fr ">
                            <img src="img/partners/SNCF.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="card">
                    <div class="img-card">
                        <a href="https://hicannes.com">
                            <img src="img/partners/Hi-Cannes.png" alt="Logo du lycée Hi Cannes" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------ PARTNERS END------------------------------------------------------------>
    <?php
    // FOOTER
    require_once './components/footer.php';

    // BACK TO THE TOP BUTTON
    require_once './components/back_to_the_top.php';

    ?>

    <!------------------------------------------------------------ JavaScript Libraries------------------------------------------------------------>
    <?php
    require_once("./components/jslib.php");
    ?>

    <!------------------------------------------------------------ Template Javascript------------------------------------------------------------>
    <script src="js/main.js" defer></script>
</body>

</html>