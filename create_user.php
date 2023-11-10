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
                    <input id="username" type="text" class="form-control" placeholder="" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Entrez un nom d'utilisateur (min:6)</div>
                    <label for="location">Nom d'utilisateur</label>
                </div>
                <div class="form-floating mb-3 col-12 col-xl-5 col-md-10 col-sm-12 me-3">
                    <input id="email" type="text" class="form-control" placeholder="" />
                    <div class="valid-feedback ms-2">Saved</div>
                    <div class="invalid-feedback ms-2">Entrez un email (min:6)</div>
                    <label for="title">Email</label>
                </div>
                <div class="col-12 d-flex justify-content-center flex-wrap">
                    <div class="form-floating mb-3 col-12 col-xl-5 col-md-10 col-sm-12 me-3">
                        <input id="password" type="password" class="form-control" placeholder="" />
                        <div class="valid-feedback ms-2">Saved</div>
                        <div class="invalid-feedback ms-2">Pas assez long (min:6)</div>
                        <label for="type">Mot de passe</label>
                    </div>
                    <div class="">
                        <button class="btn btn-success my-2 ms-2" id="generate">
                            Generer
                            <i class="fa-solid fa-key"></i>
                        </button>
                        <button class="btn btn-warning my-2 d-none" id="see">
                            Voir
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <button class="btn btn-info my-2 d-none" id="copy_pass">
                            Copy
                            <i class="fa-regular fa-copy"></i>
                        </button>
                    </div>
                </div>





                <h4 class="col-12 col-xl-10 mt-4" style="color: var(--gery);"> Facultatif</h4>
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
            </div>

            <div id="alert-container"></div>
            <div class="btn-container text-center">
                <button class="btn btn-success my-2" id="add_user">
                    Ajouter utilisateur &nbsp;
                    <i class="fa-solid fa-user-plus"></i>
                </button>
                <button class="btn btn-secondary my-2" id="modify" disabled>
                    Modifier &nbsp;
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button class="btn btn-warning my-2" id="reset_from">
                    Remetre à zero &nbsp;
                    <i class="fa-regular fa-file"></i>
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
    <script src="js/user.js"></script>
    <!-- <script src="js/jobs.js"></script> -->
</body>