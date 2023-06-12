<?php
include '../../../src/controller/userData.php';

// Appel de la fonction pour récupérer les données de l'utilisateur
$userData = getUserData();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6daef4aa49.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/profil.css">
    <title>Search | Accueil</title>
</head>
<body>
    <header>
        <a href="../../index.php"><img src="../assets/images/logo.svg" alt="Search / jeux de rôle"></a>
        <nav>
            <a href="#" class="btn">Connexion</a>
            <a href="inscription.php" class="btn">Inscription</a>
        </nav>
    </header>
    <main>
        <h1>PROFIL</h1>
        <ul>
            <li>
                <i class="fa-solid fa-user"></i>
                <img id="profilePicture" src="#" alt="Image de profil">
            </li>
            <li>
                <p id="username"><?php echo $userData['username']; ?></p><i class="fa-regular fa-pen-to-square"></i>
                <p id="email"><?php echo $userData['email']; ?></p><i class="fa-regular fa-pen-to-square"></i>
                <p id="password"><?php echo '**********'; ?></p><i class="fa-regular fa-pen-to-square"></i>
            </li>
        </ul>
        <input type="text">
    </main>
</body>