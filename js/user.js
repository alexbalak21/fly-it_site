const username = document.getElementById("username")
const email = document.getElementById("email")
const password = document.getElementById("password")
const generate = document.getElementById("generate")
//NOT REQUIRED
const first_name = document.getElementById("first_name")
const last_name = document.getElementById("last_name")
//alert container
const alert_container = document.getElementById("alert-container")

//BUTTONS
const see = document.getElementById("see")
const copy = document.getElementById("copy_pass")
const add_user = document.getElementById("add_user")
const modify = document.getElementById("modify")
//URL FOR CREATING USER
const create_user_url = "/logic/create_user.php"

//PASSWORD OPERATIONS
generate.addEventListener("click", () => generate_password())
see.addEventListener("click", () => show_clear_password())
copy.addEventListener("click", () => copy_password_to_clipBoard())
function copy_password_to_clipBoard() {
    if (password.value.length < 5) {
        password.classList.add("is-invalid")
        return null
    }
    navigator.clipboard.writeText(password.value)
}

//FIELDS
const fields = [username, email, password, first_name, last_name, generate, copy, see, add_user]

//SEND REQUEST TO THE BACKEND TO CREATE USER

add_user.addEventListener("click", async () => {
    const response = await create_user()
    const code = await response.status
    const created_user = await response.json()
    Object.seal(created_user)
    Object.freeze(created_user)
    if (code !== 201) {
        alert_container.innerHTML = generate_alert(
            "danger",
            "Il y a eu un probleme avec la base de donnés.<br>Contactez l'administrateur du site."
        )
    } else {
        lock_all_fiields()
        alert_container.innerHTML = generate_alert("success", "L'utilisateur a bien été crée avec succes.")
        modify.addEventListener("click", () => modify_current_user(created_user))
        modify.removeAttribute("disabled")
        alert_container.innerHTML = ""
    }
})

function modify_current_user(user) {
    username.value = user.username
    email.value = user.email
    password.value = ""
    hide_show_copy()
    first_name.value = user.first_name
    last_name.value = user.last_name
    unlock_all_fields()
}

function unlock_all_fields() {
    fields.forEach((field) => {
        field.classList.remove("is-valid")
        field.removeAttribute("disabled")
    })
}

function lock_all_fiields() {
    fields.forEach((field) => {
        field.classList.add("is-valid")
        field.setAttribute("disabled", "")
    })
}

function disable_field(field) {}

function generate_password() {
    const rand_str = gen_rand_string()
    password.type = "password"
    password.value = rand_str
    password.classList.remove("is-invalid")
    display_show_copy()
}

password.addEventListener("keyup", (event) => {
    password.classList.remove("is-invalid")
    if (password.value !== "") display_show_copy()
    else hide_show_copy()
})

function generate_alert(alert_type = "success", message = "Le poste a bien été crée.") {
    const alert = `           
<div class="alert alert-${alert_type} alert-dismissible fade show text-center" role="alert">
<p>${message}</p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`
    return alert
}

function display_show_copy() {
    see.classList.remove("d-none")
    copy.classList.remove("d-none")
}
function hide_show_copy() {
    see.classList.add("d-none")
    copy.classList.add("d-none")
}

function show_clear_password() {
    if (password.type === "password") password.type = "text"
    else password.type = "password"
}

function gen_rand_string(string_lenght = 16) {
    let result = ""
    const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.!#&"
    const characters_length = characters.length
    let counter = 0
    for (let i = 0; i < string_lenght; i++) result += characters.charAt(Math.floor(Math.random() * characters_length))
    return result
}

async function create_user() {
    const valid_fields = validate_required_fields()
    if (!valid_fields) return null
    console.log(valid_fields)
    request_body = {
        username: username.value,
        email: email.value,
        password: password.value,
        first_name: first_name.value,
        last_name: last_name.value,
    }
    return await send_create_user_request("POST", request_body)
}

function validate_required_fields() {
    let valid = true
    const fields = [username, email, password]
    fields.forEach((field) => {
        if (!validate_field(field)) valid = false
    })
    return valid
}

function validate_field(field) {
    if (field.value.length < 5) {
        field.classList.add("is-invalid")
        field.addEventListener("keyup", () => field.classList.remove("is-invalid"))
        return false
    } else {
        field.classList.remove("is-invalid")
        return true
    }
}

async function send_create_user_request(method = "POST", data = {}) {
    const response = await fetch(create_user_url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    })
    return response
}
