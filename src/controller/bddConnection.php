<?php
function bddConnection()
{
    $hostname = 'localhost';
    $dbname = 'users_search';
    $username = 'root';
    $password = ''; 
    
    try {
        $bdd = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        
        // Définir le mode d'erreur PDO sur exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd; // Retourner l'objet PDO pour pouvoir l'utiliser dans d'autres fonctions
    } catch(PDOException $e) {
        echo "Connexion échouée: " . $e->getMessage();
        return null; // Retourner null en cas d'échec de la connexion
    }
}
?>