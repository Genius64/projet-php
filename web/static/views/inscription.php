<?php

$bdd = new PDO('mysql:host=localhost;dbname=users_search;charset=utf8', 'root', '');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password-confirm'];

try {
    if (!isset($_POST['email'])) throw new Exception("Le paramètre email est absent");
    if (!isset($_POST['username'])) throw new Exception("Le paramètre username est absent");
    if (!isset($_POST['password'])) throw new Exception("Le paramètre password est absent");

    $Format_Content = '#[a-z0-9]{1,}[\-\_\.a-z0-9]{0,}@[a-z]{2,}[\-\_\.a-z0-9]{0,}\.[a-z]{2,6}$#';
    

} catch (Exception $e) {
    
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/inscription.css">
    <title>Search | Inscription</title>
</head>
<body>
    <header>
        <a href="../../index.php"><img src="../assets/images/logo.svg" alt="Search / jeux de rôle"></a>
        <nav>
            <a href="connexion.php" class="btn">Connexion</a>
            <a href="inscription.php" class="btn">Inscription</a>
        </nav>
    </header>
    <main>
        <h1>INSCRIPTION</h1>
        <form action="<?php echo htmlspecialchars();?>" method="post">
            <section>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" placeholder="Utilisateur205">
            </section>
            <section>
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" placeholder="email@site.com">
            </section>
            <section>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" placeholder=".............">
            </section>
            <section>
                <label for="password-confirm">Confirmation mot de passe</label>
                <input type="password" id="password-confirm" placeholder=".............">
            </section>
            <section id="checkbox-terms">
                <input type="checkbox" id="terms">
                <label for="terms">J’accepte les conditions d’utilisation</label>
            </section>
            <input type="submit" id="inscription" class="submit" value="Inscription">
        </form>
    </main>
    <script src="../scripts/inscription.js"></script>
</body>
</html>