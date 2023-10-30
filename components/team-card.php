<?php
$img_src = "img/tarik.jpg";
$name = "Tarik GILANI";
$position ="CEO";
$lined_in = "https://www.linkedin.com/in/tarik-gilani-96299631/";
$mail = "tarik.gilani@fly-it.tech";
$phone = "+33685224002";


function team_card(string $img_src, string $name, string $position, string $lined_in, string $mail, string $phone):string {
    return "
    <div class='col-lg-3 col-md-6 mb-4 wow fadeInUp' data-wow-delay='0.1s'>
    <div class='team-item position-relative'>
        <img
            class='img-fluid rounded-circle border border-primary'
            src='$img_src'
            alt='Photo de $name'
        />
        <div class='team-text bg-light text-center p-4'>
            <h5>$name</h5>
            <p>$position</p>
            <div class='team-social text-center'>
                <a
                    class='btn btn-square'
                    href='$lined_in'
                    ><i class='fab fa-linkedin-in'></i
                ></a>
                <a class='btn btn-square' href='mailto:$mail'
                    ><i class='fa fa-envelope'></i
                ></a>
                <a class='btn btn-square' href='tel:+$phone'
                    ><i class='fa fa-phone'></i
                ></a>
            </div>
        </div>
    </div>
</div>   
    ";
}
