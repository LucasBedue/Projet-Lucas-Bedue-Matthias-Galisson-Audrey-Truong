<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
    </head>
    <body>
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
    </body>
</html>