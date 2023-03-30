const profilePicture = document.getElementById("profilePicture").src;
const userName = document.getElementById("username").value;
const email = document.getElementById("email").value;
const description = document.getElementById("description").value;

const key = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2Nzk0Nzg2OTYsImV4cCI6MTY3OTQ3ODc1Nn0._9GmsGJmrKFl3L21dnKjv__RGXAEOjDdAj9pe8PIpqo';
const url = 'https://afpatraining.snage.tech/profile';

fetch(url, {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
        'x-api-key': `${key}`
        
    },
    body: {

    }
})