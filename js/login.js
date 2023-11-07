const login_input = document.getElementById("login")
const password_input = document.getElementById("password")
const submit = document.getElementById("submit")
const login_url = "/logic/login.php"

submit.addEventListener("click", () => {
    if (login_input.value == "") {
        login_input.classList.add("is-invalid")
    }
    if (password_input.value == "") {
        password_input.classList.add("is-invalid")
    }
    let status = 0
    if (login_input.value != "" && password_input.value != "") {
        status = request_login(login_input.value, password_input.value)
        console.log(status)
    }
})

async function request_login(login, password) {
    let formData = new FormData()
    formData.append("login", login)
    formData.append("password", password)
    const response = await fetch(login_url, {
        method: "POST",
        body: formData,
    })
    //RETURN THE STATUS CODE 400: DATA MISSING / 404: USER NOT FOUND / 403: BAD PASSWORD / 202: ACCEPTED
    return response.status
}
