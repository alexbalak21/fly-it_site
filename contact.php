<!DOCTYPE html>
<html lang="fr">
    <?php 
    $title = "Contactez Fly'IT";
    require_once("./components/head.php")
    ?>

    <body>
        <!-- Spinner Start -->
        <div
            id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
        >
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->
        <?php
        require_once("./components/topbar.php");
        ?>


        <!-- Page Header Start -->
        <div
            class="container-fluid page-header mb-5 wow fadeIn"
            data-wow-delay="0.1s"
        >
            <div class="container text-center">
                <h1 class="display-4 text-white animated slideInDown mb-4">
                    Contactez-nous
                </h1>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <section class="container-xxl py-5 contact-page" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div
                            class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3"
                        >
                            Contactez-nous
                        </div>

                        <div class="mb-4">
                            <p>
                                <br /><br />
                                Nous vous répondrons dans les plus bref délais
                            </p>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            placeholder="Votre nom"
                                        />
                                        <label for="name">Votre nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="email"
                                            placeholder="Votre Email"
                                        />
                                        <label for="email">Votre Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="Votre-besoin"
                                            placeholder="Votre-besoin"
                                        />
                                        <label for="Votre-besoin"
                                            >Votre besoin</label
                                        >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea
                                            class="form-control"
                                            placeholder="Leave a message here"
                                            id="message"
                                            style="height: 100px"
                                        ></textarea>
                                        <label for="message"
                                            >Votre message</label
                                        >
                                    </div>
                                </div>
                                <div class="col-12 btn-container">
                                    <button
                                        class="btn btn-secondary py-2 px-3 me-3"
                                    >
                                        Envoyez votre Message
                                        <div
                                            class="d-inline-flex btn-sm-square bg-white text-secondary rounded-circle ms-2"
                                        >
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                    <span class="mx-4">
                                        <a
                                            class="text-secondary mx-3"
                                            href="mailto:recrutement@fly-it.tech"
                                            >recrutement@fly-it.tech</a
                                        >
                                        <i
                                            style="
                                                font-size: 24px;
                                                cursor: pointer;
                                            "
                                            class="text-secondary fa-regular fa-copy"
                                            onclick="navigator.clipboard.writeText('recrutement@fly-it.tech');"
                                        ></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div
                        class="col-lg-6 wow fadeIn"
                        data-wow-delay="0.5s"
                        style="min-height: 450px"
                    >
                        <div
                            class="position-relative rounded overflow-hidden h-100"
                        >
                            <iframe
                                class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=55+Av.+René+Cassin,+69009+Lyon"
                                frameborder="0"
                                style="min-height: 450px; border: 0"
                                allowfullscreen=""
                                aria-hidden="false"
                                tabindex="0"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->

        <!------------------------------------------------------------ FOOTER------------------------------------------------------------>
       <?php
       require_once("./components/footer.php");

       //BACK TO THE TOP
       require_once("./components/back_to_the_top.php")
       ?>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
