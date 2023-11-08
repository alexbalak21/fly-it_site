<!DOCTYPE html>
<html lang="fr">
<?php
// GETTING THE HEADER AND PASSING $title
$title = "Créer un User";
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
                Créer un utilisateur
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="container d-flex align-items-center justify-content-center">
        <div class="col-xl-12 col-lg-8 col-md-10 col-sm-12 my-5 create-job mx-auto">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="form-floating mb-3 col-12 col-xl-5 col-md-10 col-sm-12 me-3">
                    <input id="first_name" type="text" class="form-control" placeholder="Prénom" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Entrez le Prénom</div>
                    <label for="title">Prénom</label>
                </div>
                <div class="form-floating mb-3 col-12 col-xl-5 col-md-10 col-sm-12 me-3">
                    <input id="last_name" type="text" class="form-control" placeholder="Nom" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Entrez une Nom</div>
                    <label for="location">Nom</label>
                </div>

                <div class="form-floating mb-3 col-12 col-xl-5 col-md-10 col-sm-12 me-3">
                    <input id="username" type="text" class="form-control" placeholder="Username" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Entrez un nom d'utilisateur</div>
                    <label for="location">Username</label>
                </div>
                <div class="form-floating mb-3 col-12 col-xl-5 col-md-10 col-sm-12 me-3">
                    <input id="email" type="text" class="form-control" placeholder="Email" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Entrez un email</div>
                    <label for="title">Email</label>
                </div>

                <div class="form-floating mb-3 col-5 me-3">
                    <input id="passwrod1" type="password" class="form-control" placeholder="Password" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Pas assez long.</div>
                    <label for="type">Password</label>
                </div>
                <div class="form-floating mb-3 col-5 me-3">
                    <input id="password2" type="password" class="form-control" placeholder="Confirm password" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Ne correspond pas au premier.</div>
                    <label for="name">Confirm password</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input id="salary" type="text" class="form-control" placeholder="Salaire annuel (33k€/an)" />
                <div class="valid-feedback ms-2">Saved</div>
                <div class="invalid-feedback ms-2">Entrez le salaire</div>
                <label for="salary">Salaire annuel (33k€/an)</label>
            </div>
            <div class="d-flex">
                <div class="form-floating mb-1 col-9">
                    <input id="tech" type="text" class="form-control" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Existe déjà.</div>
                    <label for="tech">Technologie</label>
                </div>
                <button class="btn btn-secondary mx-4 my-2" id="add_tech">
                    Add
                    <i class="fa-solid fa-circle-plus"></i>
                </button>
            </div>
            <div class="badge-container mb-4"></div>
            <div class="form-floating mb-3">
                <textarea rows="20" id="job_description" class="form-control" placeholder="Description"></textarea>
                <div class="valid-feedback ms-2">Saved</div>
                <div class="invalid-feedback ms-2">Entrez une description</div>
                <label for="name">Description</label>
            </div>
            <div id="alert-containber"></div>
            <div class="btn-container text-center">
                <button class="btn btn-secondary my-2" id="add_job">
                    Ajouter Poste &nbsp;
                    <i class="fa-solid fa-file-circle-plus"></i>
                </button>
                <button class="btn btn-success my-2" id="add_job">
                    Modifier &nbsp;
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button class="btn btn-warning my-2" id="reset_from">
                    Remetre à zero &nbsp;
                    <i class="fa-regular fa-file"></i>
                </button>
            </div>
            <div class="text-center">
                <button class="btn btn-info my-2" id="reset_from">
                    Preview &nbsp;
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="container" id="preview">
        <div class="card-body bg-white mb-3 mt-3 border-start border-4 border-secondary job">
            <div class="section">
                <h4>DevOps (F/H)</h4>
                <ul class="d-lg-flex flex-wrap">
                    <li class="me-4"><i class="fa-solid fa-location-dot"></i> <span class="ms-1">Lyon</span> </li>
                    <li class="me-4"><i class="fa-solid fa-file-contract"></i><span class="ms-1">CDI</span></li>
                    <li class="me-4"><i class="fa-solid fa-clock-rotate-left"></i><span class="ms-1">Temps plein</span></li>
                    <li class="me-4"><i class="fa-solid fa-euro-sign"></i><span class="ms-1">33k€ par an</span></li>
                </ul>
            </div>
            <div class="section"><span class="badge bg-grey mx-1">Typescript</span><span class="badge bg-grey mx-1">REACT</span><span class="badge bg-grey mx-1">EXPRESS</span><span class="badge bg-grey mx-1">PYTHON</span><span class="badge bg-grey mx-1">SQL</span></div>
            <div class="section">
                <button class="btn btn-secondary px-5 m-3">
                    Postuler
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
    <!-- <script src="js/jobs.js"></script> -->
</body>