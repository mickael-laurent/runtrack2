<?php
session_start();

// Vérifie si la variable de session existe, sinon l'initialise à zéro
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

// Vérifie si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0; // Réinitialise le compteur
    header("Refresh:0"); // Recharge la page pour afficher le compteur réinitialisé
    exit();
}

// Incrémente le compteur à chaque visite
$_SESSION['nbvisites']++;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></h1>
    <form method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>