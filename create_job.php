<!DOCTYPE html>
<html lang="fr">
<?php
// GETTING THE HEADER AND PASSING $title
$title = "Créer Poste";
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
                Creation de Poste
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="container d-flex align-items-center justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 my-5 create-job">
            <div class="form-floating mb-3">
                <input id="title" type="text" class="form-control" placeholder="Titre du poste" />
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Entrez le titre du poste</div>
                <label for="title">Titre du poste</label>
            </div>
            <div class="form-floating mb-3">
                <input id="location" type="text" class="form-control" placeholder="Ville" />
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Entrez une ville</div>
                <label for="location">Ville</label>
            </div>
            <div class="form-floating mb-3">
                <input id="type" type="text" class="form-control" placeholder="Type de contrat (CDI/CDD)" />
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Entrez le type de poste</div>
                <label for="type">Type de contrat (CDI/CDD)</label>
            </div>
            <div class="form-floating mb-3">
                <input id="time" type="text" class="form-control" placeholder="Temps de Travail (Temps plein / partiel)" />
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Entrez le temps de travail</div>
                <label for="name">Temps de Travail (Temps plein / partiel)</label>
            </div>
            <div class="form-floating mb-3">
                <input id="salary" type="text" class="form-control" placeholder="Salaire annuel (33k€/an)" />
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Entrez le salaire</div>
                <label for="salary">Salaire annuel (33k€/an)</label>
            </div>
            <div class="d-flex">
                <div class="form-floating mb-1 col-9">
                    <input id="tech" type="text" class="form-control" />
                    <div class="valid-feedback">Ok</div>
                    <div class="invalid-feedback">Entrez une Techno</div>
                    <label for="tech">Technologie</label>
                </div>
                <button class="btn btn-secondary mx-4 my-2" id="add_tech" style="height: 40px">
                    Add
                    <i class="fa-solid fa-circle-plus"></i>
                </button>
            </div>
            <div class="badge-container mb-4"></div>
            <div class="form-floating mb-3">
                <textarea rows="20" id="job_description" class="form-control" placeholder="Description"></textarea>
                <div class="valid-feedback">Ok</div>
                <div class="invalid-feedback">Entrez une description</div>
                <label for="name">Description</label>
            </div>
            <div class="text-center"> <button class="btn btn-secondary my-2" id="add_job" style="height: 40px">
                    Ajouter Poste &nbsp;
                    <!-- <i class="fa-solid fa-circle-check" style="font-size: 18px;"></i> -->
                    <i class="fa-solid fa-plus" style="font-size: 18px;"></i>
                </button>

            </div>


        </div>

    </section>



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
    <script src="js/jobs.js"></script>
</body>