const btnInscription = document.getElementById('inscription')
const key = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2Nzk0Nzg2OTYsImV4cCI6MTY3OTQ3ODc1Nn0._9GmsGJmrKFl3L21dnKjv__RGXAEOjDdAj9pe8PIpqo';

btnInscription.addEventListener("click", e =>{
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const passwordConfirm = document.getElementById('password-confirm').value
    const url = 'https://afpatraining.snage.tech/signup';

    if (username.length >= 4 && email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/) && password.length >= 8 && password === passwordConfirm) {
        if(terms.checked){
            let newLocation = false;
            const data = { username: username, email: email, password: password };
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'x-api-key': `${key}`
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors de la récupération des données.');
            }else{
                newLocation = true;
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error(error);
        });
        }else{
            alert("Veuiller cocher la case d'acceptation des conditions d'utilisation avant de continuer !");
        }
    } else {
        alert("Formulaire incomplet ou invalide");
    }
    if(newLocation === true){
        window.location.replace('profil.html');
    }
});