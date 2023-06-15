<?php 
session_start();

// Vérifie si l'utilisateur a quitté la page (par exemple, s'il est inactif depuis plus de 10 secondes)
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 10)) {
    // Détruit la session pour déconnecter l'utilisateur
    session_destroy();
    // Redirige l'utilisateur vers une page de déconnexion ou une autre page appropriée
    header("Location: ../src/controller/deconnexion.php");
    exit();
}

// Met à jour l'horodatage de la dernière activité
$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6daef4aa49.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="static/styles/style.css">
    <link rel="stylesheet" href="static/styles/index.css">
    <title>Search | Accueil</title>
</head>


<script>
    // Envoie une requête AJAX toutes les x secondes
    setInterval(function() {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', 'keep_alive.php', true);
        xhr.send();
    }, 5000) // 5 secondes
</script>;

<body>
    <header>
        <a href="#"><img src="static/assets/images/logo.svg" alt="Search / jeux de rôle"></a>
        <nav style="<?php
        if(isset($_SESSION['user_id'])){
            echo "display:none;";
        }else{
            echo "display:flex;";
        }
        ?>">
            <a href="static/views/connexion.php" class="btn">Connexion</a>
            <a href="static/views/inscription.php" class="btn">Inscription</a>
        </nav>
        <nav style="<?php
        if(isset($_SESSION['user_id'])){
            echo "display:flex;";
        }else{
            echo "display:none;";
        }
        ?>">
            <form action="../src/controller/deconnexion.php" method="post" id="logoutForm">
                <input type="submit" name="logout_button" value="Déconnexion" class="btn"/>
            </form>
            <a href="static/views/profil.php" class="btn">Profil</a>
        </nav>
    </header>
    <main>
        <h1>ACCUEIL</h1>
        <p>RECHERCHE :</p>
        <input type="text" placeholder="D&D 5, Pathfinder, Alien, ect...">
        <h2>Médiéval fantastique</h2>
        <ul>
            <li>
                <img src="static/assets/images/dungeonsanddragons.jpg" alt="Dungeons & Dragons">
                <section>
                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    <p>Dungeons & Dragons 5</p>
                </section>
            </li>
            <li>
                <img src="static/assets/images/pathfinder.jpg" alt="Pathfinder">
                <section>
                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    <p>Pathfinder</p>
                </section>
            </li>
            <li>
                <img src="static/assets/images/chroniquesOublié.jpg" alt="Chronique oubliées">
                <section>
                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    <p>Chronique oubliées</p>
                </section>
            </li>
        </ul>
        <h2>Horreur</h2>
        <ul>
            <li>
                <img src="static/assets/images/Alien.jpg" alt="Alien">
                <section>
                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    <p>Alien</p>
                </section>
            </li>
            <li>
                <img src="static/assets/images/l'appel de Cthulhu.jpg" alt="l'appel de Cthulhu">
                <section>
                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    <p>L’appel de Cthulhu</p>
                </section>
            </li>
            <li>
                <img src="static/assets/images/channel fear.jpg" alt="channel fear">
                <section>
                    <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    <p>Channel Fear</p>
                </section>
            </li>
        </ul>
    </main>
</body>
</html>