//CONTACT PAGE SCRIPT
//CHECKING IF CONTACT PAGE IS ALREDY SNET
const form = document.querySelector("#contact-page-form")
const contact_page_form_inputs = document.querySelectorAll("#contact-page-form input")
const textarea = document.querySelector("#contact-page-form textarea")
const contact_msg = document.querySelector("#conact-msg b")

//IF variable form_ existst that means the form has been sent successfuly
if (typeof contact_page_form !== "undefined") {
    document.getElementById("nom").value = contact_page_form.name
    document.getElementById("email").value = contact_page_form.mail
    document.getElementById("Votre-besoin").value = contact_page_form.need
    document.getElementById("message").value = contact_page_form.message
    contact_page_form_inputs.forEach((input) => input.setAttribute("disabled", ""))
    textarea.setAttribute("disabled", "")
    document.getElementById("send-message-btn").setAttribute("disabled", "")
}
//VALIDATING INPUTS

function input_validation(input, min_length = 4) {
    if (input.value.length < min_length) {
        input.classList.remove("is-valid")
        input.classList.add("is-invalid")
        return false
    } else {
        input.classList.remove("is-invalid")
        input.classList.add("is-valid")
        return true
    }
}

function add_validation_on_focus_out(input, min_length = 4) {
    input.addEventListener("focusout", () => input_validation(input, min_length))
}

//ADDING VALIDATION TO ALL INPUTS AND TEXTAREA
contact_page_form_inputs.forEach((input) => add_validation_on_focus_out(input))
add_validation_on_focus_out(textarea, 10)

form.addEventListener("submit", (event) => {
    contact_msg.innerHTML = ""
    contact_msg.classList.remove("text-success")
    contact_msg.classList.remove("text-danger")
    let valid = false
    contact_page_form_inputs.forEach((input) => {
        valid = input_validation(input)
    })
    valid = input_validation(textarea, 10)
    if (valid) {
        console.log("SEND MESSAGE")
        contact_msg.classList.add("text-success")
        contact_msg.innerHTML = `<i class="fa-solid fa-thumbs-up"></i> Votre message a bien éré envoyé !`
    } else {
        contact_msg.classList.add("text-danger")
        contact_msg.innerHTML = `<i class="fa-solid fa-triangle-exclamation"></i> Votre fromulaire est mal rempli`
    }
    event.preventDefault()
})
