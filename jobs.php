<!DOCTYPE html>
<html lang="fr">
<?php
// GETTING THE HEADER AND PASSING $title
$title = "Offres d'emploi";
require_once './components/head.php';
?>

<body class="bg-light">
    <link rel="stylesheet" href="css/jobs.css">




    <?php
    // TOPBAR inculding NAVBAR
    require_once './components/topbar.php';
    ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Offres d'emploi
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="container g-3 bg-light">
        <div class="card-body bg-white mb-3 mt-3 border-start border-4 border-secondary job">
            <div class="section">
                <h4>DevOps (F/H)</h4>
                <ul class="d-lg-flex flex-wrap">
                    <li class="me-5"><i class="fa-solid fa-location-dot"></i> <span class="ms-1">Lyon</span> </li>
                    <li class="me-5"><i class="fa-solid fa-file-contract"></i><span class="ms-1">CDI</span></li>
                    <li class="me-5"><i class="fa-solid fa-clock-rotate-left"></i><span class="ms-1">Temps plein</span></li>
                </ul>
            </div>
            <div class="section">
                <span class="badge bg-grey">REACT</span>
                <span class="badge bg-grey">NODE</span>
                <span class="badge bg-grey">TYPESCTIPT</span>
                <span class="badge bg-grey">REMOTE</span>
            </div>
            <div class="section">
                <button class="btn btn-secondary px-5 m-3" style="height: 40px">
                    Postuler
                </button>
            </div>
        </div>
        <div class="card-body bg-white mb-3 mt-3 border-start border-4 border-secondary job">
            <div class="section">
                <h4>Développeur FullStack (F/H)</h4>
                <ul class="d-lg-flex flex-wrap">
                    <li class="me-5"><i class="fa-solid fa-location-dot"></i> <span class="ms-1">Lyon</span> </li>
                    <li class="me-5"><i class="fa-solid fa-file-contract"></i><span class="ms-1">CDI</span></li>
                    <li class="me-5"><i class="fa-solid fa-clock-rotate-left"></i><span class="ms-1">Temps plein</span></li>
                </ul>
            </div>
            <div class="section">
                <span class="badge bg-grey">Java</span>
                <span class="badge bg-grey">Spring</span>
                <span class="badge bg-grey">SQL</span>
                <span class="badge bg-grey">Angular</span>
                <span class="badge bg-grey">Typescript</span>
            </div>
            <div class="section">
                <button class="btn btn-secondary px-5 m-3" style="height: 40px">
                    Postuler
                </button>
            </div>
        </div>
        <div class="card-body bg-white mb-3 mt-3 border-start border-4 border-secondary job">
            <div class="section">
                <h4>Analyste Fonctionnel (F/H)</h4>
                <ul class="d-lg-flex flex-wrap">
                    <li class="me-5"><i class="fa-solid fa-location-dot"></i> <span class="ms-1">Lyon</span> </li>
                    <li class="me-5"><i class="fa-solid fa-file-contract"></i><span class="ms-1">CDI</span></li>
                    <li class="me-5"><i class="fa-solid fa-clock-rotate-left"></i><span class="ms-1">Temps plein</span></li>
                </ul>
            </div>
            <div class="section">
                <span class="badge bg-grey">API</span>
                <span class="badge bg-grey">Agile</span>
                <span class="badge bg-grey">SQL</span>
                <span class="badge bg-grey">Linux</span>
                <span class="badge bg-grey">TESTING</span>
            </div>
            <div class="section">
                <button class="btn btn-secondary px-5 m-3" style="height: 40px">
                    Postuler
                </button>
            </div>
        </div>

    </section>


    <!------------------------------------------------------------ FOOTER------------------------------------------------------------>
    <?php
    require_once("./components/footer.php");

    require_once('./components/back_to_the_top.php');
    ?>

    <!------------------------------------------------------------ JavaScript Libraries------------------------------------------------------------>
    <?php
    require_once("./components/jslib.php");
    ?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>