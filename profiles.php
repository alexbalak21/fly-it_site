<!DOCTYPE html>
<html lang="fr">
<?php
// GETTING THE HEADER AND PASSING $title
$title = "Nos profils disopnibles.";
require_once './components/head.php';
?>

<body>
    <link rel="stylesheet" href="css/profiles.css">




    <?php
    // TOPBAR inculding NAVBAR
    require_once './components/topbar.php';
    ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Contactez-nous
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="container">
        <?php
        require_once("./components/profile.php");
        require_once("./components/profile2.php");
        ?>

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