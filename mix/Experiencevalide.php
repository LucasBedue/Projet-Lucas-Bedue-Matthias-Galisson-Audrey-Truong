<!DOCTYPE html>
<html lang="fr">
    <head>
    <?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Jeune") {
    echo '<script>alert("Veuillez vous connecter en tant que compte Jeune pour accéder à cette page.");</script>';
    echo '<script>window.location.href = "login.php";</script>';
    exit();
}
?>
</head>
<body>
<link rel="stylesheet" href="jeunespage.css" />

    <p>Votre expérience a été envoyé avec succès!</p>
    <input type="button" class="valid" onclick="<?php "Location: PageListeExperience.php"; ?>" value="Voir ma liste d'expérience">
	 
</body>
</html>