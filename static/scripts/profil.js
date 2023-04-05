const profilePicture = document.getElementById("profilePicture").src;
const userName = document.getElementById("username").textContent;
const email = document.getElementById("email").textContent;
const password = document.getElementById("password").textContent;
const description = document.getElementById("description").textContent;

const key = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2Nzk0Nzg2OTYsImV4cCI6MTY3OTQ3ODc1Nn0._9GmsGJmrKFl3L21dnKjv__RGXAEOjDdAj9pe8PIpqo';
let token = sessionStorage.getItem("token");

if(!token){
    window.location.replace('connexion.html')
}
    const url = 'https://afpatraining.snage.tech/profile';
    const data = { username, email, password, description, profilePicture};

    fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'x-api-key': `${key}`,
            'Authorization': `${token}`
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if(response.status !== 200){
            throw new Error('Erreur lors de la récupération des données.');
        }
        return response.json();
    })
    .then(data => {
        if(data){
            
        } else {
            console.log('Profile imcomplet');
        }
    })
    .catch(error => {
        console.error(error);
    });