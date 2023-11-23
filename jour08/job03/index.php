<?php
session_start();

// Vérifie si la variable de session 'prenoms' existe, sinon l'initialise comme un tableau vide
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = array();
}

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prenom'])) {
    // Récupère le prénom soumis dans le formulaire
    $nouveauPrenom = $_POST['prenom'];

    // Ajoute le prénom à la liste dans la variable de session
    $_SESSION['prenoms'][] = $nouveauPrenom;
}

// Vérifie si le bouton "reset" a été soumis
if (isset($_POST['reset'])) {
    // Réinitialise la liste des prénoms en vidant la variable de session
    $_SESSION['prenoms'] = array();
    header("Refresh:0"); // Recharge la page pour afficher la liste réinitialisée
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter des prénoms</title>
</head>
<body>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <input type="submit" value="Ajouter">
    </form>

    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        // Affiche tous les prénoms contenus dans la variable de session
        if (isset($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>$prenom</li>";
            }
        }
        ?>
    </ul>

    <form method="post">
        <input type="submit" name="reset" value="Reset la liste">
    </form>
</body>
</html>