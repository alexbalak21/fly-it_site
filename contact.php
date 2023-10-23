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
        <section class="container-xxl py-5 contact-page" id="contact-page">
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
                                </div>
                            </div>
                        </form>
                    </div>
                    <div
                        class="col-lg-6 wow fadeIn contact-info"
                        data-wow-delay="0.5s"
                        style="min-height: 450px"
                    >
                        <h2 class="mb-2">Nos coordonnées</h2>
                        <div class="py-4 px-4">
                            <div class="line mb-5">
                                <div class="icon-circle">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <h4>Adresse</h4>
                                    <a
                                        class=""
                                        href="https://www.google.com/maps/place/55+Av.+Ren%C3%A9+Cassin,+69009+Lyon/data=!4m2!3m1!1s0x47f4eb7496a55165:0x14ce65420b6f18e1?sa=X&ved=2ahUKEwj_k9_axvqBAxWYVqQEHRVRDOcQ8gF6BAgPEAA&ved=2ahUKEwj_k9_axvqBAxWYVqQEHRVRDOcQ8gF6BAgVEAI"
                                        >55 ter Av. René Cassin<br />69009
                                        Lyon</a
                                    >
                                    <i
                                        style="font-size: 24px; cursor: pointer"
                                        class="text-secondary fa-regular fa-copy"
                                        onclick="navigator.clipboard.writeText('55 ter Av. René Cassin, 69009 Lyon');"
                                    ></i>
                                </div>
                            </div>
                            <div class="line mb-5">
                                <div class="icon-circle">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <h4>Telephone</h4>
                                    <a href="tel:+33685224002" class=""
                                        >06 85 22 40 02</a
                                    >
                                    <i
                                        style="font-size: 24px; cursor: pointer"
                                        class="text-secondary fa-regular fa-copy"
                                        onclick="navigator.clipboard.writeText('+33685224002');"
                                    ></i>
                                </div>
                            </div>
                            <div class="line mb-5">
                                <div class="icon-circle">
                                    <i class="fa fa-envelope text-light"></i>
                                </div>
                                <div>
                                    <h4>Email</h4>
                                    <a
                                        href="mailto:recrutement@fly-it.tech"
                                        class=""
                                        >recrutement@fly-it.tech</a
                                    >
                                    <i
                                        style="font-size: 24px; cursor: pointer"
                                        class="text-secondary fa-regular fa-copy"
                                        onclick="navigator.clipboard.writeText('recrutement@fly-it.tech');"
                                    ></i>
                                </div>
                            </div>
                            <div class="line mb-5">
                                <div class="icon-circle">
                                    <i
                                        class="fab fa-linkedin-in text-light"
                                    ></i>
                                </div>
                                <div>
                                    <h4>Linked In</h4>
                                    <a
                                        href="https://fr.linkedin.com/company/fly-it-tech/"
                                        class=""
                                        >fly-it-tech</a
                                    >
                                    <i
                                        style="font-size: 24px; cursor: pointer"
                                        class="text-secondary fa-regular fa-copy"
                                        onclick="navigator.clipboard.writeText('fr.linkedin.com/company/fly-it-tech/');"
                                    ></i>
                                </div>
                            </div>
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
