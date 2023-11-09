const username = document.getElementById("username")
const email = document.getElementById("email")
const password = document.getElementById("password")
const generate = document.getElementById("generate")
//NOT REQUIRED
const first_name = document.getElementById("first_name")
const last_name = document.getElementById("last_name")
//BUTTONS
const see = document.getElementById("see")
const copy = document.getElementById("copy_pass")
const add_user = document.getElementById("add_user")

generate.addEventListener("click", () => generate_password())
see.addEventListener("click", () => show_clear_password())
add_user.addEventListener("click", () => create_user())

function generate_password() {
    const rand_str = gen_rand_string()
    password.type = "password"
    password.value = rand_str
    display_show_copy()
}

password.addEventListener("keyup", (event) => {
    if (password.value !== "") display_show_copy()
    else hide_show_copy()
})

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

function create_user() {
    const valid_fields = validate_required_fields()
    if (!valid_fields) return null
    request_body = {
        username: username.value,
        email: email.value,
        password: password.value,
        first_name: first_name.value,
        last_name: last_name.value,
    }
    console.log(request_body)
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
