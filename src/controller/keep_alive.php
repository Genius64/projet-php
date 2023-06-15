<?php
session_start();

// Met à jour l'horodatage de la requête AJAX
$_SESSION['last_activity'] = time();
?>