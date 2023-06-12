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
                <p id="username"></p><i class="fa-regular fa-pen-to-square"></i>
                <p id="email"></p><i class="fa-regular fa-pen-to-square"></i>
                <p id="password"></p><i class="fa-regular fa-pen-to-square"></i>
            </li>
        </ul>
        <div><i class="fa-solid fa-star" style="color: #FFF500;"></i> Favorits <i id="caret-right" class="fa-solid fa-caret-right"></i><i id="caret-down" class="fa-solid fa-caret-down"></i></div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="facultatif..."></textarea>
        <input class="submit" type="submit" value="Enregistrer">
        
    </main>
</body>