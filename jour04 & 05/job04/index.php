<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label for="Prenom">Quel est votre prenom:</label>
        <input type="text" id="prenom" name="prenom"> <br/>

        <label for="nom">Quel est votre nom:</label>
        <input type="text" id="nom" name="nom"> <br/>

        <label for="age">Quel est votre age:</label>
        <input type="number" id="age" name="age"> <br/>

        <input type="submit" value="Envoyer">
    </form>

    <?php
// Si il y a des arguments POST
if (!empty($_POST)) {
    // Créez le début du tableau HTML
    echo "<table>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Pour chaque argument POST
    foreach ($_POST as $key => $value) {
        // Créez une nouvelle ligne de tableau avec les informations sur l'argument et sa valeur
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }

    // Terminez le tableau HTML
    echo "</table>";
} else {
    echo "Aucun argument POST reçu.";
}
?>
</body>
</html>