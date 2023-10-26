//CONTACT PAGE SCRIPT
const contact_to_mail_url = "https://alex-blk.alwaysdata.net/logic/contact_to_mail.php"

//DEV ADRESS
// contact_to_mail_url = "http://localhost:3000/logic/contact_to_mail.php"

//DEFINE ALL THE ELEMENTS NEEDED FOR THE SCRIPT
const alert_section = document.querySelector(".alert-section")
const form = document.querySelector("#contact-page-form")
const contact_page_form_inputs = document.querySelectorAll("#contact-page-form input")
const textarea = document.querySelector("#contact-page-form textarea")
const contact_msg = document.querySelector("#conact-msg b")
const send_btn = document.getElementById("send-message-btn")

//COMPOSING THE ALLERT MESSAGES
const success_alert = `<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
<p>Votre message a bien été envoyé, nous vous répondrons dans les plus bref délais. </p>
<div>
    Revenir vers <strong> <a class="text-secondary" href="/">Accueil</a></strong>
</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`

const error_alert = `<div class="alert alert-warning     alert-dismissible fade show text-center" role="alert">
<p>Une erreur s'est produite pendant l'envoi de votre message. Vous pouvez essayer de nous contacter par mail ou par téléphone.</p>
<div>
    Revenir vers <strong> <a class="text-secondary" href="/">Accueil</a></strong>
</div>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`

//TO CHECK IF INPUT IS VALID
function input_validation(input, min_length = 4) {
    if (input.value.length < min_length) {
        input.classList.remove("is-valid")
        input.classList.add("is-invalid")
        return false
    } else {
        input.classList.remove("is-invalid")
        input.classList.add("is-valid")
        contact_msg.innerHTML = ""
        return true
    }
}

//TO REMOVE ALL THE FIELDS VALIDATION
function remove_all_fields_validation() {
    contact_page_form_inputs.forEach((input) => input.classList.remove("is-valid", "is-invalid"))
    textarea.classList.remove("is-valid", "is-invalid")
}

// VALIDATING INPUT AFTER USER LEFT THE FIELD
function add_validation_on_focus_out(input, min_length = 4) {
    input.addEventListener("focusout", () => input_validation(input, min_length))
}

//ADDING VALIDATION TO ALL INPUTS AND TEXTAREA
contact_page_form_inputs.forEach((input) => add_validation_on_focus_out(input))
add_validation_on_focus_out(textarea, 10)

//DISABLES ALL THE FILEDS AND BUTTON ON THE FORM
function disable_all_fields() {
    disable = (item) => {
        item.setAttribute("disabled", "")
    }
    contact_page_form_inputs.forEach((input) => disable(input))
    disable(textarea)
    disable(send_btn)
}

//SEND MESSAGE TO SERVER ON URL
async function send_mail_to_server() {
    let formData = new FormData(form)
    const response = await fetch(contact_to_mail_url, {
        method: "POST",
        body: formData,
    })
    //RETURN THE STATUS CODE 202: ACCEPTED / 400: MISSING DATA / 503: SERVER ERROR
    return await response.status
}

//LOGIC TO SEND MESSAGE TO THE SERVER
send_btn.addEventListener("click", async (event) => {
    event.preventDefault()
    contact_msg.innerHTML = ""
    contact_msg.classList.remove("text-success")
    contact_msg.classList.remove("text-danger")
    let valid = false
    contact_page_form_inputs.forEach((input) => {
        valid = input_validation(input)
    })
    valid = input_validation(textarea, 10)
    if (valid) {
        const response_code = await send_mail_to_server()
        console.log(response_code)
        if (response_code == 202) {
            //MESSAGE HAS BEEN SENT BY THE SERVER
            alert_section.innerHTML = success_alert
            contact_msg.classList.add("text-success")
            contact_msg.innerHTML = `<i class="fa-solid fa-thumbs-up"></i> Votre message a bien éré envoyé !`
            remove_all_fields_validation()
            textarea.style.resize = "none"
            disable_all_fields()
        } else {
            alert_section.innerHTML = error_alert
            contact_msg.classList.add("text-warning")
            contact_msg.innerHTML = `<i class="fa-solid fa-triangle-exclamation"></i> L'envoi n'as pas pu aboutir. <br> Vous pouvez nous contaceter par mail.`
        }
    } else {
        contact_msg.classList.add("text-danger")
        contact_msg.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> Votre fromulaire est mal rempli`
    }
})
const submit_event = form.addEventListener("submit", (event) => event.preventDefault())
