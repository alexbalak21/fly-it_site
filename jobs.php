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
        <?php
        require("./logic/db_interface.php");
        require("./components/job.php");
        $jobs = read_jobs();
        foreach ($jobs as $job) {
            $techs = json_decode($job['technologies']);
            $job_card = generate_job_card($job['title'], $job['location'], $job['type'], $job['time'], $job['salary'], $techs);
            echo $job_card;
        }

        dummy_card();



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