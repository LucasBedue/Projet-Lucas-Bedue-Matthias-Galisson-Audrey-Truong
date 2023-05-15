<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
    
<body>        

    <?php
    session_start();
    
    session_destroy();
    ?>

    <h1>Entrer un mail</h1>
    <form method="post" action="verificationConnexion.php">
        
    <table>
        <tr>
            <td> Email : </td>
            <td> <input type="text" name="mail" id="mail" required> </td>
        </tr>
        <tr>
            <td> Mot de passe : </td>
            <td> <input type="password" name="mdp" id="mdp" required><br>
        </tr>
        
    </table>
    <input type="submit" value="Se connecter">
    </form>
    <form action="menu.php" method="post">
        <input type="submit" value="Accéder au menu">
    </form>
</body>
</html>