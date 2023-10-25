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
                        <h1 class="display-6 mb-5 text-secondary">
                            Bienveillance, Transparence et Accompagnement
                        </h1>
                        <div class="bg-light border-bottom border-5 border-secondary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Dans le grand ballet des aigles de l'ESN,
                                notre trajectoire est précisément calibrée :
                                Dans la vaste étendue du ciel de l'ESN, nous
                                plongeons avec une visée infaillible : celle
                                de privilégier avant tout le bien-être et
                                l'accomplissement de nos valeureux pilotes.
                                Tout comme un aviateur d'exception choisit
                                avec soin son altitude de croisière, nous
                                nous attelons à te confier des missions
                                dignes de tes aspirations, te permettant de
                                déployer tes ailes et de fendre le
                                firmament. Car ton talent, semblable à un
                                réacteur puissant, mérite une reconnaissance
                                sans faille. Ainsi, nous t'assurons une
                                rétribution à la mesure de ta bravoure, se
                                positionnant parmi les plus compétitives de
                                cette vaste arène céleste. Ensemble,
                                propulsons-nous vers les cimes, dans l'élite
                                de l'IT.
                            </p>
                        </div>
                        <div class="bg-light border-bottom border-5 border-secondary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Naviguant avec Lumière et Loyauté: Dans le
                                vaste océan de l'ESN, la transparence brille
                                tel un phare inébranlable. Nous tissons,
                                avec passion, une relation empreinte de
                                confiance avec chaque navire croisant notre
                                sillage. Qu'ils soient consultants, clients
                                ou vaillants partenaires, nous assurons une
                                vue panoramique sur chaque facette de notre
                                voyage conjoint. Tout comme à bord d'une
                                caravelle, où chaque compas et sextant est
                                capital pour une navigation sans écueils, la
                                limpidité de nos dialogues est le gage d'une
                                alliance fructueuse. Avec nous, l'horizon
                                est toujours pur, intègre et prometteur.
                                Ensemble, hissons les voiles vers les cieux
                                de l'IT, le cœur léger et l'esprit serein.
                            </p>
                        </div>
                        <div class="bg-light border-bottom border-5 border-secondary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Vers les étoiles, guidés par l'entraide et
                                l'ambition : Au cœur de l'immensité de
                                l'ESN, s'élancer n'est que le début d'une
                                aventure céleste. Garder le cap, tout en
                                sachant esquisser des virages audacieux face
                                à l'inconnu, est le véritable défi. C'est
                                ainsi que nous prônons l'art de la guidance.
                                Nous t'offrons des formations sur-mesure,
                                sous le sceau d'une vigilance bienveillante,
                                pour te permettre de dessiner avec audace
                                ton sillage étoilé et d'atteindre les
                                constellations les plus lointaines. Chaque
                                pilote, dans sa singularité, détient une
                                part du cosmos en lui. C'est pourquoi nous
                                te donnons la scène pour illuminer d'autres
                                de ton savoir lors de séminaires gratifiés.
                                À nos côtés, chaque aurore est une
                                invitation à apprendre, à s'élever et à
                                guider d'autres astronautes vers leur
                                destinée. Main dans la main, traversons
                                l'infini de l'IT, animés par une ambition
                                galactique et une fraternité interstellaire.
                            </p>
                        </div>
                        <p class="mb-5">
                            Toujours au service de nos consultants
                        </p>
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
                    <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">
                        Nos Techs
                    </div>
                </div>
                <h1>Une expertise qui s'adapte à vos besoins</h1>
                <p>
                    Chez Fly’IT, nous voguons au rythme des vents
                    technologiques. À l'affût des courants innovants, nous
                    hissons nos voiles vers les langages les plus en vogue,
                    naviguant avec agilité parmi les frameworks
                    avant-gardistes tels que .Net, Java, PHP, VueJs,
                    Angular, React et bien d'autres. Embarquez avec nous
                    pour une odyssée numérique sans cesse renouvelée.
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
                                Java, tel un avion de chasse agile, fend le
                                ciel numérique avec une précision inégalée.
                                Spring, son co-pilote ingénieux, optimise
                                chaque manoeuvre, propulsant les projets
                                vers des altitudes inédites. Ensemble, ils
                                dominent l'espace de la programmation,
                                rapides et sans turbulence
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
                                PHP, tel un jet expérimenté, virevolte avec
                                aisance dans l'atmosphère du web. Symfony,
                                son aile droite infaillible, renforce chaque
                                trajectoire, conduisant les missions à des
                                cieux encore inexplorés. En tandem, ils
                                tracent des contrails lumineux dans l'arène
                                de la programmation
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
                                .NET, semblable à un bombardier lourd doté
                                d'une puissance redoutable, survole
                                majestueusement l'empire du code. .NET Core,
                                son réacteur innovant, propulse avec une
                                vigueur renouvelée, perforant les nuages des
                                défis technologiques. Ensemble, ils forment
                                un duo de chasse, déployant une symphonie
                                aérienne dans le concert de la programmation
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
                <h1 class="display-6 mb-2" style="font-weight: 400">
                    Notre expertise
                </h1>
                <p>
                    Fly’IT, tel un escadron d'élite du numérique, est votre
                    co-pilote dédié pour tous vos projets de développement
                    aérien. Nos as du joystick, formés aux manœuvres
                    technologiques les plus récentes, sont prêts à décoller.
                    Avec une cartographie sur mesure, nous alignons nos vols
                    à la parfaite trajectoire de vos ambitions.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/fly-conding.png" alt="" />
                        <h4 class="mb-3">Coding</h4>
                        <p class="mb-4">
                            Notre escadron de développement, aguerri aux
                            missions les plus complexes, maîtrise avec brio
                            les voltiges de l'agilité. Avec une précision
                            chirurgicale, nous dessinons des plans de vol
                            sur mesure, prêts à intercepter chaque défi avec
                            une tactique infaillible.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/analyst.png" alt="" />
                        <h4 class="mb-3">Assistance technique</h4>
                        <p class="mb-4">
                            Nos pilotes de chasse numérique, déployant leurs
                            ailes dans le vaste ciel de la transformation
                            IT, plongent avec expertise dans des territoires
                            tels qu'Angular, JS, React, Symfony, et au-delà.
                            Chaque mission est une acrobatie technologique
                            maîtrisée à la perfection.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/support.png" alt="" />
                        <h4 class="mb-3">Analyse fonctionnelle</h4>
                        <p class="mb-5">
                            Tel un tour de contrôle expert, nous établons la
                            liaison entre les courants aériens du business
                            et les pistes techniques de votre projet. Avec
                            nous, chaque horizon est clairement défini, vous
                            permettant d'avoir une vision panoramique de
                            votre destination numérique.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center p-1 p-xl-3 pb-2">
                        <img class="img-fluid mb-4" src="img/computer-app-colored.png" alt="" />
                        <h4 class="mb-3">Applications tierces</h4>
                        <p class="mb-4">
                            Tels des copilotes aguerris, nos consultants
                            vous guident dans le cockpit des applications
                            tierces, assurant le pilotage et le support aux
                            altitudes N1, N2 et N3. Avec une vigilance sans
                            faille, nous veillons à la maintenance et à
                            l'ascension continue de vos logiciels.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------------------ SERVICES END------------------------------------------------------------>


    <?php
    // TEAM SECTION
    require_once './components/team.php';

    include './components/contact-banner.php';
    ?>

    <!------------------------------------------------------------ PARTNERS START------------------------------------------------------------>
    <section class="partners py-2" id="partners">
        <div class="text-center mb-3">
            <div class="pill-container">
                <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">
                    Nos partenaires
                </div>
            </div>
        </div>
        <h1 class="text-center text-secondary">
            Fly'IT, tel un avion de chasse infaillible, est le co-pilote de
            choix pour les titans de l'IT.
        </h1>
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