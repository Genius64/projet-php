<?php
include 'bddConnection.php';

function userConnection()
{
    $bdd = bddConnection();
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    session_start();

    try {
        if (empty($email)) {
            throw new Exception("Le champ email est vide");
        }
        if (empty($password)) {
            throw new Exception("Le champ mot de passe est vide");
        }
        $_SESSION['connection_time'] = null;
        if(!isset($_POST['remember'])){
            $_SESSION['connection_time'] = j(30);
        } else {
            $_SESSION['connection_time'] = s(5);
        }

        $sqlQuery = "SELECT * FROM users WHERE email = :email";
        $request = $bdd->prepare($sqlQuery);
        $request->execute(['email' => $email]);
        $user = $request->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
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
function s($secondes){
    return $secondes * 1000 ;
}
function j($jours){
    return $jours * s(86400);
}
    
?>