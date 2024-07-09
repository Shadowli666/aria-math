async function getUserData() {
    const tbody = document.getElementById("tbody")
    tbody.innerHTML = '';
    try {
        const response = await fetch('getData.php');
        // Verificar si la respuesta es JSON
        const text = await response.text();
        const result = JSON.parse(text);
        if (result.success) {
            console.log(result.data);
            result.data.forEach(user => {
                const row = document.createElement("tr")
                row.innerHTML = `<td>${user.id}</td><td>${user.name}</td><td>${user.email}</td>`
                tbody.appendChild(row)
            });
        } else {
            console.error(result.message);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

async function registerUser(name, email) {
    try {
        const response = await fetch('register.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}`
        });
        const result = await response.json();
        if (result.success) {
            console.log(result.message);
        } else {
            console.error(result.message);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

const init = () =>{
    document.getElementById("register-form").addEventListener("submit", async (event)=>{
        event.preventDefault();
        const name = document.getElementById("name").value
        const email = document.getElementById("email").value
        await registerUser(name, email)
    })

    document.getElementById("getDataButton").addEventListener("click", async (event) =>{
        event.preventDefault();
        await getUserData();
    });
}


init()