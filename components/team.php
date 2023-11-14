 <!------------------------------------------------------------ TEAM START------------------------------------------------------------>
 <?php
    require_once("team-card.php")

    ?>


 <section id="team" class="container-xxl py-5">
     <div class="container">
         <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
             <div class="pill-container">
                 <div class="d-inline-block rounded-pill bg-secondary text-white py-1 px-3 mb-3">
                     Notre équipe
                 </div>
             </div>
             <h1 class="mb-5" style="font-weight: 400;">
                 Notre équipe est à votre service pour répondre à vos
                 besoins numériques
             </h1>

             <p class="">
                 L'équipe de Fly'IT s'appuie sur 8 talents aux compétences complémentaires pour répondre à chacune de vos exigences, quelle que soit leur complexité.
             </p>
         </div>
         <div class="row g-4">
             <?php
                echo team_card($img_src = "img/tarik.jpg", $name = "Tarik GILANI", $position = "CEO", $lined_in = "https://www.linkedin.com/in/tarik-gilani-96299631/", $mail = "tarik.gilani@fly-it.tech", $phone = "+33685224002");

                echo team_card($img_src = "img/monia.jpg", $name = "Monia BOURAS", $position = "Business manager", $lined_in = "https://www.linkedin.com/in/monia-bouras-635bb3b3/", $mail = "monia.bouras@fly-it.tech", $phone = "+33625101553")
                ?>

             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item position-relative">
                     <img class="img-fluid rounded-circle border border-primary" src="img/lois.jpeg" alt="Loïs" />
                     <div class="team-text bg-light text-center p-4">
                         <h5>Loïs BARBE</h5>
                         <p>Chargée de communication</p>
                         <div class="team-social text-center">
                             <a class="btn btn-square" href="https://www.linkedin.com/in/loisbarbe/ 
                            "><i class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-square" href="mailto:lois.barbe@fly-it.tech"><i class="fa fa-envelope"></i></a>
                             <a class="btn btn-square" href="tel:+336662662767"><i class="fa fa-phone"></i></a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item position-relative">
                     <img class="img-fluid rounded-circle border border-primary" src="img/robin.jpeg" alt="Robin" />
                     <div class="team-text bg-light text-center p-4">
                         <h5>Robin GAIXET</h5>
                         <p>Business manager</p>
                         <div class="team-social text-center">
                             <a class="btn btn-square" href="https://www.linkedin.com/in/robin-gaixet-a1452376/"><i class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-square" href="mailto:robin.gaixet@fly-it.tech"><i class="fa fa-envelope"></i></a>
                             <a class="btn btn-square" href="+33786953810"><i class="fa fa-phone"></i></a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item position-relative">
                     <img class="img-fluid rounded-circle border border-primary" src="img/sarah.jpeg" alt="Sarah" />
                     <div class="team-text bg-light text-center p-4">
                         <h5>Sarah JACQUET</h5>
                         <p>Business manager</p>
                         <div class="team-social text-center">
                             <a class="btn btn-square" href="https://www.linkedin.com/in/sarah-jacquet-9154371aa/ "><i class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-square" href="mailto:sarah.jacquet@fly-it.tech"><i class="fa fa-envelope"></i></a>
                             <a class="btn btn-square" href="tel:+33665148309"><i class="fa fa-phone"></i></a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item position-relative">
                     <img class="img-fluid rounded-circle border border-primary" src="img/fatima.jpg" alt="Fati" />
                     <div class="team-text bg-light text-center p-4">
                         <h5>Fatima ZAHRA EL HAJJI</h5>
                         <p>Business developper</p>
                         <div class="team-social text-center">
                             <a class="btn btn-square" href="https://www.linkedin.com/in/fatima-zahra-el-hajji-8b6b03181/"><i class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-square" href="mailto:fatimazahra.elhajji@fly-it.tech"><i class="fa fa-envelope"></i></a>
                             <a class="btn btn-square" href="tel:+33616373939"><i class="fa fa-phone"></i></a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item position-relative">
                     <img class="img-fluid rounded-circle border border-primary" src="img/amazonia.jpg" alt="Amazonia" />
                     <div class="team-text bg-light text-center p-4">
                         <h5>Amazonia DONOSO</h5>
                         <p>Business developper</p>
                         <div class="team-social text-center">
                             <a class="btn btn-square" href="https://www.linkedin.com/in/amazonia-donoso/"><i class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-square" href="amazonia.donoso@fly-it.tech"><i class="fa fa-envelope"></i></a>
                             <a class="btn btn-square" href="+33679828533"><i class="fa fa-phone"></i></a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item position-relative">
                     <img class="img-fluid rounded-circle border border-primary" src="img/faye.jpg" alt="Faye" />
                     <div class="team-text bg-light text-center p-4">
                         <h5>Faye VERKROOST</h5>
                         <p>Business developper</p>
                         <div class="team-social text-center">
                             <a class="btn btn-square" href="https://www.linkedin.com/in/faye-verkroost/"><i class="fab fa-linkedin-in"></i></a>
                             <a class="btn btn-square" href="mailto:faye.verkroost@fly-it.tech"><i class="fa fa-envelope"></i></a>
                             <a class="btn btn-square" href="tel:+33601176090"><i class="fa fa-phone"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!------------------------------------------------------------ TEAM END------------------------------------------------------------>