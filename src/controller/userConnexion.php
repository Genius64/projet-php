<?php
include 'bddConnection.php';

function userConnection()
{
    $bdd = bddConnection();
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        if (empty($email)) {
            throw new Exception("Le champ email est vide");
        }
        if (empty($password)) {
            throw new Exception("Le champ mot de passe est vide");
        }

        $sqlQuery = "SELECT * FROM users WHERE email = :email";
        $request = $bdd->prepare($sqlQuery);
        $request->execute(['email' => $email]);
        $user = $request->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // L'utilisateur est connecté avec succès
            // Effectuez les opérations nécessaires (par exemple, définissez les variables de session)

            // Redirigez vers une autre page
            header("Location: ../../static/views/profil.php");
            exit();
        } else {
            throw new Exception("Identifiants de connexion invalides");
        }

    } catch (Exception $e) {
        $error = $e->getMessage();
    } finally {
        $bdd = null;
    }
}
?>