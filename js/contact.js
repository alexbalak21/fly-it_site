//CONTACT PAGE SCRIPT
//CHECKING IF CONTACT PAGE IS ALREDY SNET
const form = document.querySelector("#contact-page-form")
const contact_page_form_inputs = document.querySelectorAll("#contact-page-form input")
const textarea = document.querySelector("#contact-page-form textarea")
const contact_msg = document.querySelector("#conact-msg b")
const send_btn = document.getElementById("send-message-btn")

//VALIDATING INPUTS
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

// VALIDATING INPUT AFTER USER LEFT THE FIELD
function add_validation_on_focus_out(input, min_length = 4) {
    input.addEventListener("focusout", () => input_validation(input, min_length))
}

//ADDING VALIDATION TO ALL INPUTS AND TEXTAREA
contact_page_form_inputs.forEach((input) => add_validation_on_focus_out(input))
add_validation_on_focus_out(textarea, 10)

const submit_event = form.addEventListener("submit", (event) => {
    contact_msg.innerHTML = ""
    contact_msg.classList.remove("text-success")
    contact_msg.classList.remove("text-danger")
    let valid = false
    contact_page_form_inputs.forEach((input) => {
        valid = input_validation(input)
    })
    valid = input_validation(textarea, 10)
    if (valid) {
        const response_code = send_mail_to_server()
        if (response_code == 202) {
            contact_msg.classList.add("text-success")
            contact_msg.innerHTML = `<i class="fa-solid fa-thumbs-up"></i> Votre message a bien éré envoyé !`
            disable_all_fields()
        } else {
            contact_msg.classList.add("text-warning")
            contact_msg.innerHTML = `<i class="fa-solid fa-triangle-exclamation"></i> L'envoi n'as pas pu aboutir. <br> Vous pouvez nous contaceter par mail.`
        }
    } else {
        contact_msg.classList.add("text-danger")
        contact_msg.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> Votre fromulaire est mal rempli`
    }
    event.preventDefault()
})

function disable_all_fields() {
    disable = (item) => {
        item.setAttribute("disabled", "")
    }
    contact_page_form_inputs.forEach((input) => disable(input))
    disable(textarea)
    disable(send_btn)
}

async function send_mail_to_server() {
    let formData = new FormData(form)
    const response = await fetch("https://alex-blk.alwaysdata.net/logic/contact_to_mail.php", {
        method: "POST",
        body: formData,
    })
    let code = await response.status
    return code
}
