const title = document.getElementById("title")
const job_location = document.getElementById("location")
const job_type = document.getElementById("type")
const time = document.getElementById("time")
const job_salary = document.getElementById("salary")
const job_description = document.getElementById("job_description")
const add_job = document.getElementById("add_job")

const job_url = "/logic/job.php"

add_job.addEventListener("click", () => {
    const res = create_job(
        title.value,
        job_location.value,
        job_type.value,
        time.value,
        job_salary.value,
        techs,
        job_description.value
    )
    console.log(res)
    if (res == 201) console.log("Created")
})

async function create_job(title, location, type, time, salary, techs, description) {
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
    return response.statusCode
}
S

function cahge_button_color() {
    add_job.classList.remove("btn-secondary")
    add_job.classList.add("btn-success")
}

//ADD TECH AND BADGE
const tech = document.getElementById("tech")
const add_tech = document.getElementById("add_tech")
const badge_container = document.querySelector(".create-job .badge-container")
const techs = new Set()

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
    badge.className = "badge bg-grey"
    const close = close_badge_btn()
    badge.appendChild(close)
    close.addEventListener("click", () => remove_tech_badge(badge, name))
    return badge
}

function add_tech_badge(name = "JavaScript") {
    const badge = generate_badge(name)
    badge_container.appendChild(badge)
    techs.add(name)
    tech.value = ""
    console.log(techs)
}

function remove_tech_badge(badge, name = "") {
    badge.remove()
    techs.delete(name)
    tech.value = name
    console.log(techs)
}

tech.addEventListener("keyup", (e) => {
    if (e.key === "Enter" && tech.value) add_tech_badge(tech.value)
})

add_tech.addEventListener("click", () => {
    tech.value && add_tech_badge(tech.value)
})
