<?php
include 'bddConnection.php';

function getUserData($userId)
{
    $bdd = bddConnection();

    if ($userId === null) {
        header("location: ../../web/static/views/inscription.php");
    }else{
        try {
            $sqlQuery = "SELECT * FROM users WHERE id = :id";
            $request = $bdd->prepare($sqlQuery);
            $request->bindParam(':id', $userId);
            $request->execute();
    
            if ($request && $request->rowCount() > 0) {
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
}
?>