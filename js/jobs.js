const title = document.getElementById("title")
const job_location = document.getElementById("location")
const job_type = document.getElementById("type")
const time = document.getElementById("time")
const job_salary = document.getElementById("salary")
const tech = document.getElementById("tech")
const add_tech = document.getElementById("add_tech")
const badge_container = document.querySelector(".create-job .badge-container")
const job_description = document.getElementById("job_description")
const add_job_btn = document.getElementById("add_job")
const inputs = document.querySelectorAll(".create-job input")
const alert_container = document.getElementById("alert-containber")
const reset_form_btn = document.getElementById("reset_from")

const techs = new Set()
let form_locked = false

function generate_alert(alert_type = "success", message = "Le poste a bien été crée.") {
    const alert = `           
<div class="alert alert-${alert_type} alert-dismissible fade show text-center" role="alert">
<p>${message}</p>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>`
    return alert
}

const job_url = "/logic/job.php"

add_job_btn.addEventListener("click", async () => {
    const res = await send_create_job_request(
        title.value,
        job_location.value,
        job_type.value,
        time.value,
        job_salary.value,
        techs,
        job_description.value
    )
    if (res == 201) {
        validate_form()
        alert_container.innerHTML = generate_alert("success", "Le poste a bien été crée avec succes.")
    } else {
        alert_container.innerHTML = generate_alert(
            "danger",
            "Il y a eu un probleme avec la base de donnés.<br>Contactez l'administrateur du site."
        )
    }
})

reset_form_btn.addEventListener("click", () => {
    reset_job_form()
})

function validate_form() {
    form_locked = true
    inputs.forEach((input) => {
        input.classList.add("is-valid")
        input.setAttribute("disabled", "")
    })
    job_description.classList.add("is-valid")
    job_description.setAttribute("disabled", "")
    add_job_btn.setAttribute("disabled", "")
    add_tech.setAttribute("disabled", "")
}

function reset_job_form() {
    inputs.forEach((input) => {
        input.value = ""
        input.classList.remove("is-valid")
        input.removeAttribute("disabled")
    })
    job_description.classList.remove("is-valid")
    job_description.removeAttribute("disabled")
    job_description.value = ""
    job_description.innerText = ""
    add_job_btn.removeAttribute("disabled")
    add_tech.removeAttribute("disabled")
    document.querySelectorAll(".tech-badge").forEach((tech_badge) => tech_badge.remove())
    techs.clear()
    alert_container.innerHTML = ""
    form_locked = false
}

async function send_create_job_request(title, location, type, time, salary, techs, description) {
    const techsArray = [...techs]
    let formData = new FormData()
    formData.append("title", title)
    formData.append("location", location)
    formData.append("type", type)
    formData.append("time", time)
    formData.append("salary", salary)
    formData.append("technologies", techsArray)
    formData.append("description", description)
    const response = await fetch(job_url, {
        method: "POST",
        body: formData,
    })
    //RETURN THE STATUS CODE 400: DATA MISSING / 404: USER NOT FOUND / 403: BAD PASSWORD / 202: ACCEPTED
    return response.status
}

function chage_btn_to_success() {
    add_job_btn.classList.remove("btn-secondary")
    add_job_btn.classList.add("btn-success")
}

//ADD TECH AND BADGE

function close_badge_btn() {
    const close_badge_btn = document.createElement("i")
    close_badge_btn.className = "fa-solid fa-circle-xmark"
    close_badge_btn.style = "margin-left:8px; font-size : 14px;"
    return close_badge_btn
}

function generate_badge(name = "") {
    const badge = document.createElement("span")
    const text = document.createElement("span")
    text.innerText = name
    badge.appendChild(text)
    badge.innerText = name
    badge.className = "badge bg-grey tech-badge"
    const close = close_badge_btn()
    badge.appendChild(close)
    close.addEventListener("click", () => remove_tech_badge(badge, name))
    return badge
}

function add_tech_badge(name = "JavaScript") {
    name = name.toUpperCase()
    if (techs.has(name)) {
        tech.classList.add("is-invalid")
        return null
    }
    const badge = generate_badge(name)
    badge_container.appendChild(badge)
    techs.add(name)
    tech.value = ""
    tech.classList.remove("is-invalid")
}

function remove_tech_badge(badge, name = "") {
    if (form_locked) return null
    badge.remove()
    techs.delete(name)
    tech.value = name
    console.log(techs)
}

tech.addEventListener("keyup", (e) => {
    if (e.key === "Enter" && tech.value) add_tech_badge(tech.value)
})

add_tech.addEventListener("keyup", (e) => {
    if (e.key === "Enter" && tech.value) add_tech_badge(tech.value)
})

add_tech.addEventListener("click", () => {})
