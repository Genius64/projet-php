const btnConnexion = document.getElementById('btn-connexion');
const key = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2Nzk0Nzg2OTYsImV4cCI6MTY3OTQ3ODc1Nn0._9GmsGJmrKFl3L21dnKjv__RGXAEOjDdAj9pe8PIpqo';

const token = sessionStorage.getItem("token");
if(token){
    window.location.replace('profil.html');
}

btnConnexion.addEventListener('click', e => {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const url = 'https://afpatraining.snage.tech/login';

    const data = { email: email, password: password };

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'x-api-key': `${key}`
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if(response.status !== 200){
            throw new Error('Erreur lors de la récupération des données.');
        }
        sessionStorage.setItem("token", response.data.token);
        return response.json();
    })
    .then(data => {
        if(data){
            window.location.replace('profil.html');
        } else {
            alert('Identifiants incorrects');
        }
    })
    .catch(error => {
        console.error(error);
    });
    e.preventDefault();
})