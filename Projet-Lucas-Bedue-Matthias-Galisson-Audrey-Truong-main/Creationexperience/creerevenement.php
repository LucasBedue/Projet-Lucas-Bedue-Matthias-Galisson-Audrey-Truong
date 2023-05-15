<!DOCTYPE html>
<html lang="fr">

<body>
    <link rel="stylesheet" href="creerevenement.css" />
    <?php
    session_start();
    
    // Récupération du rôle à partir de la session
    if (isset($_SESSION['role'])) {
        $role = $_SESSION['role'];




    }
 else {
    // Gestion si le rôle n'est pas défini
    header('Location: ./../css audrey/receptionpage.html');
}
?>
</body>
</html>