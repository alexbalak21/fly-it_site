const logo = document.querySelector("#logo")
const logo_img = logo.querySelector("img")

logo.addEventListener("mouseover", () => {
    logo_img.src = "img/logo-inverted.png"
})

logo.addEventListener("mouseleave", () => {
    logo_img.src = "img/logo.png"
})
