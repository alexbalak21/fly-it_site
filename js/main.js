;(function ($) {
    "use strict"

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show")
            }
        }, 1)
    }
    spinner()

    // Initiate the wowjs
    new WOW().init()

    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 45) {
                $(".fixed-top").addClass("bg-dark shadow")
            } else {
                $(".fixed-top").removeClass("bg-dark shadow")
            }
        } else {
            if ($(this).scrollTop() > 45) {
                $(".fixed-top").addClass("bg-dark shadow").css("top", -45)
            } else {
                $(".fixed-top").removeClass("bg-dark shadow").css("top", 0)
            }
        }
    })

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".back-to-top").fadeIn("slow")
        } else {
            $(".back-to-top").fadeOut("slow")
        }
    })
    $(".back-to-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 500, "easeInOutExpo")
        return false
    })

    // techs. progress
    $(".techs.-progress").waypoint(
        function () {
            $(".progress .progress-bar").each(function () {
                $(this).css("width", $(this).attr("aria-valuenow") + "%")
            })
        },
        {offset: "80%"}
    )

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav: true,
        navText: ['<i class="bi bi-arrow-left"></i>', '<i class="bi bi-arrow-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
        },
    })
})(jQuery)

// PARTNERS

$(document).ready(function () {
    var silder = $(".owl-carousel")
    silder.owlCarousel({
        autoplay: true,
        autoWidth: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dotClass: "owl-dot",
        dotsClass: "owl-dots",
        dots: true,
        loop: true,
        responsive: {
            0: {items: 1},
            480: {items: 2},
            575: {items: 2},
            768: {items: 2},
            991: {items: 3},
            1200: {items: 4},
        },
    })
})

// NAVUGATION LINKS ACTIVATION
const nav_links = document.querySelectorAll(".navbar-collapse .nav-link")
const sections = document.querySelectorAll("section")
nav_collapse = document.getElementById("navbarCollapse")

//CLOSING NAVBAR WHEN CICK ON NAVLINK
nav_links.forEach((link) => {
    link.addEventListener("click", () => {
        nav_collapse.classList.remove("show")
    })
})

//ACTIVATING THE FIRST LINK
let page_scroll_position = window.scrollY
const first_id = sections[0].getAttribute("id")
activate_nav_link("#" + first_id)

//ACTIVATING LINKS ON SCROLL
window.onscroll = () => {
    page_scroll_position = window.scrollY
    sections.forEach((section) => {
        const section_Y_start = section.offsetTop
        const section_Y_end = section_Y_start + section.offsetHeight
        const id = section.getAttribute("id")
        if (page_scroll_position >= section_Y_start && page_scroll_position < section_Y_end) activate_nav_link("#" + id)
    })
}

function activate_nav_link(name = "#home") {
    nav_links.forEach((link) => {
        link.classList.remove("active")
        if (name === link.href.split("/").pop()) link.classList.add("active")
    })
}

// nav_links.forEach((link) => {
//     link.addEventListener("click", (e) => console.log(e))
//     link.classList.remove("active")
//     if (
//         link.href.split("/").pop() === window.location.pathname.split("/").pop()
//     )
//         link.classList.add("active")
//     console.log(link.href)
// })
// console.log(window.location.pathname)

// if (window.location.pathname === "/") nav_links[0].classList.add("active")
