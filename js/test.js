const url = "/logic/job.php"

async function postUser(url, data = {}) {
    const response = await fetch(url, {
        method: "POST",
        // no-cors, *cors, same-origin
        // mode: "cors",
        // cache: "no-cache",
        // include, *same-origin, omit
        // credentials: "same-origin",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data), // body data type must match "Content-Type" header
    })
    return response.status
}
