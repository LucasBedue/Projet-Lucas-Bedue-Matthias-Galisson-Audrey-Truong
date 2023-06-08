<!DOCTYPE html>
<html>
    <?php
    session_start(); 

    session_unset();

    session_destroy();
    header("Location: login.php");  //returns to login
    exit();
    ?>


</html>