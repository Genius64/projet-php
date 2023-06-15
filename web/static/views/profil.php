<?php
include '../../../src/controller/userData.php';

// Appel de la fonction pour récupérer les données de l'utilisateur
session_start();

if($_SESSION['user_id'] === null){
    header("Location:connexion.php");
}

$userData = getUserData($_SESSION['user_id']);
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
        <nav style="<?php 
        if($_SESSION['user_id']){
            echo "display:none;";
        }else{
            echo "display:flex;";
        }
        ?>">
            <a href="connexion.php" class="btn">Connexion</a>
            <a href="inscription.php" class="btn">Inscription</a>
        </nav>
        <nav style="<?php 
        if($_SESSION['user_id']){
            echo "display:flex;";
        }else{
            echo "display:none;";
        }
        ?>">
            <form action="../../../src/controller/deconnexion.php" method="post" id="logoutForm">
                <input type="submit" name="logout_button" value="Déconnexion" class="btn"/>
            </form>
            <a href="#" class="btn">Profil</a>
        </nav>
    </header>
    <main>
        <h1>PROFIL</h1>
        <section id="profil-data">
            <section>
                <i class="fa-solid fa-user"></i>
                <img id="profilePicture" src="#">
            </section>
            <table>
                <tr>
                    <td id="username"><?php echo $userData['username']; ?></td>
                    <td><i class="fa-regular fa-pen-to-square"></i></td>
                </tr>
                <tr>
                    <td id="email"><?php echo $userData['email']; ?></td>
                    <td><i class="fa-regular fa-pen-to-square"></i></td>
                </tr>
                <tr>
                    <td id="password"><?php echo '**********'; ?></td>
                    <td><i class="fa-regular fa-pen-to-square"></i></td>
                </tr>
            </table>
        </section>
        <input id="description" type="text" placeholder="Facultatif...">
    </main>
</body>
</html>
