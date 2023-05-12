<!DOCTYPE html>
<html>
    <?php
    session_start(); // Démarre la session

    // Vérifie si l'identifiant et le rôle sont présents dans la variable de session
    if (isset($_SESSION['identifiant']) && isset($_SESSION['role'])) {
        // L'utilisateur est connecté, vous pouvez utiliser $_SESSION['identifiant'] et $_SESSION['role'] pour récupérer l'identifiant et le rôle

        // Vérifie si le rôle de l'utilisateur est "Consultant"
        if ($_SESSION['role'] === "Consultant") {
            // L'utilisateur est un consultant, vous pouvez autoriser l'accès à la page
            // Autres traitements de la page protégée
        } else {
            // Redirection vers une autre page ou affichage d'un message d'erreur pour les utilisateurs n'ayant pas le rôle de consultant
            header("Location: autre_page.php");
            exit();
        }
    } else {
        // Redirection vers la page de connexion si l'identifiant ou le rôle n'est pas présent dans la variable de session
        header("Location: connexion.php");
        exit();
    }
    ?>

</html>