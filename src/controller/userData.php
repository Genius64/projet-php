<?php
include 'bddConnection.php';

function getUserData()
{
    $bdd = bddConnection();

    try {
        $sqlQuery = "SELECT * FROM users";
        $request = $bdd->query($sqlQuery);

        if ($request) {
            $userData = $request->fetch(PDO::FETCH_ASSOC);
            return $userData;
        } else {
            throw new Exception("Erreur lors de la récupération des données utilisateur");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        $bdd = null;
    }
}
?>