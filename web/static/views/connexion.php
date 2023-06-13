<?php
include '../../../src/controller/userConnexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    userConnection();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/connexion.css">
    <title>Search | Connexion</title>
</head>
<body>
    <header>
        <a href="../../index.php"><img src="../assets/images/logo.svg" alt="Search / jeux de rôle"></a>
        <nav>
            <a href="profil.php" class="btn">Connexion</a>
            <a href="inscription.php" class="btn">Inscription</a>
        </nav>
    </header>
    <main>
        <h1>CONNEXION</h1>
        <form method="post">
            <section id="sec-email">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" placeholder="email@site.com">
            </section>
            <section id="sec-password">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="*************">
                <a href="#">mot de passe oublié ?</a>
            </section>
            <section>
                <input type="checkbox" id="remember">
                <label for="remember">Rester connecté</label>
            </section>
            <input type="submit" id="btn-connexion" class="submit" value="Connexion">
        </form>
    </main>
</body>
</html>
