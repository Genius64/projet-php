<?php
include 'bddConnection.php';

function registerUser()
{
    $bdd = bddConnection();
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $passwordConfirm = $_POST['password-confirm'] ?? '';

    try {
        if (empty($email)) {
            throw new Exception("Le paramètre email est absent");
        }
        if (empty($username)) {
            throw new Exception("Le paramètre username est absent");
        }
        if (empty($password)) {
            throw new Exception("Le paramètre password est absent");
        }

        $formatUsername = '/(?=^.{4,}$)/';
        $formatEmail = '/[a-z0-9]{1,}[\-\_\.a-z0-9]{0,}@[a-z]{2,}[\-\_\.a-z0-9]{0,}\.[a-z]{2,6}$/';
        $formatPassword = '/^(?=.*\d)(?=.*[!.?@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/';
        if (!preg_match($formatUsername, $username)) {
            throw new Exception("Le paramètre username ne correspond pas au format attendu");
        }
        if (!preg_match($formatEmail, $email)) {
            throw new Exception("Le paramètre email ne correspond pas au format attendu");
        }
        if (!preg_match($formatPassword, $password)) {
            throw new Exception("Le paramètre password ne correspond pas au format attendu");
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $ArrKeyValue = array(
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword
        );

        $sqlQuery = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $request = $bdd->prepare($sqlQuery);
        $request->execute($ArrKeyValue);

        header("Location: ../../static/views/connexion.php");
        exit();

    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        $bdd = null;
    }
}
?>
