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
        <form action="<?php echo htmlspecialchars($_SERVER[""]);?>" method="post">
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

<?php
$username = $_POST['username'];
$mail = $_POST['mail']
if ($username.length >= 4 && $mail.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/) && password.length >= 8 && password === passwordConfirm){

}
?>