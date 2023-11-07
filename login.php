<!DOCTYPE html>
<html lang="fr">
<?php
// GETTING THE HEADER AND PASSING $title
$title = "Login";
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
                Login
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="container d-flex align-items-center justify-content-center">
        <div class="wow fadeIn col-lg-6 py-5" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
            <div class="h-100 bg-white p-5">
                <div>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input name="login" type="text" value="JohnDoe" class="form-control bg-light" id="login" placeholder="Login">
                                <div class="valid-feedback">Ok</div>
                                <div class="invalid-feedback">Nom d'utilisateur ou email</div>
                                <label for="name">Login</label>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" name="password" value="Azerty123*" class="form-control bg-light" id="password" name="password" placeholder="Mot de passe">
                                <div class="valid-feedback">Ok</div>
                                <div class="invalid-feedback">Mot de passe</div>
                                <label for="email">Mot de passe</label>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <button class="btn btn-secondary" id="submit" style="height: 60px">
                                Entrez
                                <div class="d-inline-flex btn-sm-square bg-white text-secondary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
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
    <script src="js/login.js"></script>
</body>