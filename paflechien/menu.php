<!DOCTYPE html>
<html>

<body>
    <?php
    session_start();
    
    // Récupération du rôle à partir de la session
    if (isset($_SESSION['role'])) {
        $role = $_SESSION['role'];
    
        // Utilisez le rôle comme bon vous semble dans cette page
        echo "<h1>Bienvenue, $role</h1>";

        if ($role=='Jeune'){
            echo "<p>Salut à toi, jeune entrepreneur !</p>";
            echo "<form method='post' action='listeexperience.php'>
                    <input type='submit' value='Voir toutes les expèriences'>
                </form>";
            echo "<form method='post' action='creerexperience.php'>
                <input type='submit' value='Créer une expèrience'>
            </form>";
            echo "<form method='post' action='avoirunlienconsultant.php'>
                <input type='submit' value='Obtenez un lien a envoyer à un consultant'>
            </form>";
            echo "<form method='post' action='experienceCV.php'>
                <input type='submit' value='Visionnez vos expèriences au format pdf'>
            </form>";
            echo "<form method='post' action='logout.php'>
                    <input type='submit' value='Déconnexion'>
                </form>";
        }
    } else {
        // Gestion si le rôle n'est pas défini
        echo "<h1>Bienvenue à toi, visiteur du turfu</h1>";
    }
    ?>
</body>
</html>